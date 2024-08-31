@extends('admin.layout2.app')

@section('content')
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0 cursor-pointer">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">{{__('admin.Manage_regular_business_hours')}}</h3>
            </div>
        </div>
        <div class="card-body border-top p-9">
            <table class="table align-middle table-row-dashed fs-6 gy-5">
                <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th>{{__('admin.store')}}</th>
                        <th>{{__('admin.saturday')}}</th>
                        <th>{{__('admin.sunday')}}</th>
                        <th>{{__('admin.monday')}}</th>
                        <th>{{__('admin.tuesday')}}</th>
                        <th>{{__('admin.wednesday')}}</th>
                        <th>{{__('admin.thursday')}}</th>
                        <th>{{__('admin.friday')}}</th>
                        <th>{{__('admin.action')}}</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                    @foreach($stores as $store)
                        <tr>
                            <td>{{ app()->getLocale() === 'ar' ? $store->name_ar : $store->name_en }}</td>
                            @foreach(['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday'] as $day)
                                <td>
                                    @if($store->openingTimes->where('day_of_week', $day)->first())
                                        {{ $store->openingTimes->where('day_of_week', $day)->first()->start_time }} -
                                        {{ $store->openingTimes->where('day_of_week', $day)->first()->end_time }}
                                    @endif
                                </td>
                            @endforeach
                            <td>
                                <a href="{{ route('opening-time.edit', $store->id) }}" class="btn btn-sm btn-light btn-active-light-primary">{{__('admin.edit')}}</a>
                                <button type="button" class="btn btn-sm btn-light btn-active-light-primary" onclick="delete_item({{ $store->id }})">{{__('admin.delete')}}</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function delete_item(item_id) {
            if (!confirm('{{__('admin.are_you_sure')}}')) {
                return;
            }

            console.log('Deleting item ID:', item_id); // للتحقق من ID العنصر المراد حذفه

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'DELETE',
                dataType: 'text',
                url: "/admin/opening-time/" + item_id, // Ensure this matches your route
                success: function(response) {
                    try {
                        var jsonResponse = JSON.parse(response); // تحليل البيانات يدوياً
                        console.log('Delete Response:', jsonResponse); // تحقق من استجابة الحذف
                        location.reload(); // Refresh the page to reflect changes
                    } catch (e) {
                        console.error('Parsing Error:', e); // التحقق من وجود أخطاء في التحليل
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Delete Error:', error); // التحقق من وجود أخطاء في الحذف
                }
            });
        }
    </script>
@endsection
