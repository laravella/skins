{{-- how about a foreach action here? --}}

@include("skins::common.actions.getdelete")
@include("skins::common.actions.getedit")
@include("skins::common.actions.getindex")
@include("skins::common.actions.getinsert")
@include("skins::common.actions.getselect")
@include("skins::common.actions.getrow")
@include("skins::common.actions.getkeys")
@include("skins::common.actions.getkeyedit")
@include("skins::common.actions.getpage")

@section('content')
    @yield($action)
@stop

