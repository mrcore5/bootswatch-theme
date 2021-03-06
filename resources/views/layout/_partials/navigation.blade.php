@section('css')
    @parent
    <style>
    #navigation .panel-body {
        padding:0px;
    }
    #navigation .panel {
        margin-bottom: 0px !important;
    }
    #nav-title {
        margin-bottom: 0px;
        margin-top: 0px;
        font-weight: bold;
    }

    #nav-list {
        list-style: none;
        padding: 0px;
        border-right-width: 0px;
        border-right-style: solid;
        border-bottom-width: 0px;
        border-bottom-style: solid;
        margin-bottom: 0px;
    }

    #nav-list .nav-item {
        padding: 10px;
        cursor: pointer;
    }

    #nav-list a {
        display: block;
    }

    #nav-list .nav-item:hover, #nav-list .nav-item.active {
        font-weight: bold;
    }

    #nav-list a:hover {
        text-decoration: none;
    }

    .subnav-container {
        padding: 5px;
    }

    .subnav-list {
        list-style: none;
        padding: 0px;
        margin: 0px;
        border-width: 1px;
        border-style: solid;
    }

    .subnav-list li {
        margin-bottom: 5px;
        margin-left: 4px;
        border: 0px;
        padding: 5px;
        cursor: pointer;
    }

    .subnav-list li:hover {
        margin-left: 0px;
    }

     .subnav-list li.active {
        margin-left: 0px;
    }

     #app-navigation-uncollapsed, #app-navigation-collapsed {
        z-index: 1000;
        cursor: pointer;
     }

     #app-navigation-uncollapsed {
        display: inline;
        float: right;
     }

     #app-navigation-collapsed {
        display: none;
        padding-right: 5px;
     }

    .nav-hover {
        position: absolute;
        z-index: 10000;
        display: block !important;
        -webkit-box-shadow: 0px 6px 31px -5px rgba(51,51,51,1);
        -moz-box-shadow: 0px 6px 31px -5px rgba(51,51,51,1);
        box-shadow: 0px 6px 31px -5px rgba(51,51,51,1);
        padding-right: 0px;
        padding-left: 0px;
    }

     .nav-hover #app-navigation-uncollapsed {
        display: none;
     }

    </style>
@stop

@section('navigation')
    <div id="navigation">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 id="nav-title" class="text-primary">
                    {{ $navTitle }}
                    <div id="app-navigation-uncollapsed" class="theme-text-color-1"><i class="fa fa-bars"></i></div>
                </h4></div>
            <div class="panel-body">
                <ul id="nav-list" class="theme-bg-color-4 theme-border-color-3">
                @foreach ($navItems as $item)
                    <li id="navigation-{{ $item['key'] }}">
                        <div class="nav-item @if ($page->key == $item['key']) active @endif">
                        <a @if (isset($item['url'])) href="{{ URL::to($item['url']) }}" @endif data-toggle="collapse" data-target="#toggleNav-{{$item['key']}}">
                        {!! $item['display'] !!}
                        </a>
                        </div>
                        @if (isset($item['subnav']))
                        <div class="subnav-container collapse @if ($page->key == $item['key']) in @endif" id="toggleNav-{{$item['key']}}">
                            <ul class="subnav-list theme-border-color-3 theme-bg-color-1">
                            @foreach ($item['subnav'] as $subnav)
                                <li id="navigation-{{ $item['key'] }}-{{ $subnav['key'] }}" @if (isset($page->subkey) && $page->subkey == $subnav['key']) class="active" @endif>
                                    <a href="{{ URL::to($subnav['url']) }}">{{ $subnav['display'] }}</a>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                        @endif
                    </li>
                @endforeach
            </ul>
            </div>
        </div>
    </div>
@stop


@section('scripts')
    @parent
    <script>
        var templateData = JSON.parse(sessionStorage.getItem("template"));

        if (templateData != null && templateData['navigationCollapsed'] != null && templateData['navigationCollapsed'] == true) {
            collapseNavigation();
        }

        function collapseNavigation()
        {
            $('#app-layout-navigation').hide();
            $('#app-layout-content').removeClass('col-md-10').addClass('col-md-12').attr('style', 'padding-left:20px');
            $('#app-navigation-collapsed').css('display', 'inline');

            if (templateData == null) {
                var templateData = {};
            }
            templateData['navigationCollapsed'] = true;
            sessionStorage.setItem("template", JSON.stringify(templateData));
        }

        function unCollapseNavigation()
        {
            $('#app-layout-navigation').show();
            $('#app-layout-content').removeClass('col-md-12').addClass('col-md-10');
            $('#app-navigation-collapsed').hide();

            if (templateData == null) {
                var templateData = {};
            }

            templateData['navigationCollapsed'] = false;
            sessionStorage.setItem("template", JSON.stringify(templateData));
        }

        $('#app-navigation-uncollapsed').click(function() {
            collapseNavigation();
        });

        $('#app-navigation-collapsed').click(function() {
           unCollapseNavigation();
        });

        var menu = $('#app-layout-navigation');
        var menuTimeout;

        $(window).on('mousemove', mouseMoveHandler);

        function mouseMoveHandler(e) {
            if ((e.pageX < 20 && e.pageY > 0 && e.pageY < 200) || menu.is(':hover')) {
                if (!menu.is(':visible')) {
                    // Show the menu if mouse is within 20 pixels
                    // from the left or we are hovering over it
                    clearTimeout(menuTimeout);
                    menuTimeout = null;
                    showNav();
                }
            } else if (!menuTimeout) {
                // Hide the menu if the mouse is further than 20 pixels
                // from the left and it is not hovering over the menu
                // and we aren't already scheduled to hide it
                menuTimeout = setTimeout(hideNav, 1000);
            }
        }

        function showNav() {
            menu.addClass('nav-hover');
        }

        function hideNav() {
            menu.removeClass('nav-hover');
        }
    </script>
@stop
