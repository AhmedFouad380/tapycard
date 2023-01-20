@extends('layout.layout')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('style')
    <style>
        @media (min-width: 992px) {
            .aside-me .content {
                padding-right: 30px;
            }
        }
    </style>
@endsection
@section('header')
    <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
        <!--begin::Container-->
        <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                <!--begin::Heading-->
                <h1 class="text-dark fw-bolder my-0 fs-2">{{__('lang.Users_Edit')}} </h1>
                <!--end::Heading-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{url('/')}}" class="text-muted">{{__('lang.Dashboard')}}</a>
                    </li>
                    <li class="breadcrumb-item text-muted">{{__('lang.Admins')}}</li>
                    <li class="breadcrumb-item text-muted">{{__('lang.Users_Edit')}}</li>

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title=-->
            <!--begin::Wrapper-->
            <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                <!--begin::Aside mobile toggle-->
                <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                    <span class="svg-icon svg-icon-2x">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Aside mobile toggle-->
                <!--begin::Logo-->
                <a href="../../demo7/dist/index.html" class="d-flex align-items-center">
                    <img alt="Logo" src="{{asset('assets/media/logos/logo-demo7.svg')}}" class="h-30px" />
                </a>
                <!--end::Logo-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Toolbar wrapper-->
        {{--            <div class="d-flex flex-shrink-0">--}}
        {{--                <!--begin::Invite user-->--}}
        {{--                <div class="d-flex ms-3">--}}
        {{--                    <a href="#" class="btn btn-flex flex-center bg-body btn-color-gray-700 btn-active-color-primary w-40px w-md-auto h-40px px-0 px-md-6" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">--}}
        {{--                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->--}}
        {{--                        <span class="svg-icon svg-icon-2 svg-icon-primary me-0 me-md-2">--}}
        {{--											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
        {{--												<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />--}}
        {{--												<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />--}}
        {{--											</svg>--}}
        {{--										</span>--}}
        {{--                        <!--end::Svg Icon-->--}}
        {{--                        <span class="d-none d-md-inline">New Member</span>--}}
        {{--                    </a>--}}
        {{--                </div>--}}
        {{--                <!--end::Invite user-->--}}
        {{--                <!--begin::Create app-->--}}
        {{--                <div class="d-flex ms-3">--}}
        {{--                    <a href="#" class="btn btn-flex flex-center bg-body btn-color-gray-700 btn-active-color-primary w-40px w-md-auto h-40px px-0 px-md-6" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">--}}
        {{--                        <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->--}}
        {{--                        <span class="svg-icon svg-icon-2 svg-icon-primary me-0 me-md-2">--}}
        {{--											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
        {{--												<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="black" />--}}
        {{--												<rect x="7" y="17" width="6" height="2" rx="1" fill="black" />--}}
        {{--												<rect x="7" y="12" width="10" height="2" rx="1" fill="black" />--}}
        {{--												<rect x="7" y="7" width="6" height="2" rx="1" fill="black" />--}}
        {{--												<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />--}}
        {{--											</svg>--}}
        {{--										</span>--}}
        {{--                        <!--end::Svg Icon-->--}}
        {{--                        <span class="d-none d-md-inline">New App</span>--}}
        {{--                    </a>--}}
        {{--                </div>--}}
        {{--                <!--end::Create app-->--}}
        {{--                <!--begin::Chat-->--}}
        {{--                <div class="d-flex align-items-center ms-3">--}}
        {{--                    <!--begin::Menu wrapper-->--}}
        {{--                    <div class="btn btn-icon btn-primary w-40px h-40px pulse pulse-white" id="kt_drawer_chat_toggle">--}}
        {{--                        <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->--}}
        {{--                        <span class="svg-icon svg-icon-2">--}}
        {{--											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
        {{--												<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />--}}
        {{--												<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />--}}
        {{--												<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />--}}
        {{--											</svg>--}}
        {{--										</span>--}}
        {{--                        <!--end::Svg Icon-->--}}
        {{--                        <span class="pulse-ring"></span>--}}
        {{--                    </div>--}}
        {{--                    <!--end::Menu wrapper-->--}}
        {{--                </div>--}}
        {{--                <!--end::Chat-->--}}
        {{--            </div>--}}
        <!--end::Toolbar wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Breadcrumb-->
@endsection


@section('content')
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->

        <div class="content flex-row-fluid" id="kt_content">

            <!--begin::Basic info-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                     data-bs-target="#kt_account_profile_details" aria-expanded="true"
                     aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">{{__('lang.Users_Edit')}}</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div class="stepper stepper-links d-flex flex-column pt-15" id="kt_create_account_stepper">
                    <!--begin::Nav-->
                    <div class="stepper-nav mb-5">
                        <!--begin::Step 1-->
                        <div class="stepper-item current" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">{{__('lang.cardinfo')}}</h3>
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">{{__('lang.moreinfo')}}</h3>
                        </div>
                        <!--end::Step 2-->


                        <!--end::Step 5-->
                    </div>
                    <!--end::Nav-->
                    <!--begin::Form-->
                    <form class="mx-auto mw-600px w-100 pt-15 pb-10" novalidate="novalidate" method="post" id="kt_create_account_form" action="{{url('Update-Profile')}}">
                        <!--begin::Step 1-->

                        <div class="current" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            @csrf
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">{{__('lang.image')}}</span>
                                    </label>
                                    <!--end::Label-->
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <input type="file" class="dropify" name="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">{{__('lang.cover')}}</span>
                                    </label>
                                    <!--end::Label-->
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <input type="file" class="dropify" name="cover">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">{{__('lang.name')}}</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Profile name is only visible to you and not visible to others"></i>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" required class="form-control form-control-solid" placeholder="" name="name" value="" />
                                </div>


                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="row mb-10">

                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.Card url')}}</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" readonly class="form-control form-control-solid" placeholder=""  value="https://profile.tapycard.com/" name="card_name" value="Max Doe" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2"></label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" required class="form-control form-control-solid" placeholder="Enter card number" name="profile_url" value="{{$employee->profile_url}}" />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                </div>


                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">{{__('lang.language')}}</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Profile name is only visible to you and not visible to others"></i>
                                    </label>
                                    <!--end::Label-->
                                    <select required  class="form-control form-control-solid"  name="lang" >
                                        <option @if($employee->lang  == 'ar') selected @endif value="ar">{{__('lang.arabic')}}</option>
                                        <option @if($employee->lang  == 'en') selected @endif  value="en">{{__('lang.english')}}</option>
                                    </select>
                                </div>

                                @if(Auth::guard('admin')->check())

                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.user')}}</span>
                                        </label>
                                        <!--end::Label-->
                                        <select required class="select2 form-control form-control-solid"  name="user_id"  >
                                            @foreach(\App\Models\User::all() as $user)
                                                <option @if($employee->user_id  == $user->id) selected @endif  value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="fv-row mb-7">
                                        <div
                                            class="form-check form-switch form-check-custom form-check-solid">
                                            <label class="form-check-label" for="flexSwitchDefault">{{__('lang.Delete')}}
                                                ؟</label>
                                            <input class="form-check-input" name="is_deleted" type="hidden"
                                                   value="0" id="flexSwitchDefault"/>
                                            <input class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                                   name="is_deleted" type="checkbox"
                                                   value="1" id="flexSwitchDefault"
                                                   @if($employee->is_deleted == 1) checked @endif />
                                        </div>
                                    </div>

                            @endif
                            <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->

                                <div class="row mb-10">

                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.ar_first_name')}}</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" required  class="form-control form-control-solid" placeholder=""   value="{{$employee->ar_first_name}}" name="ar_first_name"  />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.en_first_name')}}</span>
                                        </label>                                                <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" value="{{$employee->en_first_name}}" required class="form-control form-control-solid" placeholder="" name="en_first_name"  />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                </div>

                                <div class="row mb-10">

                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.ar_last_name')}}</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text"  value="{{$employee->ar_last_name}}"  required class="form-control form-control-solid" placeholder=""   name="ar_last_name" value=" " />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.en_last_name')}}</span>
                                        </label>                                                <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" value="{{$employee->en_last_name}}" required class="form-control form-control-solid" placeholder="" name="en_last_name"  />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                </div>

                                <div class="row mb-10">

                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.ar_title')}}</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text"  value="{{$employee->ar_title}}" required class="form-control form-control-solid" placeholder=""   name="ar_title" value=" " />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.en_title')}}</span>
                                        </label>                                                <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" value="{{$employee->en_title}}" required class="form-control form-control-solid" placeholder="" name="en_title"  />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                </div>

                                <div class="row mb-10">

                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.ar_job_title')}}</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" value="{{$employee->ar_job_title}}" required class="form-control form-control-solid" placeholder=""   name="ar_job_title" value=" " />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.en_job_title')}}</span>
                                        </label>                                                <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text"  value="{{$employee->en_job_title}}" required class="form-control form-control-solid" name="en_job_title"  />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                </div>
                                <div class="row mb-10">

                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.ar_company')}}</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" value="{{$employee->ar_company}}"  required  class="form-control form-control-solid" placeholder=""   name="ar_company" value=" " />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.en_company')}}</span>
                                        </label>                                                <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text"  value="{{$employee->en_company}}"required class="form-control form-control-solid" name="en_company"  />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                </div>

                                <div class="row mb-10">

                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.ar_sub_title')}}</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" required class="form-control form-control-solid"    name="ar_sub_title" value="{{$employee->ar_sub_title}}" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.en_sub_title')}}</span>
                                        </label>                                                <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" required class="form-control form-control-solid" name="en_sub_title" value="{{$employee->en_sub_title}}" />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                </div>

                                <div class="row mb-10">

                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.ar_designation')}}</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text"  required class="form-control form-control-solid" placeholder=""   name="ar_designation" value="{{$employee->ar_designation}}"/>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="col-md-6 d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{__('lang.en_designation')}}</span>
                                        </label>                                                <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" required class="form-control form-control-solid" name="en_designation" value="{{$employee->en_designation}}"  />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                </div>

                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="">{{__('lang.ar_about')}}</span>
                                    </label>
                                    <!--end::Label-->
                                    <textarea rows="5" class="form-control" name="ar_about">{{$employee->ar_about}}</textarea>
                                </div>
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="">{{__('lang.en_about')}}</span>
                                    </label>
                                    <!--end::Label-->
                                    <textarea rows="5" class="form-control" name="en_about">{{$employee->en_about}}</textarea>
                                </div>




                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->

                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-15">
                            <!--begin::Wrapper-->
                            <div class="mr-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
															<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
														</svg>
													</span>
                                    <!--end::Svg Icon-->{{__('lang.back')}}</button>
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div>
                                <button type="submit" class="submit btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
														<span class="indicator-label">{{__('lang.save')}}
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
														<span class="svg-icon svg-icon-3 ms-2 me-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
															</svg>
														</span>
                                                            <!--end::Svg Icon--></span>
                                    <span class="indicator-progress">{{__('lang.Please wait')}}
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">{{__('lang.next')}}
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-4 ms-1 me-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
														</svg>
													</span>
                                    <!--end::Svg Icon--></button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Basic info-->

        </div>
        <!--end::Post-->
    </div>
@endsection

@section('script')
    <script src="{{asset('assets/js/custom/modals/create-account.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.submit').on('click',function () {
            $('#kt_create_account_form').submit()
        })

        $('.dropify').dropify();

        $('#phone').change( function () {
            var val = $(this).val();
            var id = {{$employee->id}};

            $.ajax({
                type: "GET",
                    url: "{{url('checkPhoneValidationUser')}}",
                data: {'phone': val ,'id':id},
                success: function (data) {
                    if (data == true) {

                        var text = 'عفوا رقم الهاتف موجود بالفعل';
                        $('#error-validation').html(text)
                    } else {
                        var text = '';
                        $('#error-validation').html(text)

                    }
                }
            })
        })


        $("#state").change(function () {
            var wahda = $(this).val();

            if (wahda != '') {
                $.get("{{ URL::to('/get-branch')}}" + '/' + wahda, function ($data) {
                    var outs = "";
                    $.each($data, function (title, id) {
                        console.log(title)
                        outs += '<option value="' + id + '">' + title + '</option>'
                    });
                    $('#branche').html(outs);
                });
            }
        });
    </script>



@endsection

