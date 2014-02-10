{{-------------------------------------------------------- widget.input --------------}}
@section('input') 
    @if(isset($field))
        <div class="span4"><a href="{{$record[$field['name']]}}">{{$record[$field['name']]}}</a></div>
    @endif
@overwrite

