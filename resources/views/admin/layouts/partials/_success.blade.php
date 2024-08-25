<!--begin::Alert-->
@if(Session::has('success'))
        <div class="alert alert-success">
                <!--begin::Icon-->
                <span class="svg-icon svg-icon-2hx svg-icon-success me-3"></span>
                <!--end::Icon-->
        
                <!--begin::Wrapper-->
                <div class="d-flex flex-column">
                <!--begin::Title-->
                <h4 class="mb-1 text-dark"></h4>
                <!--end::Title-->
                <!--begin::Content-->
                <span>{{Session::get('success')}}</span>
                <!--end::Content-->
                </div>
                <!--end::Wrapper-->
        </div>
        <!--end::Alert-->
@endif