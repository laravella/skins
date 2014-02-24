@include("skins::common.actions.getdelete")
@include("skins::common.actions.getedit")
@include("skins::common.actions.getindex")
@include("skins::common.actions.getinsert")
@include("skins::common.actions.getselect")
@include("skins::common.actions.getrow")

@section('content')
@yield($action)
@stop
