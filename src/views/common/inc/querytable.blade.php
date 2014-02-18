@section('dbtable')
<!-- start// skins::common.inc.dbtable -->
    <div class="table_container">
        <table class="table table-striped dbtable">
            {{-- the field titles --}}
            <?php $headerPrinted = false; ?>

            {{-- the records --}}
            @foreach($dataA as $no=>$record)
            @if (!$headerPrinted) 
                <tr>
                    <th></th>
                    @foreach($record as $name=>$field)
                        <th>{{$name}}</th>
                    @endforeach
                </tr>
                <?php $headerPrinted = true; ?>
            @endif
            
            <tr id="tr-{{$no}}">
                <td class="td_toolbox">
                    <div class="btn-group">
                        <a data-toggle="button" data-recordid="{{$no}}" class="record btn" href="#" 
                           id="chkbtn__{{$no}}" onclick="javascript:checkRec(null, {{$no}})">
                            <b id="chkico_{{$no}}" class="icon-ok-circle"></b>
                        </a>
                        <a data-recordid="{{$no}}" class="edit btn" href="keys/{{$record['key_id']}}" id="editbtn_{{$no}}">
                            <b id="editico_{{$no}}" class="icon-edit"></b>
                        </a>
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