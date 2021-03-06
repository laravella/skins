<?php
    DB::backtrace($log = false);
//    die;
?>

@include("skins::common.inc.assets")

@include("skins::common.inc.title")
@include("skins::common.inc.extra_head")

@include("skins::common.inc.navbar")

@include("skins::common.actions.getsearch")
@include("skins::common.inc.messages")

@include("skins::common.actions.getdelete")
@include("skins::common.actions.getedit")
@include("skins::common.actions.getindex")
@include("skins::common.actions.getinsert")
@include("skins::common.actions.getselect")
@include("skins::common.actions.getrow")

@include("skins::common.widgets.all")

@include("skins::common.inc.bottom")
@include("skins::common.inc.footer")

@section('content')
@yield($action)
@stop

