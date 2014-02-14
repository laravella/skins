<!-- start// skins::common.inc.pagetoolbar -->
@section('pagetoolbar')
    <div class="well">
        <div class="btn-group">
            <a href="#myModal" role="button" class="btn" data-toggle="modal">Search</b></a>
        </div>
        <div class="btn-group">
            @if(Options::get('debug'))
                <a href="#" id="btnVisualize" onclick="javascript:debugBox();" class="btn">Debug</a>
            @endif
            <a href="#" id="btnLog" onclick="javascript:logBox();" class="btn">Log</a>
        </div>
        <div class="btn-group pull-right">
            <a href="/db/select/{{$tableName}}" id="btnVisualize" class="btn"><i class="icon-remove"></i></a>
        </div>
    </div>
@stop
<!-- end// skins::common.inc.pagetoolbar -->