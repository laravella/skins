@section('title')
File Upload
@stop

@include('skins::'.$skin['admin'].'.uploader.assets')
@include('skins::'.$skin['admin'].'.inc.assets')
@include('skins::'.$skin['admin'].'.uploader.extra_head')
@include('skins::'.$skin['admin'].'.inc.navbar')
@include('skins::'.$skin['admin'].'.inc.messages')
@include('skins::'.$skin['admin'].'.uploader.getupload')
@include('skins::'.$skin['admin'].'.inc.bottom')

@section('content')
    @yield('getUpload')
@stop
