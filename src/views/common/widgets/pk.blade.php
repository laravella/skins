{{-------------------------------------------------------- widget.input --------------}}
@section('input') 
    @if(isset($field))
        <div class="span4"><input type="text" disabled name="{{$field['name']}}" value="{{$record[$field['name']]}}" /></div>
    @endif
@overwrite

