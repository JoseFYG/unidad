<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-white leading-tight">
        {{ __('Hermanos con derecho a Voto') }}
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
      <!--<a href="{{route('cuotas.create')}}" class="btn btn-success"><i class="fas fa-user-plus"></i> Cuota</a>-->
  
      <table id="example" class="table table-striped nowrap table-danger mt-2" style="width:100%; overflow: hidden;">
          <thead>
              <tr>
                  <th scope="col" class="text-center"></th>
                  <th scope="col" class="text-center">Número</th>
                  <th scope="col">Apellidos y Nombre</th>
                  <th scope="col" class="text-center">Edad</th>
                  <th scope="col" class="text-center">Años de Hermano</th>
                </tr>
          </thead>
          <tbody>
            @foreach($hermanos as $item)
            <?php
              $hoy = new DateTime();
              $hoyD = new DateTime();
              $fecha_nacimiento = new DateTime($item->fechaNac);
              $edad = $hoy->diff($fecha_nacimiento);

              $fecha_ingreso = new DateTime($item->fechaIng);
              $anos = $hoyD->diff($fecha_ingreso);
            ?> 
              @if ($edad->y > 18 && $anos->y >= 2)
            <tr>
              <th scope="row" class="text-center">
                  <a href="{{route('hermanos.show', $item)}}" class="btn btn-info"><i class="fas fa-info-circle"></i> <b>FICHA</b></a>
              </th>
              <td class="text-center">{{$item->numero}}</td> 
              <td>{{$item->apellidos}}, {{$item->nombre}}</td>
              <td class="text-center">{{$edad->y}}</td>
              <td class="text-center">{{$anos->y}}</td>
            </tr>
            @endif
            @endforeach
          </tbody>
      </table>
  
      <!--<table class="table table-primary table-striped mt-2">
          <thead>
            <tr>
              <th scope="col">Cuotas</th>
              <th scope="col">Apellidos y Nombre</th>
              <th scope="col">Dirección</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Número</th>
              <th scope="col" colspan=2 class="text-center">Acciones</th>
            </tr>
          </thead>
          <tbody>
              @foreach($hermanos as $item)
            <tr>
              <th scope="row">
                  <a href="{{route('hermanos.show', $item)}}" class="btn btn-info"><i class="fas fa-info-circle"></i> Cuotas</a>
              </th>
              <td>{{$item->apellidos}}, {{$item->nombre}}</td>
              <td>{{$item->direccion}}</td>
              <td>{{$item->telefono}}</td>
              <td>{{$item->numero}}</td>
              <td class="text-center">
                  <a href="{{route('hermanos.edit', $item)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
              </td>
              <td class="text-center">
                  @csrf
                  @method('DELETE')
                  <a href="{{route('hermanos.destroy', $item)}}" class="btn btn-danger"><i class="fas fa-user-minus"></i></a>
              </td>
              <!--<td class="text-center">
                <form name="borrado" method="POST" action="{{route('hermanos.destroy', $item)}}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"><i class="fas fa-user-minus"></i> Borrar</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="mt-2">
            {{$hermanos->links()}}
        </div>-->
  
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
  