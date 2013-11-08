@include($skin['admin'].".inc.assets")

@include($skin['admin'].".inc.title")
@include($skin['admin'].".inc.extra_head")

@include($skin['admin'].".inc.navbar")

{{--
@include($skin['admin'].".actions.getsearch")
@include($skin['admin'].".inc.messages")

@include($skin['admin'].".actions.getdelete")
@include($skin['admin'].".actions.getedit")
@include($skin['admin'].".actions.getindex")
@include($skin['admin'].".actions.getinsert")
@include($skin['admin'].".actions.getselect")
--}}

@include($skin['admin'].".inc.bottom")

@include($skin['admin'].".inc.footer")

@section($skin['admin'].".content")
@yield($action)
@stop

