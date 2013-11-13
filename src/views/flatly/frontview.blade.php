@include("skins::common.inc.assets")

@include("skins::common.inc.title")
@include("skins::common.inc.extra_head")

@include('skins::common.inc.navbar')

@include("skins::common.inc.bottom")
@include("skins::common.inc.footer")

@section("skins::common.content")
@yield($action)
@stop

