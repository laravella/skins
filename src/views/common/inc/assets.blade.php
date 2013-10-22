@section('assets_css')
<!-- CSS -->

<!-- The stylesheet for the skin -->
<link rel="stylesheet" href="/packages/laravella/skins/assets/styles/adminstyles.css">

<!-- The stylesheet for the application that might override that of the skin -->
<link rel="stylesheet" href="/assets/styles/css/main.css">

@stop

@section('assets_js')		
<!-- JS -->

<!-- jQuery -->
<script type="text/javascript" src="/packages/laravella/skins/assets/scripts/jquery-1.8.3.min.js"></script>

<!-- JS -->
<script type="text/javascript" src="/packages/laravella/skins/assets/scripts/modernizr-2.6.2.min.js"></script>

@if(Options::get('debug'))
<script type="text/javascript" src="/packages/laravella/skins/assets/scripts/jsonconvert.js"></script>
@endif

<script type="text/javascript" src="/packages/laravella/skins/assets/scripts/admintools.js"></script>

<!-- CKEditor -->
<script type="text/javascript" src="/packages/laravella/skins/assets/scripts/ckeditor/ckeditor.js"></script>

<!-- Internet Explorer .png-fix -->

<!--[if IE 6]>
        <script type="text/javascript" src="packages/laravella/skins/assets/scripts/DD_belatedPNG_0.0.7a.js"></script>
        <script type="text/javascript">
                DD_belatedPNG.fix('.png_bg, img, li');
        </script>
<![endif]-->
@stop
