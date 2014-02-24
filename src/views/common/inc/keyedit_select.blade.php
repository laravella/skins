<select class="data" data-id="{{$row_id}}" data-tablename="{{$tableName}}" data-fieldname="{{$fieldName}}" name="{{$fieldName}}:{{$row_id}}:{{$parent_row_id}}">
    @foreach($selects[$select] as $fields)
        @if($record[$fieldName] == $fields['value'])
            <option selected value="{{$fields['value']}}">{{$fields['text']}}</option>
        @else
            <option value="{{$fields['value']}}">{{$fields['text']}}</option>
        @endif
    @endforeach
</select>
