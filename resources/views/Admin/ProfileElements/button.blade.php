<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="dt-buttons flex-wrap">

    <!--end::Filter-->
    <!--begin::Add user-->
    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
            data-bs-target="#kt_modal_add_user">
        <i class="bi bi-plus-circle-fill fs-2x"></i>
    </button>

    <!--end::Add user-->
    <button id="delete" class="btn btn-light-danger me-3 font-weight-bolder">
        <i class="bi bi-trash-fill fs-2x"></i>
    </button>

    <!--begin::Modal - Add task-->
    <div class="modal fade  " id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog  modal-dialog-centered mw-850px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">{{__('lang.add')}}</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                         data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                              transform="rotate(-45 6 17.3137)" fill="black"/>
                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                              transform="rotate(45 7.41422 6)" fill="black"/>
                    </svg>
                </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
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
                        <form class="mx-auto mw-600px w-100 pt-15 pb-10" novalidate="novalidate" method="post" id="kt_create_account_form" action="{{url('store-Profile')}}">
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
                                                <input type="text" required class="form-control form-control-solid" placeholder="Enter card number" name="profile_url" value="" />
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
                                            <option value="ar">{{__('lang.arabic')}}</option>
                                            <option value="en">{{__('lang.english')}}</option>
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
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
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
                                            <input type="text" required  class="form-control form-control-solid" placeholder=""   name="ar_first_name"  />
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
                                                <input type="text" required class="form-control form-control-solid" placeholder="" name="en_first_name"  />
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
                                            <input type="text"  required class="form-control form-control-solid" placeholder=""   name="ar_last_name" value=" " />
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
                                                <input type="text" required class="form-control form-control-solid" placeholder="" name="en_last_name"  />
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
                                            <input type="text"  required class="form-control form-control-solid" placeholder=""   name="ar_title" value=" " />
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
                                                <input type="text" required class="form-control form-control-solid" placeholder="" name="en_title"  />
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
                                            <input type="text" required class="form-control form-control-solid" placeholder=""   name="ar_job_title" value=" " />
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
                                                <input type="text" required class="form-control form-control-solid" name="en_job_title"  />
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
                                            <input type="text" required  class="form-control form-control-solid" placeholder=""   name="ar_company" value=" " />
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
                                                <input type="text" required class="form-control form-control-solid" name="en_company"  />
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
                                            <input type="text" required class="form-control form-control-solid"    name="ar_sub_title" value=" " />
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
                                                <input type="text" required class="form-control form-control-solid" name="en_sub_title"  />
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
                                            <input type="text"  required class="form-control form-control-solid" placeholder=""   name="ar_designation" value=" " />
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
                                                <input type="text" required class="form-control form-control-solid" name="en_designation"  />
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
                                        <textarea rows="5" class="form-control" name="ar_about"></textarea>
                                    </div>
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="">{{__('lang.en_about')}}</span>
                                        </label>
                                        <!--end::Label-->
                                        <textarea rows="5" class="form-control" name="en_about"></textarea>
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


                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Add task-->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{asset('assets/js/custom/modals/create-account.js')}}"></script>
<script>
    $('.dropify').dropify();
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });


    function makeid(length) {
        var result           = '';
        var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
        var charactersLength = characters.length;
        for ( var i = 0; i < length; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        document.getElementById('serial').value = result;
    }

    makeid(8);

    //});

</script>
<script type="text/javascript">
    $('.submit').on('click',function () {
        $('#kt_create_account_form').submit()
    })
    $("#delete").on("click", function () {
        var dataList = [];
        $("input:checkbox:checked").each(function (index) {
            dataList.push($(this).val())
        })

        if (dataList.length > 0) {
            Swal.fire({
                title: "{{__('lang.warrning')}} !",
                text: "",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f64e60",
                confirmButtonText: "{{__('lang.btn_yes')}}",
                cancelButtonText: "{{__('lang.btn_no')}}",
                closeOnConfirm: false,
                closeOnCancel: false
            }).then(function (result) {
                if (result.value) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '{{url("delete-Card")}}',
                        type: "get",
                        data: {'id': dataList, _token: CSRF_TOKEN},
                        dataType: "JSON",
                        success: function (data) {
                            if (data.message == "Success") {
                                $("input:checkbox:checked").parents("tr").remove();
                                Swal.fire("{{__('lang.Success')}}", "{{__('lang.Success_text')}}", "success");
                                // location.reload();
                            } else {
                                Swal.fire("{{__('lang.Sorry')}}", "{{__('lang.operation_failed')}}", "error");
                            }
                        },
                        fail: function (xhrerrorThrown) {
                            Swal.fire("{{__('lang.Sorry')}}", "{{__('lang.operation_failed')}}", "error");
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    Swal.fire("{{__('lang.Success')}}", "{{__('lang.Cancelled')}}", "error");
                }
            });
        }
    });
</script>

<script>
    $('#phone').change( function () {
        var val = $(this).val();

        $.ajax({
            type: "GET",
            url: "{{url('checkPhoneValidationUser')}}",
            data: {'phone': val },
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

    $("#type").change(function () {
        var value = $(this).val();
        if(value == 'company'){
            $("#div_company").css("display", "block");
        }else{
            $("#div_company").css("display", "none");
        }
    });
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
