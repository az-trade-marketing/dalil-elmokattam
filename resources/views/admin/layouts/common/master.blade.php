

@include('admin.layouts.common._tpl_start')

@include('admin.layouts.common._aside')
@include('admin.layouts.common._header')



    {{-- @include('admin.layouts.partials._success')
    @include('admin.layouts.partials._errors')
    @include('admin.layouts.partials._confirm_delete') --}}
    @yield('content')


{{-- @include('admin.layouts.common._footer') --}}
@include('admin.layouts.common._tpl_end')
<script>
    function goBack() {
        window.history.back();
    }
</script>

