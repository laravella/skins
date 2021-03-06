<!DOCTYPE html>
<!--[if lt IE 7]>      <html xmlns="http://www.w3.org/1999/xhtml" ng-app="app" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html xmlns="http://www.w3.org/1999/xhtml" ng-app="app" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html xmlns="http://www.w3.org/1999/xhtml" ng-app="app" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html xmlns="http://www.w3.org/1999/xhtml" ng-app="app" class="no-js"> <!--<![endif]-->    
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>
            @section('title')
            Laravel
            @show
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Images -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/images/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/apple-touch-icon-57-precomposed.png') }}">

        <!-- ICO -->
        <link rel="shortcut icon" href="favicon.ico">
			
        <!-- CMS -->
        @yield('assets_css')
        @yield('assets_js')
		
        <!-- Additional javascript defined in the template -->
        @yield('extra_head')
		
        <script type="text/javascript">
            function deleteRow(table, id, x) {
                $('.'+table+'_'+id).hide();
            }
            
            function getRow(table, id, x) {
                //'_db_key_fields', 100, null
                $("");
            }

            function sendSave(tableName, recNo) {
                    alert(tableName + " : " + recNo);

                var qA = new Object();
                //qA[tableName] = new Object();

                $(".fld-" + tableName + "-" + recNo).each(function(index, element) {

                    //var table = $(this).attr('data-tablename');
                    var record = $(this).attr('data-recordid');
                    var fieldName = $(this).attr('data-fieldname');
                    var value = $(this).val();

                    qA[fieldName] = value;
                    //console.log(tableName + fieldName + value);

                });
                var data = JSON.stringify(qA);
                console.log(data);

                $.ajax({
                    data: encodeURIComponent(data),
                    type: "POST",
                    url: '/key/keys/' + tableName + '/' + recNo,
                    timeout: 20000,
                    contentType: "application/x-www-form-urlencoded;charset=utf-8",
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                    }
                });

                //$.post('/db/edit/'+tableName+'/'+recNo, 'data='+encodeURIComponent(data), function(data) {console.log(data);}, 'json');

            }
            
        </script>
    </head>
    <body>
        
        <!-- default.blade.php --> 
        
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
		
        @yield('navbar') 
		
        <!-- Wrapper for the radial gradient background -->
        <div id="body-wrapper"> 

            <div id="main-content"> <!-- Main Content Section with everything -->

                <noscript> <!-- Show a notification if the user has disabled javascript -->
                    <div class="notification error png_bg">
                        <div>
                            Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
                        </div>
                    </div>
                </noscript>

                <div ng-show='nowloading'><i class="icon-spinner icon-spin"  style="display:none"></i></div>

                @yield('appcontainer')

				<!-- Additiona javascript defined in the template -->
                @yield('javascripts')

				<!-- Add your site or application content here -->
				<!-- Container -->
				<div class="container">

					<!-- Content -->
					@yield('content')
					<!-- ./ content -->

				</div>
				<!-- ./ container -->
				
                @yield('footer')

            </div> <!-- End #main-content -->

        </div>

        @yield('bottom')
        @yield('assets_bottom')
        
    </body>
</html>
