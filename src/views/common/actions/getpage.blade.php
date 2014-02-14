{{-------------------------------------------------------- getSelect --------------}}

@include("skins::common.inc.toolbar")
@include("skins::common.inc.pagetitle")

@section('getPage')

<!-- skins::common.actions.getpage -->

@if($action == 'getPage' || @action == 'getPage')

@if($displayType == "text/html")

    @yield('pagetitle')
    @yield('pagetoolbar')
    @yield('messages')
    @yield('search')

@endif

@foreach ($contents as $content)
    {{$content['content']}}<br />
@endforeach

<br /><br />

    @if(isset($data) && isset($data[0]))
        @include("skins::common.inc.listtable")
        {{$data->links()}}
    @endif
@endif
@stop