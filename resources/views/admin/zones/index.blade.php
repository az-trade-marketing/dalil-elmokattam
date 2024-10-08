@extends("admin.layout2.app")
@section("content")

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">{{ __("admin.zones") }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="index.html" class="text-muted text-hover-primary">{{ __("admin.home") }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">{{ __("admin.zones") }}</li>

                </ul>
            </div>
        </div>
    </div>

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            @can("Zone Create")
                            <!--begin::Add user-->
                            <a href="{{ url("admin/zones/create") }}" class="btn btn-primary"><i class="ki-duotone ki-plus fs-2"></i>{{ __("admin.add") . ' '.__("admin.zone") }}</a>
                            <!--end::Add user-->
                            @endcan
                        </div>
                        {{-- modal for adding  --}}
                        <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="kt_modal_add_user_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">{{  __("admin.add").' '. __("admin.category") }}</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                            <i class="ki-duotone ki-cross fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        {{-- end modalafor add --}}

                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <table class="table mb-0 data-table fs--1" id="myTable">
                        <thead class="bg-200 text-900">
                          <tr>
                            <th>#</th>
                            <th>{{__('admin.name_ar')}}</th>
                            <th>{{__('admin.name_en')}}</th>
                            <th>{{__('admin.logo')}}</th>

                            <th>{{__('admin.action')}}</th>
                          </tr>
                        </thead>
                        <tbody class="list country_table">

                        </tbody>
                      </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {

        get_data()
        function get_data(){
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type:'GET',
                dataType :'json',
                url :"/admin/zones-get-data",
                success:function(response){
                    $('.country_table').html('');
                    $('#myTable').DataTable().destroy();
                    $('#myTable tbody').empty();
                    var select_type = $('.level_select option:selected').val();
                    var permissions = response.permissions;

                    $.each(response.data ,function(key , item){
                            var name_ar = item.name_ar ?? '';
                            var name_en = item.name_en ?? '';
                            var country_img = item.image ?  item.image : '{{asset("/assets/img/user.png")}}' ;
                            var actionButtons = '';
                            if (permissions.canCreate) {
                                actionButtons += '<a href="/admin/zones/' + item.id + '/edit" class="btn btn-primary btn-active-light-primary btn-flex btn-center btn-sm editButton me-2">{{ __("admin.edit") }}</a>';
                            }
                            if (permissions.canDelete) {
                                actionButtons += '<a href="javascript:void(0);" class="btn btn-danger btn-active-light-primary btn-flex btn-center btn-sm deleteButton" data-id="'+ item.id +'"  value="'+item.id+'">{{ __("admin.delete") }}</a>';
                            }

                            $('.country_table').append('<tr>\
                                    <td class=" text-center pt-4">\
                                        <h6>#'+item.id+'</h6> \
                                    </td>\
                                    <td class="align-middle name text-nowrap ">\
                                        <h6 class="m-0 p-0">'+name_ar+' </h6>  \
                                    </td>\
                                    <td class="align-middle name text-nowrap ">\
                                        <h6 class="m-0 p-0">'+name_en+' </h6>  \
                                    </td>\
                                      <td class="text-center min-w-100">\
                                    <div class="avatar avatar-3xl">\
                                        <img src="{{ image_path()."/" }}'+country_img+'" alt="" height="100" width="100"/>\
                                    </div>\
                                   </td>\
                                    <td class="min-w-100 pt-3">\
                                        <div class="d-flex">'+ actionButtons +'</div>\
                                    </td>\
                                </tr>\
                            ')
                        // }
                    });

                    let table = new DataTable('#myTable');
                }
            })
        }

        $(document).on('click', '.editButton', function() {
            var id = $(this).data('id');
            var nameAr =    $(this).data('name_ar');
            var nameEn = $(this).data('name_en');
            $('#editId').val(id);
            $('#editNameAr').val(nameAr);
            $('#editNameEn').val(nameEn);
            $('#kt_modal_edit_user').modal('show');
        });



        $('#editSubmitButton').on('click', function(e) {
            e.preventDefault();

            var formData = new FormData($('#kt_modal_edit_form')[0]);
            var id = $('#editId').val();
            $.ajax({
                url: '/admin/tags/' + id,
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#kt_modal_edit_user').modal('hide');
                    if (response.message == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: "{{ __("admin.updatedSuccessfully") }}",
                            text: '{{ __("admin.updatemes") }}',
                            timer: 1500,
                            showConfirmButton: false
                        });
                        get_data();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message,
                        });
                    }
                    get_data();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        for (var field in errors) {
                            $('#error-edit' + field).text(errors[field][0]).show();
                        }
                    } else {
                        alert('An error occurred. Please try again.');
                    }

                }
            });
        });

        $('#submitButton').on('click', function() {
            var $button = $(this);
            var $label = $button.find('.indicator-label');
            var formData = new FormData($('#kt_modal_add_user_formm')[0]);

            $label.addClass('d-none');

            // Clear previous error messages
            $('.invalid-feedback').text('');

            $.ajax({
                url: '/admin/tags',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $label.removeClass('d-none');
                    if (response.message == 'success') {
                        $('#kt_modal_add_user').modal('hide');

                        Swal.fire({
                            icon: 'success',
                            title: "{{ __("admin.addedSuccessfully") }}",
                            text: '{{ __("admin.updatemes") }}',
                            timer: 1500,
                            showConfirmButton: false
                        });
                        get_data();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message,
                        });
                    }
                    get_data();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        for (var field in errors) {
                            $('#error-' + field).text(errors[field][0]).show();
                        }
                    } else {
                        alert('An error occurred. Please try again.');
                    }

                    $label.removeClass('d-none');
                }
            });
        });

        $(document).on('click', '.deleteButton', function() {
            var item_id = $(this).data('id');

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'get',
                dataType: 'text',
                url: "/admin/zones/" + item_id,
                success: function(response) {
                    try {
                        var jsonResponse = JSON.parse(response);

                        if (jsonResponse.status == 404) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Sorry',
                                text: jsonResponse.message,
                            });
                        } else {
                            const swalWithBootstrapButtons = Swal.mixin({
                                customClass: {
                                    confirmButton: 'btn btn-primary',
                                    cancelButton: 'btn btn-danger'
                                },
                                buttonsStyling: false
                            });

                            swalWithBootstrapButtons.fire({
                                title: '{{__('admin.isDelete')}} ' + jsonResponse.name_en + ' !!?',
                                text: '{{__('admin.revet')}}',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: '{{__('admin.yes')}}',
                                cancelButtonText: '{{__('admin.no')}}',
                                reverseButtons: true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    delete_item(jsonResponse.id);
                                    swalWithBootstrapButtons.fire(
                                        '{{__('admin.delete')}}',
                                        '{{__('admin.fileDeleted')}}',
                                        'success'
                                    );
                                } else if (result.dismiss === Swal.DismissReason.cancel) {
                                    swalWithBootstrapButtons.fire(
                                        '{{__('admin.cancelled')}}',
                                        '{{__('admin.fileSave')}}',
                                        'error'
                                    );
                                }
                            });
                        }
                    } catch (e) {
                        console.error('Parsing Error:', e); // التحقق من وجود أخطاء في التحليل
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error); // التحقق من وجود أخطاء
                }
            });
        });

        function delete_item(item_id) {

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'delete',
                dataType: 'text', // تغيير dataType إلى text
                url: "/admin/zones/" + item_id,
                data: {
                    id: item_id
                },
                success: function(response) {
                    try {
                        var jsonResponse = JSON.parse(response); // تحليل البيانات يدوياً
                        location.reload();

                    } catch (e) {
                        console.error('Parsing Error:', e); // التحقق من وجود أخطاء في التحليل
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Delete Error:', error); // التحقق من وجود أخطاء في الحذف
                }
            });
        }


    });
</script>
@endsection
