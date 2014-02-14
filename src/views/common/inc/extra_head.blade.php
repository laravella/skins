{{-------------------------------------------------------- extra_head --------------}}
@section('extra_head')
<!-- start// skins::common.inc.extra_head -->

<script type="text/javascript">
    
    $(function() {    
        
        @foreach($tables as $tName=>$table)
    
        $('#acc-{{$tName}}').on('show', {table : '{{$tName}}'}, function (event) {
            $.get('/dbapi/select/' + event.data.table, function(data) {$('#acc-{{$tName}}').html(data);});
        });
        
        $('#acc-{{$tName}}').on('shown', {table : '{{$tName}}'}, function (event) {
            //$(this).html(event.data.table);
        });
        
        @endforeach
        
    });
    
</script>
<!-- end// skins::common.inc.extra_head -->

@stop
