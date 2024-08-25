@if (count($errors->all()) > 0)
@foreach ($errors->all() as $error)
<div class="error row mr-2 ml-2" >
        <button type="text" class="btn btn-lg btn-danger btn-outline-danger mb-2"
        id="type-error"> {{$error}}    <i id="x" class="w-4 h-4 float-left">X</i>

</button>

</div>
@endforeach
@if(session('validation_errors'))
@foreach (session('validation_errors') as $validationError)
    <li>{{ $validationError }}</li>
@endforeach
@endif
@if(session('validation_errors'))
                @foreach (session('validation_errors') as $validationError)
                    <li>{{ $validationError }}</li>
                @endforeach
            @endif
@endif
<!--begin::Alert-->

@if (session()->has('error'))
        <div class="error alert alert-danger "  style="z-index:10">
                <!--begin::Icon-->
                <span class="svg-icon svg-icon-2hx svg-icon-danger me-3"></span>
                <!--end::Icon-->

                <!--begin::Wrapper-->
                <div class="d-flex flex-column">
                <!--begin::Title-->
                <h4 class="mb-1 text-dark"></h4>
                <!--end::Title-->
                <!--begin::Content-->
                <span> {{session('error')}}   <i id="x" class="w-4 h-4 float-left">X</i></span>
                <!--end::Content-->
                </div>
                <!--end::Wrapper-->
        </div>
        <!--end::Alert-->
@endif
<script>
$(document).on('click','#x',function(){
    $(".error").hide();
});
</script>
