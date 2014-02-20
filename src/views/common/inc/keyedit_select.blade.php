<select name="{{$fieldName}}:{{$record['key_field_id']}}">
    @foreach($selects[$select] as $fields)
        @if($record[$fieldName] == $fields['value'])
            <option selected value="{{$fields['value']}}">{{$fields['text']}}</option>
        @else
            <option value="{{$fields['value']}}">{{$fields['text']}}</option>
        @endif
    @endforeach
</select>
