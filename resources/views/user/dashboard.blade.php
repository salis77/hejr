@extends('layouts.app_master')
@section('styles')

    @endsection
@section('content')


                <!-- BEGIN: Subheader -->
                <div class="m-subheader ">
                    <div class="d-flex align-items-center">
                        <div class="margin-right-auto">
                            <h3 class="m-subheader__title ">داشبورد</h3>
                        </div>
                       {{-- <div>
								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title"></span>
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="la la-angle-down"></i>
									</a>
								</span>
                        </div>--}}
                    </div>
                </div>

                <!-- END: Subheader -->
                <div class="m-content">

                </div>
    @endsection
@section('scripts')

{{--    <!--begin::Page Vendors -->
    <script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

    <!--end::Page Vendors -->--}}

    <!--begin::Page Scripts -->
    <script src="{{asset('js/dashboard.js')}}" type="text/javascript"></script>

    <!--end::Page Scripts -->

    @endsection