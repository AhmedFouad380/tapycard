<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AppointmentsRelation;
use App\Models\ExchangeContact;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class ExhangeContactController extends Controller
{
    public function index()
    {
        return view('Admin.ExchangeContact.index');
    }
    public function datatable(Request $request)
    {
        $data = ExchangeContact::orderBy('id', 'desc');
        if(Auth::guard('web')->check()){
            $data->where('is_deleted',1);
        }
        if(isset($request->states) && $request->states != 0){
            $data->where('states',$request->states);
        }

        if(isset($request->from_date) && $request->from_date != 0){
            $data->whereDate('date','<=',$request->from_date);
        }

        if(isset($request->to_date) && $request->to_date != 0){
            $data->whereDate('date','>=',$request->to_date);
        }
        if(isset($request->user_id) && $request->user_id != 0){
            $Profiles = Profile::where('user_id',$request->user)->pluck('id');
            $data->whereIn('profile_id',$Profiles);
        }

        if(isset($request->profile_id) && $request->profile_id != 0){
            $data->where('profile_id',$request->profile_id);
        }
        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->addColumn('User', function ($row) {
                $actions = $row->Profile->User->name;
                return $actions;

            })
            ->addColumn('Profile', function ($row) {
                $actions = $row->Profile->name;
                return $actions;

            })


            ->addColumn('actions', function ($row) {
                $actions = ' <a href="' . url("ExchangeContact-edit/" . $row->id) . '" class="btn btn-active-light-info">Edit <i class="bi bi-pencil-fill"></i>  </a>';
                return $actions;

            })
            ->rawColumns(['actions', 'checkbox', 'status', 'is_active','branch'])
            ->make();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'phone' => 'required|unique:admins|min:8',
            'is_active' => 'nullable|string',

        ]);


        $user = new ExchangeContact;
        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->branch_id=$request->branch_id;
        $user->password=Hash::make($request->password);
        $user->email=$request->email;
        $user->is_active=$request->is_active;
        if($request->role_id){
            $user->roles()->sync([$request->role_id]);
        }
        $user->save();

        return redirect()->back()->with('message', 'تم الاضافة بنجاح ');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = ExchangeContact::findOrFail($id);
        return view('admin.ExchangeContact.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $this->validate(request(), [
            'name' => 'required|string',
            'email' => 'required',
            'phone' => 'required',

        ]);



        $user = ExchangeContact::whereId($request->id)->first();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->email;
        $user->is_deleted=$request->is_deleted;
        $user->save();





        return redirect(url('ExchangeContact_setting'))->with('message', 'تم التعديل بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            ExchangeContact::whereIn('id', $request->id)->update(['is_deleted'=>1]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }
}
