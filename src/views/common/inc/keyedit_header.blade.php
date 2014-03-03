@if(!$headerPrinted)
    <!-- skins::common.inc.keyedit_header -->
    <input type="hidden" value="{{$record['key_id']}}" name="key_id" />
    <div class="row">
        <div class="span2">Key [{{$record['key_id']}}] Name</div>
        <div class="span6">
            <input class="data" data-id="{{$record['key_id']}}" data-tablename="_db_keys" data-fieldname="key_name" type="text" style="width:480px" name="key_name:{{$record['key_id']}}" value="{{$record['key_name']}}" />
        </div>
    </div>        
    <div class="row">
        <div class="span2">Key Type</div>
        <div class="span4">
            @include('skins::common.inc.keyedit_select', array('tableName'=>'_db_keys','fieldName'=>'key_type_id', 'parent_row_id'=>null, 'row_id'=>$record['key_id']))
        </div>
    </div>
    <?php $headerPrinted = true; ?>
@endif

