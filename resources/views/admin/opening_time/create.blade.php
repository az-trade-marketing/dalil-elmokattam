@extends('admin.layout2.app')
@section('content')

<!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
        data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{__('admin.Manage_regular_business_hours')}}</h3>
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Content-->
    <div class="card-body border-top p-9">
        <form action="{{ route('opening-time.store') }}" method="POST" enctype="multipart/form-data" id="create">
            @csrf

            <div class="card-body">
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

                <!-- Start Time and End Time for Each Day -->
                @foreach (['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday'] as $day)
                    <div class="row mb-20">
                        <div class="col-md-3">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.' . $day) }}</label>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-4">
                                    <input name="{{ $day }}_start_time" type="time" class="form-control mb-2 mb-md-0" placeholder="{{__('admin.Enter_start_time')}}" />
                                </div>
                                <div class="col-md-4">
                                    <input name="{{ $day }}_end_time" type="time" class="form-control mb-2 mb-md-0" placeholder="{{__('admin.Enter_end_time')}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Time and End Time for Each Day -->
            </div>

            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-light btn-active-light-primary me-2">{{__('admin.cancel')}}</button>
                <button type="submit" form="create" value="Submit" class="btn btn-primary">{{__('admin.save')}}</button>
            </div>
        </form>
    </div>
    <!--end::Content-->
</div>
<!--end::Basic info-->

@endsection
