{{-------------------------------------------------------- getEdit --------------}}
@section('getKeyEdit') 
@if($action == 'getKeyEdit')

<div class="page-header">
    <h1>Edit <span class="h1a">[{{$tableName}}::{{$pkName}}]</span></h1>
</div>
<div class="well">
    <div class="btn-group">
        <a href="/db/keys" id="btnVisualize" class="btn">Back</a>
        <a href="#" onclick="javascript:$('#dataForm').submit();" id="btnSubmit" class="btn">Submit</a>
        <a href="/db/keys" id="btnDelete" class="btn">Delete</a>
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

@yield('messages')

<?php
    $records = array();
    $records = $dataA;
    $headerPrinted = false;
?>

@foreach ($records as $recNo=>$record) 
<form method="POST" id="dataForm" action="/db/keys">
    
    <!-- widgets -->
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
                <select name="pkfi_fid:{{$record['key_field_id']}}">
                    @foreach($selects['key_type_id'] as $fields)
                        @if($record['key_type_id'] == $fields['value'])
                            <option selected value="{{$fields['value']}}">{{$fields['text']}}</option>
                        @else
                            <option value="{{$fields['value']}}">{{$fields['text']}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
    @endif

    <hr />
    <div class="row">
        <div class="span2">Order</div>
        <div class="span4">
            <input type="text" style="width:200px" name="order:{{$record['key_field_id']}}" value="{{$record['order']}}" />
        </div>
    </div>
    <div class="row">
        <div class="span2">PK Field</div>
        <div class="span4">
            <select name="pkfi_fid:{{$record['key_field_id']}}">
                @foreach($selects['fullname'] as $fields)
                    @if($record['pkfi_fid'] == $fields['value'])
                        <option selected value="{{$fields['value']}}">{{$fields['text']}}</option>
                    @else
                        <option value="{{$fields['value']}}">{{$fields['text']}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="span2">PK Display Field</div>
        <div class="span4">
            <select name="pkfn_fid:{{$record['key_field_id']}}">
                @foreach($selects['fullname'] as $fields)
                    @if($record['pkfn_fid'] == $fields['value'])
                        <option selected value="{{$fields['value']}}">{{$fields['text']}}</option>
                    @else
                        <option value="{{$fields['value']}}">{{$fields['text']}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="span2">FK Field</div>
        <div class="span4">
            <select name="fkfi_fid:{{$record['key_field_id']}}">
                @foreach($selects['fullname'] as $fields)
                    @if($record['fkfi_fid'] == $fields['value'])
                        <option selected value="{{$fields['value']}}">{{$fields['text']}}</option>
                    @else
                        <option value="{{$fields['value']}}">{{$fields['text']}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="span2">FK Display Field</div>
        <div class="span4">
            <select name="fkfn_fid:{{$record['key_field_id']}}">
                @foreach($selects['fullname'] as $fields)
                    @if($record['fkfn_fid'] == $fields['value'])
                        <option selected value="{{$fields['value']}}">{{$fields['text']}}</option>
                    @else
                        <option value="{{$fields['value']}}">{{$fields['text']}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
<!-- /widgets -->
    
    <div class="well"><input type="submit" class="btn" /></div>
    
</form>
@endforeach

@endif
@stop

