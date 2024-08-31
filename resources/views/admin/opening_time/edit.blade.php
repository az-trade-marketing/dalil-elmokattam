@extends('admin.layout2.app')

@section('content')
<div class="card mb-5 mb-xl-10">
    <div class="card-header border-0 cursor-pointer">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{ __('admin.Manage_regular_business_hours') }}</h3>
        </div>
    </div>
    <div class="card-body border-top p-9">
        <form action="{{ route('opening-time.update', $storeId) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row mb-20">
                    <div class="col-md-3">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ __('admin.store') }}</label>
                    </div>
                    <div class="col-lg-8">
                        <select name="store_id" class="form-select" required>
                            @foreach ($stores as $store)
                                <option value="{{ $store->id }}" {{ $store->id == $storeId ? 'selected' : '' }}>
                                    {{ app()->getLocale() === 'ar' ? $store->name_ar : $store->name_en }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                @php
                    $days = [
                        'saturday' => __('admin.saturday'),
                        'sunday' => __('admin.sunday'),
                        'monday' => __('admin.monday'),
                        'tuesday' => __('admin.tuesday'),
                        'wednesday' => __('admin.wednesday'),
                        'thursday' => __('admin.thursday'),
                        'friday' => __('admin.friday'),
                    ];


                @endphp

@foreach ($days as $day => $label)
{{-- @dd( $openingTimes->where('day_of_week', $day)->first()->start_time); --}}
    <div class="row mb-20">
        <div class="col-md-3">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">{{ $label }}</label>
        </div>
        <div class="col-md-4">
            <input name="{{ $day }}_start_time" type="time" class="form-control mb-2 mb-md-0" value="{{ $openingTimes->where('day_of_week', $day)->first()->start_time ?? '' }}" required />
        </div>
        <div class="col-md-4">
            <input name="{{ $day }}_end_time" type="time" class="form-control mb-2 mb-md-0" value="{{ $openingTimes->where('day_of_week', $day)->first()->end_time ?? '' }}" required />
        </div>
    </div>
@endforeach

</div>

<div class="card-footer d-flex justify-content-end py-6 px-9">
<button type="reset" class="btn btn-light btn-active-light-primary me-2">تراجع</button>
<button type="submit" class="btn btn-primary">حفظ</button>
</div>
</form>
</div>
</div>
@endsection


