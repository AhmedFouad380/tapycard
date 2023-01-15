<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Yajra\DataTables\DataTables;
use Auth;
class ProfileController extends Controller
{
    public function index()
    {
        return view('Admin.Profile.index');
    }
    public function datatable(Request $request)
    {
        $data = Profile::orderBy('id', 'desc');

        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->AddColumn('user', function ($row) {
                $name = '<div class="d-flex align-items-center">
																	<div class="symbol symbol-45px me-5">
																		<img src="'.asset("assets/media/avatars/150-11.jpg").'"  alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">'.$row->User->name.'</a>
																		<span class="text-muted fw-bold text-muted d-block fs-7">'.$row->User->phone.'</span>
																	</div>
																</div>';
                return $name;
            })


            ->AddColumn('profile', function ($row) {
                $name = '';
                $name .= ' <a class="btn btn-primary" href="https://card.tapycard.com/viewProfile/'.$row->User->name.'/'.$row->id.'" >'.__('lang.view').'</a>';
                return $name;
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
                $actions = ' <a href="' . url("Profile_elements/" . $row->id) . '" class="btn btn-danger">'.__('lang.elements').' <i class="bi bi-eye"></i>  </a>';
                $actions .= ' <a href="' . url("Admin-edit/" . $row->id) . '" class="btn btn-active-light-info">'.__('lang.Edit').' <i class="bi bi-pencil-fill"></i>  </a>';

                return $actions;

            })

            ->rawColumns([ 'checkbox', 'user', 'is_active','actions','profile'])
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
            'ar_first_name' => 'required|string',
            'en_first_name' => 'required|string',
            'ar_last_name' => 'required|string',
            'en_last_name' => 'required|string',
            'ar_job_title' => 'required|string',
            'en_job_title' => 'required|string',
            'ar_company' => 'required|string',
            'en_company' => 'required|string',
            'ar_title' => 'required|string',
            'en_title' => 'required|string',
            'ar_designation' => 'required|string',
            'en_designation' => 'required|string',
            'ar_sub_title' => 'required|string',
            'en_sub_title' => 'required|string',
            'ar_about' => 'required|string',
            'en_about' => 'required|string',
            'is_active' => 'nullable|string',

        ]);


        $user = new Profile;
        $user->name=$request->name;
        $user->profile_url=$request->profile_url;
        $user->ar_first_name=$request->ar_first_name;
        $user->en_first_name=$request->en_first_name;
        $user->ar_last_name=$request->ar_last_name;
        $user->en_last_name=$request->en_last_name;
        $user->ar_job_title=$request->ar_job_title;
        $user->en_job_title=$request->en_job_title;
        $user->ar_company=$request->ar_company;
        $user->en_company=$request->en_company;
        $user->ar_job_title=$request->ar_job_title;
        $user->en_job_title=$request->en_job_title;
        $user->ar_company=$request->ar_company;
        $user->en_company=$request->en_company;
        $user->ar_title=$request->ar_title;
        $user->en_title=$request->en_title;
        $user->ar_designation=$request->ar_designation;
        $user->en_designation=$request->en_designation;
        $user->ar_sub_title=$request->ar_sub_title;
        $user->en_sub_title=$request->en_sub_title;
        $user->ar_about=$request->ar_about;
        $user->en_about=$request->en_about;
        $user->image=$request->image;
        $user->image=$request->image;
        $user->is_active='inactive';
        $user->lang=$request->lang;
        if(Auth::guard('admin')->check()){
            $user->user_id=$request->user_id;
        }else{
            $user->user_id=Auth::guard('web')->id();
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
        $employee = Profile::findOrFail($id);
        return view('Admin.Profile.edit', compact('employee'));
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
            'id' => 'required|exists:users,id',
            'email' => 'required|email|unique:admins,email,' . $request->id,
            'password' => 'nullable|confirmed',
            'phone' => 'required|min:8|unique:admins,phone,' . $request->id,
            'is_active' => 'nullable|string',

        ]);



        $user = Profile::whereId($request->id)->first();
        $user->name=$request->name;
        $user->profile_url=$request->profile_url;
        $user->ar_first_name=$request->ar_first_name;
        $user->en_first_name=$request->en_first_name;
        $user->ar_last_name=$request->ar_last_name;
        $user->en_last_name=$request->en_last_name;
        $user->ar_job_title=$request->ar_job_title;
        $user->en_job_title=$request->en_job_title;
        $user->ar_company=$request->ar_company;
        $user->en_company=$request->en_company;
        $user->ar_job_title=$request->ar_job_title;
        $user->en_job_title=$request->en_job_title;
        $user->ar_company=$request->ar_company;
        $user->en_company=$request->en_company;
        $user->ar_title=$request->ar_title;
        $user->en_title=$request->en_title;
        $user->ar_designation=$request->ar_designation;
        $user->en_designation=$request->en_designation;
        $user->ar_sub_title=$request->ar_sub_title;
        $user->en_sub_title=$request->en_sub_title;
        $user->ar_about=$request->ar_about;
        $user->en_about=$request->en_about;
        $user->image=$request->image;
        $user->image=$request->image;
        $user->is_active=$request->is_active;
        $user->lang=$request->lang;
        $user->save();







        return redirect(url('Profile_setting'))->with('message', 'تم التعديل بنجاح ');
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
            Profile::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }
    public function getProfiles($id){
        $data = Profile::where('user_id',$id)->pluck('id','name');
        return response()->json($data);
    }
}
