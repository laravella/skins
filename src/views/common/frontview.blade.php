@include("skins::".$skin['admin'].".inc.assets")

@include("skins::".$skin['admin'].".inc.title")
@include("skins::".$skin['admin'].".inc.extra_head")

@include('skins::".$skin['admin'].".inc.navbar')

{{--
@include("skins::".$skin['admin'].".actions.getsearch")
@include("skins::".$skin['admin'].".inc.messages")

@include("skins::".$skin['admin'].".actions.getdelete")
@include("skins::".$skin['admin'].".actions.getedit")
@include("skins::".$skin['admin'].".actions.getindex")
@include("skins::".$skin['admin'].".actions.getinsert")
@include("skins::".$skin['admin'].".actions.getselect")
--}}

@include("skins::".$skin['admin'].".inc.bottom")

@include("skins::".$skin['admin'].".inc.footer")

@section('skins.".$skin['admin'].".content')
@yield($action)
@stop

