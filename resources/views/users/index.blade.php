<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Cuentas') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
              <x-mensajes />
      <style>
        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
          bottom: .5em;
        }
        
      </style>

  
      <table id="example" class="table table-striped nowrap table-danger mt-2" style="width:100%; overflow: hidden;">
          <thead>
              <tr>
                  <th scope="col" class="text-center">Nombre</th>
                  <th scope="col" class="text-center">Email</th>
                  <th scope="col"></th>
                </tr>
          </thead>
          <tbody>
              @foreach($users as $item)
            <tr>
              
              <td class="text-center">{{$item->name}}</td> 
              <td class="text-center">{{$item->email}}</td>
              <th scope="row" class="text-center">
                @if ( Auth::user()->email == $item->email )
                    <form name="borrado" method="POST" action="{{route('users.destroy', $item->id)}}">
                    @csrf
                    @method('DELETE')
                    </form>
                @endif
                @if ( Auth::user()->email != $item->email )
                    <form name="borrado" method="POST" action="{{route('users.destroy', $item->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-user-minus mr-1 ml-1"></i> Borrar Cuenta</button>
                    </form>
                @endif
              </th>
            </tr>
            @endforeach
          </tbody>
      </table>
  
        <script>
          $(document).ready(function() {
          var table = $('#example').DataTable( {
              scrollY:        "560px",
              scrollX:        true,
              scrollCollapse: true,
              paging:         false,
              fixedColumns:   true
              
              
          } );
      } );
      </script> 
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/rowgroup/1.1.3/js/dataTables.rowGroup.min.js"></script>
  
            </div>
        </div>
    </div>
  </x-app-layout>
  