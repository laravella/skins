@if(!$headerPrinted)
    <input type="hidden" value="{{$record['key_id']}}" name="key_id" />
    <div class="row">
        <div class="span2">{{$record['key_field_id']}}</div>
        <div class="span6">
            <input type="text" style="width:480px" name="key_name" value="{{$record['key_name']}}" />
        </div>
    </div>        
    <div class="row">
        <div class="span2">Key Type</div>
        <div class="span4">
            <!--
            <input type="text" style="width:200px" name="pkfi_fin" value="{{$record['key_type_id']}}" />
            -->
            @include('skins::common.inc.keyedit_select', array('fieldName'=>'key_type_id'))

        </div>
    </div>
    <?php $headerPrinted = true; ?>
@endif

