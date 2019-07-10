@extends('layouts.app_master')
@section('styles')
    <style>
        .form-control-feedback {
            color: red;
        }
    </style>
@endsection
@section('content')


    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">افزودن رویداد</h3>
            </div>

        </div>
    </div>

    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            افزودن رویداد
                        </h3>
                    </div>
                </div>
            </div>


            <div class="col-xl-12 col-lg-12">

                <form class="m-form m-form--fit m-form--label-align-right" action="{{route('user.events.store')}}" novalidate="novalidate" id="create_event" method="post">
                    {{csrf_field()}}
                    <div class="m-portlet__body">
                        {{-- <div class="form-group m-form__group row">
                                                                           <div class="col-10 ml-auto">
                                                                    --}}{{--           <h3 class="m-form__section">اطلاعات اولیه</h3>--}}{{--
                                                                           </div>
                                                                       </div>--}}
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">نام رویداد</label>
                            <div class="col-10">
                                <input class="form-control m-input" name="name" type="text" value="{{old('name')}}" >
                                @if($errors->first('name'))
                                    <label style="color:red">{{$errors->first('name')}}</label>
                                @endif
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-1 col-form-label">توضیحات مختصر</label>
                            <div class="col-5">
                                <textarea name="description" class="form-control md-input" data-provide="markdown" rows="10" style="resize: none;">{{old('description')}}</textarea>
                                @if($errors->first('description'))
                                    <label style="color:red">{{$errors->first('description')}}</label>
                                @endif
                            </div>


                            <label for="example-text-input" class="col-1 col-form-label">توضیحات تکمیلی</label>
                            <div class="col-5">
                                <textarea name="long_description" class="form-control md-input" data-provide="markdown" rows="10" style="resize: none;">{{old('long_description')}}</textarea>
                                @if($errors->first('long_description'))
                                    <label style="color:red">{{$errors->first('long_description')}}</label>
                                @endif
                            </div>

                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-1 col-form-label">تاریخ شروع</label>
                            <div class="col-5">
                                <input class="form-control m-input start_date" name="start_date" type="text" value="{{old('start_date')}}" >
                                @if($errors->first('start_date'))
                                    <label style="color:red">{{$errors->first('start_date')}}</label>
                                @endif
                            </div>
                            <label for="example-text-input" class="col-1 col-form-label">تاریخ پایان</label>
                            <div class="col-5">
                                <input class="form-control m-input end-date" name="end_date" type="text" value="{{old('end_date')}}">
                                @if($errors->first('end_date'))
                                    <label style="color:red">{{$errors->first('end_date')}}</label>
                                @endif
                                <span class="m-form__help">برای مثال 1398/10/05</span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">تاریخ پایان ثبت نام</label>
                            <div class="col-10">
                                <input class="form-control m-input" name="end_date_signup" type="text" value="{{old('end_date_signup')}}">
                                @if($errors->first('end_date_signup'))
                                    <label style="color:red">{{$errors->first('end_date_signup')}}</label>
                                @endif
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-1 col-form-label">قیمت</label>
                            <div class="col-5">
                                <input class="form-control m-input" name="price" type="number" value="{{old('price')}}">
                                @if($errors->first('price'))
                                    <label style="color:red">{{$errors->first('price')}}</label>
                                @endif
                            </div>
                            <label for="example-text-input" class="col-1 col-form-label">ظرفیت</label>
                            <div class="col-5">
                                <input class="form-control m-input" name="capacity" type="number" value="{{old('capacity')}}">
                                @if($errors->first('capacity'))
                                    <label style="color:red">{{$errors->first('capacity')}}</label>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="exampleSelect1" class="col-2 col-form-label">موضوع رویداد</label>
                            <div class="col-10">
                                <select class="form-control m-input m-input--square" name="event_subject_id"  id="exampleSelect1">
                                    <option value="">انتخاب کنید.</option>
                                    @foreach($event_subjects as $event_subject)                            <option value="{{$event_subject->id}}">{{$event_subject->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->first('event_subject_id'))
                                    <label style="color:red">{{$errors->first('event_subject_id')}}</label>
                                @endif
                            </div>
                        </div>

                        {{--
                          <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>--}}
                        {{--  <div class="form-group m-form__group row">
                                                                            <div class="col-10 ml-auto">
                                                                                <h3 class="m-form__section">محل سکونت</h3>
                                                                            </div>
                                                                        </div>--}}

                        <div class="form-group m-form__group row">
                            <label for="exampleSelect1" class="col-1 col-form-label">نوع رویداد</label>
                            <div class="col-5">
                                <select class="form-control m-input m-input--square" name="event_type_id"  id="exampleSelect1">
                                    <option value="">انتخاب کنید.</option>
                                    @foreach($event_types as $event_type)
                                        <option value="{{$event_type->id}}">{{$event_type->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->first('event_type_id'))
                                    <label style="color:red">{{$errors->first('event_type_id')}}</label>
                                @endif
                            </div>

                            <label for="exampleSelect1" class="col-1 col-form-label">وضعیت رویداد</label>
                            <div class="col-5">
                                <select class="form-control m-input m-input--square" name="event_status_id"  id="exampleSelect1">
                                    <option value="">انتخاب کنید.</option>
                                    @foreach($event_statuses as $event_status)
                                        <option value="{{$event_status->id}}">{{$event_status->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->first('event_status_id'))
                                    <label style="color:red">{{$errors->first('event_status_id')}}</label>
                                @endif
                            </div>


                        </div>
                        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                        <div class="form-group m-form__group row">
                            <div class="col-10 ml-auto">
                                <h3 class="m-form__section">محل برگزاری</h3>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="exampleSelect1" class="col-1 col-form-label">استان</label>
                            <div class="col-5">
                                <select class="form-control m-input m-input--square" name="province_id"  id="province">
                                    <option value="">انتخاب کنید.</option>
                                    @foreach($provinces as $province)
                                        <option value="{{$province->id}}">{{$province->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->first('province_id'))
                                    <label style="color:red">{{$errors->first('province_id')}}</label>
                                @endif
                            </div>
                            <label for="exampleSelect1" class="col-1 col-form-label">شهر</label>
                            <div class="col-5">
                                <select class="form-control m-input m-input--square" name="city_id"  id="city_id">
                                    <option value="">انتخاب کنید.</option>
                                </select>
                                @if($errors->first('city_id'))
                                    <label style="color:red">{{$errors->first('city_id')}}</label>
                                @endif
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-1 col-form-label">آدرس</label>
                            <div class="col-5">
 <textarea class="form-control" type="text" name="address" rows="3">{{old('address')}}
 </textarea>
                                @if($errors->first('address'))
                                    <label style="color:red">{{$errors->first('address')}}</label>
                                @endif
                            </div>

                            <label for="" class="col-1 col-from-label">مختصات x</label>
                            <div class="col-2">
                                <input class="form-control m-input" name="xplace" type="text" value="{{old('xplace')}}" >
                                @if($errors->first('xplace'))
                                    <label style="color:red">{{$errors->first('xplace')}}</label>
                                @endif
                            </div>
                            <label for="" class="col-1 col-from-label">مختصات y</label>
                            <div class="col-2">
                                <input class="form-control m-input" name="yplace" type="text" value="{{old('yplace')}}" >
                                @if($errors->first('yplace'))
                                    <label style="color:red">{{$errors->first('yplace')}}</label>
                                @endif
                            </div>
                        </div>/
                        <div class="form-group m-form__group row">
                            <label for="exampleSelect1" class="col-2 col-form-label">هسته اصلی</label>
                            <div class="col-7">
                                <select class="form-control m-input m-input--square" name="center_core_id" id="exampleSelect1">
                                    <option value="">انتخاب کنید.</option>
                                    @foreach($cores as $core)
                                        <option value="{{$core->id}}">{{$core->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->first('center_core_id'))
                                    <label style="color:red">{{$errors->first('center_core_id')}}</label>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group m-form__group row">
                           <label for="example-text-input" class="col-2 col-form-label">تصویر</label>
                                                <div class="col-10">                                                  <input class="form-control m-input" name="image" type="file">
                                                    @if($errors->first('image'))
                                                        <span class="m-form__help" style="color:red">{{$errors->first('image')}}</span>
                                                    @endif
                                                </div>
                        --}}{{--
                              <span class="m-form__help">
                         <img class="image-responsive" src="{{$cuser->thumbnail}}">
                                                                                </span>
                        --}}{{--
                                                                            </div>--}}
                    </div>


                    <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions">
                            <div class="row">
                                <div class="col-2">
                                </div>
                                <div class="col-7">
                                    <button id="submit_edituser" type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom iranyekan"> ذخیره تغییرات</button>&nbsp;&nbsp;
                                    {{--                                 <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Cancel</button>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>


@endsection
@section('scripts')

    {{--    <!--begin::Page Vendors -->
        <script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

        <!--end::Page Vendors -->--}}
    <style>
        .pwt-btn-calendar {
            display: none !important;
        }
    </style>
    <script>

    </script>

    <!--begin::Page Scripts -->
    <script src="{{asset('vendors/jquery-validation/dist/localization/messages_fa.js')}}" type="text/javascript"></script>

    <!--begin::Page Scripts -->

    {{--<script src="{{asset('vendors/bootstrap-markdown.js')}}" type="text/javascript"></script>--}}
    <!--end::Page Scripts -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#province').change(function () {
                var url= '{{route('show_cities')}}';

                $.ajax({

                    url:url,
                    type:'POST',
                    data:{id:$(this).val(), _token: $('meta[name="csrf-token"]').attr('content')},

                    success:function(cities) {
                        $('#city_id').html('');
                        $.each(cities,function (city) {

                            $('#city_id').append('<option value="'+cities[city].id+'">'+cities[city].name+'</option>');
                        });
                    },
                    error:function () {
                        console.log(error);
                    }


                });
            });

            $('#create_event').click(function (e) {
                // e.preventDefault();
                //  return false;
                $('#create_event').validate({
                    rules:{
                        name: {
                            required:true
                        },
                        description: {
                            required:true
                        },
                        long_description:{
                            required:true
                        },
                        start_date:{
                            required:true,
                        },
                        end_date:{
                            required:true,
                        },
                        end_date_signup:{
                            required:true,
                        },
                        price:{
                            required:true,
                        },
                        capacity:{
                            required:true,
                        },
                        event_subject_id:{
                            required:true,
                        },
                        event_type_id:{
                            required:true
                        },
                        event_status_id:{
                            required:true,
                        },
                        province_id:{
                            required:true,
                        },
                        city_id:{
                            required:true,
                        },
                        address:{
                            required:true
                        },
                        center_core_id:{
                            required:true
                        },
                        xplace:{
                            required:true
                        },
                        yplace:{
                            required:true
                        }


                    }
                });
            });
        });
    </script>
@endsection