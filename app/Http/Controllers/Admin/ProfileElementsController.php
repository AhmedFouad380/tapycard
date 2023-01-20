<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\BusinessHour;
use App\Models\Profile;
use App\Models\ProfileElement;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class ProfileElementsController extends Controller
{
    public function index($id){

        if(Auth::guard('admin')->check()){
            $data = Profile::findOrFail($id);
        }else{
            $data = Profile::where('id',$id)->where('user_id',Auth::guard('web')->id())->firstOrFail();
        }

        return view('Admin.ProfileElements.elements',compact('data'));
    }

    public function datatable(Request $request)
    {
        $data = ProfileElement::orderBy('id', 'desc');
        if(isset($request->type)){
            $data->where('type',$request->type);
        }
        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })

            ->editColumn('is_active', function ($row) {
                $is_active = '<div class="badge badge-light-success fw-bolder">Active</div>';
                $not_active = '<div class="badge badge-light-danger fw-bolder">inactive</div>';
                if ($row->is_active == 'active') {
                    return $is_active;
                } else {
                    return $not_active;
                }
            })
            ->addColumn('actions', function ($row) {
                $actions = ' <a href="' . url("ProfileElement-edit/" . $row->id) . '" class="btn btn-active-light-info">'.__('lang.Edit').' <i class="bi bi-pencil-fill"></i>  </a>';

                return $actions;

            })

            ->rawColumns([ 'checkbox', 'is_active','actions','value'])
            ->make();

    }
    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'profile_id' => 'required',
            'type' => 'required',
            'value' => 'required',
            'is_active' => 'nullable|string',

        ]);


        if(is_array($request->value)){
            foreach($request->value as $value) {
                $data = new ProfileElement();
                $data->profile_id = $request->profile_id;
                $data->type = $request->type;
                $data->sub_type = $request->sub_type;
                $data->value = $value;
                $data->ar_title = $request->ar_title;
                $data->en_title = $request->en_title;
                $data->is_active = $request->is_active;
                $data->save();
            }
        }else{
            if($request->type == 'contact' && $request->sub_type ==  'phone'){
                $value = $request->country_code . $request->value;
            }else{
                $value =  $request->value;

            }
            $data =  new ProfileElement();
            $data->profile_id=$request->profile_id;
            $data->type=$request->type;
            $data->sub_type=$request->sub_type;
            $data->value=$value;
            $data->ar_title=$request->ar_title;
            $data->en_title=$request->en_title;
            $data->is_active=$request->is_active;
            $data->save();

        }

        return redirect()->back()->with('message', 'تم الاضافة بنجاح ');


    }

        public function destroy(Request $request)
    {
        try {
            ProfileElement::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }


    public function Store_BusinessHours(Request  $request){
          $this->validate(request(), [
            'day' => 'array|required',
            'start_time' => 'array|required',
            'end_time' => 'array|required',
            'profile_id' => 'required',

        ]);
        $start_time=$request->start_time;
        $end_time=$request->end_time;
        $active=$request->is_active;
        $days = $request->day;
        if(BusinessHour::where('profile_id',$request->profile_id)->count() > 0){
            foreach($request->day as $key => $day){
                $b = 'is_active'.$key;
                if(BusinessHour::where('day',$day)->where('profile_id',$request->profile_id)->count() >  0){
                    $data =   BusinessHour::where('day',$day)->where('profile_id',$request->profile_id)->first();
                    $data->start_time=$start_time[$key];
                    $data->end_time=$end_time[$key];
                    $data->is_active=$request->$b;
                    $data->save();
                }else{
                    $data =  new BusinessHour();
                    $data->profile_id=$request->profile_id;
                    $data->day=$day;
                    $data->start_time=$start_time[$key];
                    $data->end_time=$end_time[$key];
                    $data->is_active=$request->$b;
                    $data->save();
                }
            }
        }else{
            foreach($days as $key => $day){
                $b = 'is_active'.$key;
                $data =  new BusinessHour();
                $data->profile_id=$request->profile_id;
                $data->day=$day;
                $data->start_time=$start_time[$key];
                $data->end_time=$end_time[$key];
                $data->is_active=$request->$b;
                $data->save();
            }
        }

        return redirect()->back()->with('message', 'تم الاضافة بنجاح ');


    }

}
