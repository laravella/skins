@section('keyedit_detail')
    <!-- start// common.inc.keyedit_detail -->
    <?php $headerPrinted = false; ?>
    @foreach ($records as $recNo=>$record) 
        @if (!$headerPrinted)
            @include('skins::common.inc.keyedit_header', array('select'=>'key_type_id'))
            <?php $headerPrinted = true; ?>
        @endif
        @include('skins::common.inc.keyedit_detail_row', array('record'=>$record))
    @endforeach
    <!-- end// common.inc.keyedit_detail -->
@show