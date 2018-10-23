@section('style')

    <!-- Body CSS -->
    <style>
        body {
            /* make room for our scroll-to-top button */
            margin-bottom: 20px;
        }
        .container .body {
            padding-top: 15px !important;
        }
        .container-fluid .body {
            padding: 15px !important;
        }

    </style>
    @parent

@stop



@section('body')

    <!-- Layout Body -->
    <div class="{{ $container }}">
        <div class="body">
            @yield('content')
        </div>
    </div>

@stop
