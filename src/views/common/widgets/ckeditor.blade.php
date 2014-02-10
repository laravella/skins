{{-------------------------------------------------------- widget.ckeditor --------------}}
@section('ckeditor') 
    <div class="span6">
        <textarea class="ckeditor" style="width:{{$width}}px" name="{{$name}}">{{$value}}</textarea>
    </div> 
@overwrite

