@section('getRow') 

<!-- start// skins::common.actions.getrow -->

@if($action == 'getRow')
    <?php 
    $headerPrinted = false; 
    ?>
    @foreach($dataA as $recNo=>$record) 
    
        @include('skins::common.inc.keyedit_detail_row')
    
    @endforeach
@endif

<!-- end// skins::common.actions.getrow -->

@stop