{{-------------------------------------------------------- getEdit --------------}}
@section('getKeyEdit') 
@if($action == 'getKeyEdit')

@if($displayType == "text/html")
    <div class="page-header">
        <h1>Edit <span class="h1a">[{{$tableName}}::{{$pkName}}]</span></h1>
    </div>
    <div class="well">
        <div class="btn-group">
            <a href="/db/keys" id="btnVisualize" class="btn">Back</a>
            <a href="#" onclick="javascript:$('#dataForm').submit();" id="btnSubmit" class="btn">Submit</a>
            <a href="/db/keys" id="btnDelete" class="btn">Delete</a>
            <a href="#" onclick="javascript:addDetailRecord();" id="btnAdd" class="btn">Add</a>
        </div>
        <div class="btn-group">
            @if(Options::get('debug'))
            <a href="#" id="btnVisualize" onclick="javascript:debugBox();" class="btn">Debug</a>
            @endif
            <a href="#" id="btnLog" onclick="javascript:logBox();" class="btn">Log</a>
        </div>
        <div class="btn-group pull-right">
            <a href="/db/keys" id="btnVisualize" class="btn"><i class="icon-remove"></i></a>
        </div>
    </div>
@endif

@yield('messages')

<?php
    $records = array();
    $records = $dataA;
    $headerPrinted = false;
?>

<form method="POST" id="dataForm" action="/db/keys">

    @include('skins::common.inc.keyedit_detail')
    @yield('keyedit_detail')
    
    <div class="well"><input type="submit" class="btn" /></div>
</form>

@endif
@stop