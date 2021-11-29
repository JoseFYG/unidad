<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-white leading-tight">
        <a href="{{route('donativos.create')}}" class="btn btn-success text-center mr-3"><i class="fas fa-folder-plus"></i> Crear Donativo</a>{{ __('Listado de Donativos') }}
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
                        <th scope="col" class="text-center">Año</th>
                        <th scope="col" class="text-center">Tipo</th>
                        <th scope="col" class="text-center">Hermano</th>
                        <th scope="col" class="text-center">Borrar</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach($donativos as $item)
                  <tr>
                    <td class="text-center">{{$item->ano}}</td> 
                    <td class="text-center">{{$item->dinero}}</td>
                    <td class="text-center">{{$item->hermano->nombre}} {{$item->hermano->apellidos}}</td>
                    <td class="text-center">
                      <form name="borrado" method="POST" action="{{route('donativos.destroy', $item->id)}}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger"><i class="fas fa-folder-minus mr-1 ml-1"></i> Borrar Donativo</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
            <div class="mt-2">
              {{$donativos->links()}}
            </div>
            
        
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
