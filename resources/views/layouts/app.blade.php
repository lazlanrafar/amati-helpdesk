<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('includes.preloader') @include('includes.navbar')

        @if (request()->session()->get('user')['akses'] == 'STAFF')
            @include('includes.sidebar-staff')
        @elseif(request()->session()->get('user')['akses'] == 'MANAGER')
            @include('includes.sidebar-manager')
        @else
            @include('includes.sidebar-teknisi')
        @endif

        <div class="content-wrapper">
            @yield('content')
        </div>

        @include('includes.footer')
    </div>
    @include('includes.scripts')
    @if (Request::is('/'))
        @include('includes.chart-script')
    @endif
</body>

</html>
