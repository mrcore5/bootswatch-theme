@if (Layout::modeIs('raw'))
    @yield('content')
@else
    @include('layout.master')
@endif