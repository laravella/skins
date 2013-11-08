@include("skins::common.inc.assets")

@include("skins::common.inc.title")
@include("skins::common.inc.extra_head")

@include('skins::common.inc.navbar')

@include($skin['admin'].".inc.bottom")
@include($skin['admin'].".inc.footer")
@section($skin['admin'].".content")
@yield($action)
@stop

