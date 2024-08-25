@extends('admin.layout2.app')
@section('content')



    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-toolbar">

            </div>
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{__('admin.Manage_regular_business_hours')}}</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->



        <!--begin::Card body-->
        <div class="card-body border-top p-9">

            <div class="kt_account_profile_details" class="collapse show">
                <form action="{{ route('opening-time.store') }}" method="POST"
                    enctype="multipart/form-data" id="create">
                    @csrf


                    <!--begin::Card body-->
                    <div class="card-body ">


                        <div class="row mb-20">
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6"> {{__('admin.store')}}</label>
                            </div>
                            <div class="col-lg-8">

                                <select name="store_id" class="form-select" required>
                                    @foreach ($stores as $store)
                                        <option value="{{ $store->id }}">{{ app()->getLocale() === 'ar' ? $store->name_ar : $store->name_en }}</option>
                                    @endforeach
                                </select>


                            </div>
                        </div>
                        <!--begin::Input group-->
                        <div class="row mb-20">
                            <!--begin::Label-->
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('admin.saturday')}}</label>
                            </div>
                            <div class="col-md-9">
                                <div class="kt_docs_repeater_basic">
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div data-repeater-list="kt_docs_repeater_basic_saturday">
                                            <div data-repeater-item>
                                                <div class="form-group row">
                                                    <div class="col-md-4">

                                                        <input name="start_time"
                                                            class="local-time form-control mb-2 mb-md-0"
                                                            placeholder="{{__('admin.Enter_start_time')}}" />
                                                    </div>
                                                    <div class="col-md-4">

                                                        <input name="end_time" class=" local-time form-control mb-2 mb-md-0"
                                                            placeholder="{{__('admin.Enter_end_time')}}" />
                                                    </div>

                                                    <div class="col-md-4">
                                                        <a href="javascript:;" data-repeater-delete
                                                            class="btn btn-sm btn-light-danger  ">
                                                            <i class="ki-duotone ki-trash fs-5"><span
                                                                    class="path1"></span><span class="path2"></span><span
                                                                    class="path3"></span><span class="path4"></span><span
                                                                    class="path5"></span></i>
                                                            <span class="fa fa-trash"></span>
                                                            {{__('admin.Delete')}}


                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Form group-->

                                    <!--begin::Form group-->
                                    <div class="form-group mt-5">
                                        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                            <span class="fa fa-plus">{{__('admin.add_shift')}}</span>

                                        </a>
                                    </div>
                                    <!--end::Form group-->
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>

                        <div class="row mb-20">
                            <!--begin::Label-->
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('admin.sunday')}}</label>
                            </div>
                            <div class="col-md-9">
                                <div class="kt_docs_repeater_basic">
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div data-repeater-list="kt_docs_repeater_basic2_sunday">
                                            <div data-repeater-item>
                                                <div class="form-group row">
                                                    <div class="col-md-4">

                                                        <input name="start_time"
                                                            class=" local-time form-control mb-2 mb-md-0"
                                                            placeholder="{{__('admin.Enter_start_time')}}" />
                                                    </div>
                                                    <div class="col-md-4">

                                                        <input name="end_time"
                                                            class=" local-time form-control mb-2 mb-md-0"
                                                            placeholder="{{__('admin.Enter_end_time')}}" />
                                                    </div>

                                                    <div class="col-md-4">
                                                        <a href="javascript:;" data-repeater-delete
                                                            class="btn btn-sm btn-light-danger  ">
                                                            <i class="ki-duotone ki-trash fs-5"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span class="path5"></span></i>

                                                            <span class="fa fa-trash"></span>
                                                            {{__('admin.delete')}}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Form group-->

                                    <!--begin::Form group-->
                                    <div class="form-group mt-5">
                                        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                            <span class="fa fa-plus">{{__('admin.add_shift')}}</span>
                                        </a>
                                    </div>
                                    <!--end::Form group-->
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>

                        <!--begin::Input group-->
                        <div class="row mb-20">
                            <!--begin::Label-->
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('admin.Monday')}}</label>
                            </div>
                            <div class="col-md-9">
                                <div class="kt_docs_repeater_basic">
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div data-repeater-list="kt_docs_repeater_basic_monday">
                                            <div data-repeater-item>
                                                <div class="form-group row">
                                                    <div class="col-md-4">

                                                        <input name="start_time"
                                                            class=" local-time form-control mb-2 mb-md-0"
                                                            placeholder="{{__('admin.Enter_start_time')}}" />
                                                    </div>
                                                    <div class="col-md-4">

                                                        <input name="end_time"
                                                            class=" local-time form-control mb-2 mb-md-0"
                                                            placeholder="{{__('admin.Enter_end_time')}}" />
                                                    </div>

                                                    <div class="col-md-4">
                                                        <a href="javascript:;" data-repeater-delete
                                                            class="btn btn-sm btn-light-danger  ">
                                                            <i class="ki-duotone ki-trash fs-5"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span class="path5"></span></i>

                                                            <span class="fa fa-trash"></span>
                                                           {{__('admin.delete')}}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Form group-->

                                    <!--begin::Form group-->
                                    <div class="form-group mt-5">
                                        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                            <span class="fa fa-plus">{{__('admin.add_shift')}}</span>
                                        </a>
                                    </div>
                                    <!--end::Form group-->
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-20">
                            <!--begin::Label-->
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('admin.Tuesday')}}</label>
                            </div>
                            <div class="col-md-9">
                                <div class="kt_docs_repeater_basic">
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div data-repeater-list="kt_docs_repeater_basic_tuesday">
                                            <div data-repeater-item>
                                                <div class="form-group row">
                                                    <div class="col-md-4">

                                                        <input name="start_time"
                                                            class=" local-time form-control mb-2 mb-md-0"
                                                            placeholder="{{__('admin.Enter_start_time')}}" />
                                                    </div>
                                                    <div class="col-md-4">

                                                        <input name="end_time"
                                                            class=" local-time form-control mb-2 mb-md-0"
                                                            placeholder="{{__('admin.Enter_end_time')}}" />
                                                    </div>

                                                    <div class="col-md-4">
                                                        <a href="javascript:;" data-repeater-delete
                                                            class="btn btn-sm btn-light-danger  ">
                                                            <i class="ki-duotone ki-trash fs-5"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span class="path5"></span></i>

                                                            <span class="fa fa-trash"></span>
                                                           {{__('admin.delete')}}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Form group-->

                                    <!--begin::Form group-->
                                    <div class="form-group mt-5">
                                        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                            <span class="fa fa-plus">{{__('admin.add_shift')}}</span>
                                        </a>
                                    </div>
                                    <!--end::Form group-->
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>
                        <!--end::Input group-->



                        <div class="row mb-20">
                            <!--begin::Label-->
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('admin.Wednesday')}}</label>
                            </div>
                            <div class="col-md-9">
                                <div class="kt_docs_repeater_basic">
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div data-repeater-list="kt_docs_repeater_basic_wednesday">
                                            <div data-repeater-item>
                                                <div class="form-group row">
                                                    <div class="col-md-4">

                                                        <input name="start_time"
                                                            class=" local-time form-control mb-2 mb-md-0"
                                                            placeholder="{{__('admin.Enter_start_time')}}" />
                                                    </div>
                                                    <div class="col-md-4">

                                                        <input name="end_time"
                                                            class=" local-time form-control mb-2 mb-md-0"
                                                            placeholder="{{__('admin.Enter_end_time')}}" />
                                                    </div>

                                                    <div class="col-md-4">
                                                        <a href="javascript:;" data-repeater-delete
                                                            class="btn btn-sm btn-light-danger  ">
                                                            <i class="ki-duotone ki-trash fs-5"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span class="path5"></span></i>

                                                            <span class="fa fa-trash"></span>
                                                           {{__('admin.delete')}}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Form group-->

                                    <!--begin::Form group-->
                                    <div class="form-group mt-5">
                                        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                            <span class="fa fa-plus">{{__('admin.add_shift')}}</span>
                                        </a>
                                    </div>
                                    <!--end::Form group-->
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-20">
                            <!--begin::Label-->
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('admin.Thursday')}}</label>
                            </div>
                            <div class="col-md-9">
                                <div class="kt_docs_repeater_basic">
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div data-repeater-list="kt_docs_repeater_basic_thursday">
                                            <div data-repeater-item>
                                                <div class="form-group row">
                                                    <div class="col-md-4">

                                                        <input name="start_time"
                                                            class=" local-time form-control mb-2 mb-md-0"
                                                            placeholder="{{__('admin.Enter_start_time')}}" />
                                                    </div>
                                                    <div class="col-md-4">

                                                        <input name="end_time"
                                                            class=" local-time form-control mb-2 mb-md-0"
                                                            placeholder="{{__('admin.Enter_end_time')}}" />
                                                    </div>

                                                    <div class="col-md-4">
                                                        <a href="javascript:;" data-repeater-delete
                                                            class="btn btn-sm btn-light-danger  ">
                                                            <i class="ki-duotone ki-trash fs-5"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span class="path5"></span></i>

                                                            <span class="fa fa-trash"></span>
                                                           {{__('admin.delete')}}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Form group-->

                                    <!--begin::Form group-->
                                    <div class="form-group mt-5">
                                        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                            <span class="fa fa-plus">{{__('admin.add_shift')}}</span>
                                        </a>
                                    </div>
                                    <!--end::Form group-->
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>
                        <!--end::Input group-->

                        <div class="row mb-20">
                            <!--begin::Label-->
                            <div class="col-md-3">
                                <label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('admin.Friday')}}</label>
                            </div>
                            <div class="col-md-9">
                                <div class="kt_docs_repeater_basic">
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div data-repeater-list="kt_docs_repeater_basic_friday">
                                            <div data-repeater-item>
                                                <div class="form-group row">
                                                    <div class="col-md-4">

                                                        <input name="start_time"
                                                            class=" local-time form-control mb-2 mb-md-0"
                                                            placeholder="{{__('admin.Enter_start_time')}}" />
                                                    </div>
                                                    <div class="col-md-4">

                                                        <input
                                                            name="end_time"class=" local-time form-control mb-2 mb-md-0"
                                                            placeholder="{{__('store.Enter_end_time')}}" />
                                                    </div>

                                                    <div class="col-md-4">
                                                        <a href="javascript:;" data-repeater-delete
                                                            class="btn btn-sm btn-light-danger  ">
                                                            <i class="ki-duotone ki-trash fs-5"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span class="path5"></span></i>

                                                            <span class="fa fa-trash"></span>
                                                           {{__('admin.delete')}}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Form group-->

                                    <!--begin::Form group-->
                                    <div class="form-group mt-5">
                                        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                            <span class="fa fa-plus">{{__('admin.add_shift')}}</span>
                                        </a>
                                    </div>
                                    <!--end::Form group-->
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>


                    </div>
                    <!--end::div hidden-->

            </div>

        </div>

        <!--end::Card body-->
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="reset" class="btn btn-light btn-active-light-primary me-2">تراجع</button>
            <button type="submit" form="create" value="Submit" class="btn btn-primary">حفظ</button>

        </div>
        <!-- END: Form Layout -->
        </form>

    </div>
    <!--end::Content-->
    </div>
    <!--end::Basic info-->


    <script src="{{ asset("admin/assets/js/flatpickr.min.js") }} "></script>
   <script>

       $(".local-time").flatpickr({

        enableTime: true,
        noCalendar: true,
        dateFormat: "h:i K",
        });


        var checkbox = document.getElementById("checkbox");

        var select = document.getElementById("select");
        checkbox.addEventListener("change", function() {

            if (checkbox.checked) {
                select.style.display = "flex";
                 console.log(6)
            } else {
                select.style.display = "none";
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
    var businessHoursCheckbox = document.getElementById('business_hours');
    var startTimeInput = document.querySelector('input[name="start_time"]');
    var endTimeInput = document.querySelector('input[name="end_time"]');

    businessHoursCheckbox.addEventListener('change', function() {
        if (this.checked) {
            startTimeInput.setAttribute('required', 'required');
            endTimeInput.setAttribute('required', 'required');
        } else {
            startTimeInput.removeAttribute('required');
            endTimeInput.removeAttribute('required');
        }
    });
});

    </script>

@endsection
