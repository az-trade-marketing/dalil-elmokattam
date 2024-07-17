@extends('admin.layout2.app')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">{{ __("admin.stores") }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">{{ __("admin.home") }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{ __("admin.index") }}</li>

                </ul>
            </div>
        </div>
    </div>
   <!--begin::Content-->
   <div id="kt_app_content" class="app-content flex-column-fluid">
    <div class="card-body py-4">
        <!--begin::Table-->
        <table class="table mb-0 data-table fs--1" id="myTable">
            <thead class="bg-200 text-900">
              <tr>
                <th>#</th>
                <th>{{__('admin.name_ar')}}</th>
                <th>{{__('admin.name_en')}}</th>
                <th>{{__('admin.description_ar')}}</th>
                <th>{{__('admin.description_en')}}</th>
                <th>{{__('admin.logo')}}</th>
                <th>{{__('admin.action')}}</th>
              </tr>
            </thead>
            <tbody class="list country_table">
            </tbody>
          </table>
        <!--end::Table-->
    </div>
</div>
</div>
@section("js")
<script src="{{ asset("admin/assets/js/custom/apps/ecommerce/catalog/save-product.js") }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
    get_data();

    function get_data() {
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'GET',
            dataType: 'json',
            url: "/admin/stores-get-data",
            success: function(response) {
                $('.country_table').html('');
                $('#myTable').DataTable().destroy();
                $('#myTable tbody').empty();
                $.each(response, function(key, item) {
                    var name_ar = item.name_ar ?? '';
                    var name_en = item.name_en ?? '';
                    var description_en = item.description_en ?? '';
                    var description_ar = item.description_ar ?? '';
                    var country_img = item.image ? item.image : '{{asset("/assets/img/user.png")}}';
                    $('.country_table').append('<tr>\
                        <td class=" text-center pt-4">\
                            <h6>#' + item.id + '</h6> \
                        </td>\
                        <td class="align-middle name text-nowrap ">\
                            <h6 class="m-0 p-0">' + name_ar + ' </h6>  \
                        </td>\
                        <td class="align-middle name text-nowrap ">\
                            <h6 class="m-0 p-0">' + name_en + ' </h6>  \
                        </td>\
                        <td class="align-middle name text-nowrap ">\
                            <h6 class="m-0 p-0">' + description_ar + ' </h6>  \
                        </td>\
                        <td class="align-middle name text-nowrap ">\
                            <h6 class="m-0 p-0">' + description_en + ' </h6>  \
                        </td>\
                        <td class="text-center min-w-100">\
                            <div class="avatar avatar-3xl">\
                                <img src="{{ image_path()."/" }}' + country_img + '" alt="" height="100" width="100"/>\
                            </div>\
                        </td>\
                        <td class="min-w-100 pt-3">\
                            <div class="d-flex">\
                                <a href="/admin/stores/'+ item.id +'/edit" class="btn btn-primary btn-active-light-primary btn-flex btn-center btn-sm me-2">{{ __("admin.edit") }}</a>\
                                <a href="javascript:void(0);" class="btn btn-danger btn-active-light-primary btn-flex btn-center btn-sm deleteButton" data-id="' + item.id + '" value="' + item.id + '">{{ __("admin.delete") }}</a>\
                            </div>\
                        </td>\
                    </tr>');
                });

                let table = new DataTable('#myTable');
            }
        });
    }

    $(document).on('click', '.deleteButton', function() {
        var id = $(this).data('id');
        if (confirm('Are you sure you want to delete this Store?')) {
            $.ajax({
                url: '/admin/stores/' + id,
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alert('Store deleted successfully!');
                    get_data();
                },
                error: function(xhr) {
                    alert('An error occurred. Please try again.');
                }
            });
        }
    });
});

 </script>
@endsection
@endsection
