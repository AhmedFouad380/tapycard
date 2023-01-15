@extends('layout.layout')
@section('title',__('lang.elements'))
@section('css')
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
                <h1 class="text-dark fw-bolder my-0 fs-2">{{__('lang.elements')}} </h1>
                <!--end::Heading-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{url('/')}}" class="text-muted">{{__('lang.Dashboard')}}</a>
                    </li>
                    <li class="breadcrumb-item text-muted">{{__('lang.Profiles')}}</li>
                    <li class="breadcrumb-item text-muted">{{__('lang.elements')}}</li>

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
                        <h3 class="fw-bolder m-0">{{__('lang.elements')}}</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <form id="kt_account_profile_details_form" action="{{url('update-Admin')}}" class="form"
                          method="post">
                    @csrf
                    <!--begin::Card body-->


                        <div class="card ">
                            <div class="card-header card-header-stretch">
                                <h3 class="card-title">{{$data->name}}</h3>
                                <div class="card-toolbar">
                                    <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#social_links">{{__('lang.social_links')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#links">{{__('lang.links')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#images">{{__('lang.Images')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#videos">{{__('lang.videos')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#contacts_info">{{__('lang.contacts_info')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#business_hours">{{__('lang.business_hours')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Appointments">{{__('lang.Appointments')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="social_links" role="tabpanel">
                                        <div class="card-body pt-0">

                                            <table class="table align-middle table-row-dashed fs-4 gy-5" id="users_table">
                                                <!--begin::Table head-->
                                                <thead>
                                                <!--begin::Table row-->

                                                <tr class="text-start text-muted fw-bolder fs-5 text-uppercase gs-0">
                                                    <th class="w-10px pe-2">
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                                   data-kt-check-target="#users_table .form-check-input" value="1"/>
                                                        </div>
                                                    </th>

                                                    <th class="min-w-125px">{{__('lang.type')}}</th>
                                                    <th class="min-w-125px">{{__('lang.url')}}</th>
                                                    <th class="min-w-125px">{{__('lang.action')}}</th>
                                                </tr>
                                                <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->


                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="links" role="tabpanel">

                                    </div>

                                    <div class="tab-pane fade" id="images" role="tabpanel">
                                        ...5
                                    </div>
                                    <div class="tab-pane fade" id="videos" role="tabpanel">
                                        ...4
                                    </div>
                                    <div class="tab-pane fade" id="contacts_info" role="tabpanel">
                                        ...3
                                    </div>
                                    <div class="tab-pane fade" id="business_hours" role="tabpanel">
                                        ...2
                                    </div>
                                    <div class="tab-pane fade" id="Appointments" role="tabpanel">
                                        ...1
                                    </div>

                                </div>
                            </div>
                        </div>


                        <!--end::Scroll-->
                        <!--begin::Actions-->

                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">{{__('lang.save')}}
                            </button>
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

<script>
    <script type="text/javascript">
        $(function () {
            var table = $('#users_table').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                aaSorting: [],
                "dom": "<'card-header border-0 p-0 pt-6'<'card-title' <'d-flex align-items-center position-relative my-1'f> r> <'card-toolbar' <'d-flex justify-content-end add_button'B> r>>  <'row'l r> <''t><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
                lengthMenu: [[10, 25, 50, 100, 250, -1], [10, 25, 50, 100, 250, "All"]],
                "language": {
                    search: '<i class="fa fa-eye" aria-hidden="true"></i>',
                    searchPlaceholder: 'Search',
                    "url": "{{ url('admin/assets/ar.json') }}"
                },
                buttons: [
                    {extend: 'print', className: 'btn btn-light-primary me-3', text: '<i class="bi bi-printer-fill fs-2x"></i>'},
                    // {extend: 'pdf', className: 'btn btn-raised btn-danger', text: 'PDF'},
                    {extend: 'excel', className: 'btn btn-light-primary me-3', text: '<i class="bi bi-file-earmark-spreadsheet-fill fs-2x"></i>'},
                    // {extend: 'colvis', className: 'btn secondary', text: 'إظهار / إخفاء الأعمدة '}
                ],
                ajax: {
                    url: '{{ route('Profile_elements.datatable.data') }}',
                    data: {
                        type:'social'
                    }
                },
                columns: [
                    {data: 'checkbox', name: 'checkbox', "searchable": false, "orderable": false},
                    {data: 'type', name: 'type', "searchable": true, "orderable": true},
                    {data: 'value', name: 'value', "searchable": true, "orderable": true},
                    {data: 'actions', name: 'actions', "searchable": true, "orderable": true},

                ]
            });
            $.ajax({
                url: "{{ URL::to('/add-button-social')}}",
                success: function (data) { $('.add_button').append(data); },
                dataType: 'html'
            });
        });
</script>

</script>


@endsection

