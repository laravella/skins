@foreach($meta as $field)

    <div id="field_help_{{$field['id']}}" class="alert alert-heading" style="display:none">
        <button type="button" class="close" onclick="javascript:$('#field_help_{{$field['id']}}').hide();">&times;</button>
        <strong>Description : </strong> {{$field['description']}}
    </div>

    @if ($displayTypes[$field['display_type_id']] != 'nodisplay')
    <div class="row">
        <div class="span4">{{$field['label']}}</div>

        @if(isset($field['key']) && $field['key'] == 'PRI')
            <div class="span4"><input type="text" disabled name="{{$field['name']}}" value="{{$record[$field['name']]}}" /></div>
        @elseif(isset($field['pk']))
            <div class="span4">
                <select name="{{$field['name']}}">
                    <option value="">-- {{$field['label']}} --</option>
                    @foreach($selects[$field['name']] as $option)
                        @if($option['value'] == $record[$field['name']])
                        <option selected value="{{$option['value']}}">{{$option['text']}}</option>
                        @else
                        <option value="{{$option['value']}}">{{$option['text']}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        @else
            @if ($displayTypes[$field['display_type_id']] == 'link')
                <div class="span4"><a href="{{$record[$field['name']]}}">{{$record[$field['name']]}}</a></div>
            @elseif ($displayTypes[$field['display_type_id']] == 'widget')
            <!-- widgets -->
                {{$recNo}}
                @include("skins::common.widgets.".$widgetTypes[$field['widget_type_id']], array('name'=>$field['name'],'value'=>$record[$field['name']],'width'=>$field['width']))
            <!-- widgets -->
            @else
            <!--
                <div class="span4">
                    <input type="text" style="width:{{$field['width']}}px" name="{{$field['name']}}" value="{{$record[$field['name']]}}" />
                </div>
            -->
            @endif
        @endif
        @if(Options::get('configure'))
            <a href="/db/edit/_db_fields/{{$field['id']}}" id="btnFieldEdit" class="btn"><i class="icon-wrench"></i></a>
            <a href="#" onclick="showFieldHelp('{{$field['id']}}');" id="btnEdit" class="btn"><i class="icon-info-sign"></i></a>
        @endif    
    </div>
    @endif

@endforeach