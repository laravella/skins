{{-------------------------------------------------------- getSelect --------------}}

@include("skins::common.inc.toolbar")
@include("skins::common.inc.pagetitle")

@section('getSelect')

    @if($action == 'getSelect' || @action == 'getSearch')

        @if($displayType == "text/html")
            @yield('pagetitle')
            @yield('toolbar')
            @yield('messages')
            @yield('search')
        @endif

        @if(isset($data) && isset($data[0]))

        @include("skins::common.inc.dbtable")
        
        {{$data->links()}}
        @endif
    @endif
@stop