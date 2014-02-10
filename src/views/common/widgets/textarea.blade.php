{{-------------------------------------------------------- widget.textarea --------------}}
@section('textarea')
    @if(isset($field))
        <div class="span6">
            <textarea style="width:{{$field['width']}}px" name="{{$field['name']}}">
                {{$record[$field['name']]}}
            </textarea>
        </div>
    @endif
@overwrite

