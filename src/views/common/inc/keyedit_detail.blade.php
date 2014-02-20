@section('keyedit_detail')
    <!-- ------------------------------------------------------ inc.keyedit_detail ------------ -->
    @foreach ($records as $recNo=>$record) 
    
        @include('skins::common.inc.keyedit_header', array('select'=>'key_type_id'))
    
        <div class="well" style="margin-top:auto">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Key Field {{$record['key_field_id']}}</strong>
                <br />
        </div>          

        <div class="row">
            <div class="span2">Order</div>
            <div class="span4">
                <input type="text" style="width:200px" name="order:{{$record['key_field_id']}}" value="{{$record['order']}}" />
            </div>
        </div>
        <div class="row">
            <div class="span2">PK Field</div>
            <div class="span4">
                @include('skins::common.inc.keyedit_select', array('fieldName'=>'pkfi_fid', 'select'=>'fullname'))
            </div>
            <div class="span2">PK Display Field</div>
            <div class="span4">
                @include('skins::common.inc.keyedit_select', array('fieldName'=>'pkfn_fid', 'select'=>'fullname'))
            </div>
        </div>
        <div class="row">
            <div class="span2">FK Field</div>
            <div class="span4">
                @include('skins::common.inc.keyedit_select', array('fieldName'=>'fkfi_fid', 'select'=>'fullname'))
            </div>
            <div class="span2">FK Display Field</div>
            <div class="span4">
                @include('skins::common.inc.keyedit_select', array('fieldName'=>'fkfn_fid', 'select'=>'fullname'))
            </div>
        </div>
    @endforeach
@stop