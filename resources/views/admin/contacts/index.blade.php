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
                    <li class="breadcrumb-item text-muted">{{ __("admin.stores") }}</li>
                </ul>
            </div>
        </div>
    </div>

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-toolbar">
                        <!-- Toolbar content can be here -->
                    </div>
                </div>

                <div class="card-body py-4">
                    <!--begin::Table-->
                    <table class="table mb-0 data-table fs--1" id="myTable">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th>#</th>
                                <th>{{__('admin.name')}}</th>
                                <th>{{__('admin.email')}}</th>
                                <th>{{__('admin.phone')}}</th>
                                <th>{{__('admin.message')}}</th>
                                <th>{{__('admin.action')}}</th>
                            </tr>
                        </thead>

                        <tbody class="list country_table">
                            <!-- Dynamic content populated by JavaScript -->
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
            </div>
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
                url: "/admin/contacts-get-data",
                success: function(response) {
                    $('.country_table').html('');
                    $('#myTable').DataTable().destroy();
                    $('#myTable tbody').empty();
                    $.each(response, function(key, item) {
                        var name = item.name ?? '';
                        var email = item.email ?? '';
                        var phone = item.phone ?? '';
                        var message = item.message ?? '';

                        $('.country_table').append('<tr>\
                            <td class="text-center pt-4"><h6>#' + item.id + '</h6></td>\
                            <td class="align-middle">' + name + '</td>\
                            <td class="align-middle">' + email + '</td>\
                            <td class="align-middle">' + phone + '</td>\
                            <td class="align-middle">' + message + '</td>\
                            <td class="min-w-100 pt-3">\
                                <div class="d-flex">\
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
            var item_id = $(this).data('id');

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'get',
                dataType: 'text',
                url: "/admin/contacts/" + item_id,
                success: function(response) {
                    // Handle the delete confirmation and actual delete process
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>
@endsection
@endsection
