@extends('layout')

@section('title')
    Something Went Wrong
@stop

@section('content')

    <div class="container error-container">
        <div class="well" style="margin: 15px">
            <h1>
                <i class="fa fa-exclamation-circle"></i>
                500 Internal Server Error
            </h1>

            <hr />
            <h3>
                But we are working on it!
            </h3>


            <div>
                <h4>Meanwhile, try one of the following:</h4>

                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-hand-o-right"></i>
                        Check the url for typos
                    </li>

                    <li>
                        <i class="fa fa-hand-o-right"></i>
                        Search or browse for the document manually
                    </li>

                </ul>
            </div>


            @if (Config::get('app.debug') == true)
            <hr />
            <div>
                <h4 class="smaller">Exception:</h4>
                <pre>{{ @$exception }}</pre>
            </div>
            @endif

            <hr />

            <div class="center">
                <a href="javascript:window.history.back()" class="btn btn-grey">
                    <i class="fa fa-arrow-left"></i>
                    Go Back
                </a>

                <a href="/" class="btn btn-primary">
                    <i class="fa fa-home"></i>
                    Go Home
                </a>
            </div>
        </div>
    </div>

@stop
