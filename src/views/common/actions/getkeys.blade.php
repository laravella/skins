{{-------------------------------------------------------- getKeys --------------}}

@include("skins::common.inc.toolbar")
@include("skins::common.inc.pagetitle")

@section('getKeys')
    @if($action == 'getKeys')

        @if($displayType == "text/html")
            @yield('pagetitle')
            @yield('toolbar')
            @yield('messages')
            @yield('search')
        @endif

        @if(isset($dataA) && isset($dataA[0]))
            
{{--
'k.id as key_id', 'k.name as key_name', 
'pkfi.id as pkfi_fid', 'pkfn.fullname as pkfi_fin', 
'pkfn.id as pkfn_fid', 'pkfn.fullname as pkfn_fin', 
'fkfi.id as fkfi_fid', 'fkfi.fullname as fkfi_fin', 
'fkfn.id as fkfn_fid', 'fkfn.fullname as fkfn_fin', 
'kf.id as key_field_id', 'kf.order', 'kf.key_type_id'            
--}}
            @include("skins::common.inc.querytable")
                
        @endif
        
        {{--
        @if(isset($data) && isset($data[0]))
            @include("skins::common.inc.dbtable")
            {{$data->links()}}
        @endif
        --}}
    @endif
@stop
