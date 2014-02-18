{{-------------------------------------------------------- getKeys --------------}}

@include("skins::common.inc.toolbar")
@include("skins::common.inc.pagetitle")

@section('getKeys')
    @if($action == 'getKeys')

        @if($displayType == "text/html")
            @yield('pagetitle')
            @yield('toolbar')
            @yield('messages')
            @yield('search')
        @endif

        @if(isset($dataA) && isset($dataA[0]))
            @include("skins::common.inc.querytable")
            {{--$data->links()--}}
        @endif
        
    @endif
@stop
