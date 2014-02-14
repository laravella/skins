<!-- start// skins::common.inc.toolbar -->
@section('toolbar')
    <div class="well">
        <div class="btn-group">
            <a href="/db/insert/{{$tableName}}" class="btn">New</a>
            <a href="javascript:sendDelete()" class="btn">Delete</a>
            <a href="#myModal" role="button" class="btn" data-toggle="modal">Search</b></a>
        </div>
        <div class="btn-group">
            @if(Options::get('debug'))
            <a href="#" id="btnVisualize" onclick="javascript:debugBox();" class="btn">Debug</a>
            @endif
            <a href="#" id="btnLog" onclick="javascript:logBox();" class="btn">Log</a>
        </div>
    </div>
@stop
<!-- end// skins::common.inc.toolbar -->