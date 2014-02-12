{{-------------------------------------------------------- widget.input_checkbox --------------}}
@section('input_checkbox') 
    @if(isset($field))
        @if ($record[$field['name']]) 
            <div class="span4" style="text-align:left;height:40px">
                <input type="checkbox" checked="checked" name="{{$field['name']}}" value="1" />
            </div>
        @else
            <div class="span4" style="text-align:left;height:40px">
                <input type="checkbox" name="{{$field['name']}}" value="1" />
            </div>
        @endif
    @else
        <div class="span4" style="text-align:left;height:40px">
            <input type="checkbox" name="{{$field['name']}}" value="1" />
        </div>    
    @endif
@overwrite