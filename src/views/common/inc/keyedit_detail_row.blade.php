<!-- start // common.inc.keyedit_detail_row -->
    <?php
        $tableName = "_db_key_fields";
        $parentIdName = "";
        $idName = "";
        $rowClass = $tableName."_".$record['key_field_id'];
    ?>
<div class="{{$rowClass}} row-fluid">
    
<div class="row-fluid {{$rowClass}}">    
    <div class="row-fluid" style="margin-top:auto">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <div class="btn-group">
            <a class="btn" href="#" onclick="javascript:sendSave('{{$record['key_field_id']}}')"><span class="glyphicon glyphicon-floppy-disk icon-ok-circle"></span></a>
            <a class="btn" href="#" onclick="javascript:getRow('_db_key_fields', {{$record['key_id']}}, null)"><span class="glyphicon icon-plus-sign"></span></a>
            <a class="btn" href="#" onclick="javascript:deleteRow('_db_key_fields', {{$record['key_field_id']}})"><span class="glyphicon icon-remove-circle"></span></a>
            <!--
            <a class="btn" href="#" onclick="javascript:getRow('_db_key_fields', '{{$record['key_field_id']}}')"><span class="glyphicon icon-plus-sign"></span></a>
            -->
        </div>
        <strong>&nbsp; &nbsp; Key {{$record['key_id']}} :: Key Field {{$record['key_field_id']}}</strong>
        <br />
    </div>          
    <div class="row-fluid">    
        <div class="span2">Order</div>
        <div class="span4">
            <input class="data" data-tablename="_db_key_fields" data-fieldname="order" type="text" style="width:200px" value="{{$record['order']}}" name="order:{{$record['key_field_id']}}:{{$record['key_id']}}" id="order:{{$record['key_field_id']}}:{{$record['key_id']}}" />
        </div>
    </div>
    <div class="row-fluid">    
        <div class="span2">PK Field</div>
        <div class="span4">
            @include('skins::common.inc.keyedit_select', array('tableName'=>'_db_key_fields', 'fieldName'=>'pkfi_fid', 'select'=>'fullname', 'parent_row_id'=>$record['key_id'], 'row_id'=>$record['key_field_id']))
        </div>
        <div class="span2">PK Display Field</div>
        <div class="span4">
            @include('skins::common.inc.keyedit_select', array('tableName'=>'_db_key_fields', 'fieldName'=>'pkfn_fid', 'select'=>'fullname',  'parent_row_id'=>$record['key_id'], 'row_id'=>$record['key_field_id']))
        </div>
    </div>
    <div class="row-fluid">    
        <div class="span2">FK Field</div>
        <div class="span4">
            @include('skins::common.inc.keyedit_select', array('tableName'=>'_db_key_fields', 'fieldName'=>'fkfi_fid', 'select'=>'fullname',  'parent_row_id'=>$record['key_id'], 'row_id'=>$record['key_field_id']))
        </div>
        <div class="span2">FK Display Field</div>
        <div class="span4">
            @include('skins::common.inc.keyedit_select', array('tableName'=>'_db_key_fields', 'fieldName'=>'fkfn_fid', 'select'=>'fullname',  'parent_row_id'=>$record['key_id'], 'row_id'=>$record['key_field_id']))
        </div>
    </div>
</div>
<!-- end // common.inc.keyedit_detail_row -->
