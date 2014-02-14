@section('dbtable')
<!-- start// skins::common.inc.dbtable -->
    <div class="table_container">
        <table class="table table-striped dbtable">
            {{-- the field titles --}}
            <tr>
                <th></th>
                @foreach($dataA[0] as $name=>$field)
                    <th>{{$name}}</th>
                @endforeach
            </tr>

            {{-- the records --}}

            @foreach($dataA as $no=>$record)
            <tr id="tr-{{$no}}">
                <td class="td_toolbox">
                    <div class="btn-group">
                        <a data-toggle="button" data-recordid="{{$no}}" class="record btn" href="#" id="chkbtn__{{$no}}" onclick="javascript:checkRec(null, {{$no}})">
                            <b id="chkico_{{$no}}" class="icon-ok-circle"></b>
                        </a>
                        <a data-recordid="{{$no}}" class="edit btn" href="{{$no}}" id="editbtn_{{$no}}">
                            <b id="editico_{{$no}}" class="icon-edit"></b>
                        </a>
                        {{--
                        <!--
                        <a data-recordid="{{$record->id}}" class="save btn" href="#" id="savebtn_{{$tableName}}_{{$record->id}}" onclick="javascript:saveRec('{{$tableName}}', {{$record->id}})">
                            <b id="saveico_{{$record->id}}" class="icon-save"></b>
                        </a> 
                        -->
                        --}}
                    </div>
                </td>

                @foreach($record as $name=>$field)
                        {{-- hover-edit : see : https://github.com/mruoss/HoverEdit-jQuery-Plugin --}}
                        <td>
                            <input data-tablename="" data-recordid="{{$no}}" data-fieldname="{{$name}}" style="width:220px" type="text" disabled value="{{ $field }}" id="{{$no}}" class="hover-edit fld-{{$no}}" />
                        </td>
                @endforeach
            </tr>
            @endforeach
        </table>
    </div>
<!-- end// skins::common.inc.dbtable -->
@show