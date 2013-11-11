@section('title')
File Upload
@stop

@include($skin['admin'].'.uploader.assets')
@include($skin['admin'].'.inc.assets')
@include($skin['admin'].'.uploader.extra_head')
@include($skin['admin'].'.inc.navbar')
@include($skin['admin'].'.inc.messages')
@include($skin['admin'].'.uploader.getupload')
@include($skin['admin'].'.inc.bottom')

@section('content')
    @yield('getUpload')
@stop
