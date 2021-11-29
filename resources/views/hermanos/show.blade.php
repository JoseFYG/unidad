<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-white leading-tight">
          {{$hermano->nombre}} {{$hermano->apellidos}}  -  {{$hermano->numero}}
      </h2>
  </x-slot>
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
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-mensajes />
            <div class="row justify-content-center">
            <div class="card" style="background: #ECCCCF;color: black;width: 100%;">
                <div class="card-body">
                  <div class="form-group text-center">
                    <div class="mt-3 text-center">
                      <form name="borrado" method="POST" action="{{route('hermanos.destroy', $hermano->id)}}">
                        <a href="{{route('hermanos.edit', $hermano->id)}}" class="btn btn-warning"><i class="fas fa-edit mr-1 ml-1"></i> Editar Hermano</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-user-minus mr-1 ml-1"></i> Borrar Hermano</button>
                      </form>
                    </div>
                  </div>
                  <?php
                    $hoy = new DateTime();
                    $hoyD = new DateTime();

                    $fecha_nacimiento = new DateTime($hermano->fechaNac);
                    $edad = $hoy->diff($fecha_nacimiento);

                    $fecha_ingreso = new DateTime($hermano->fechaIng);
                    $anos = $hoyD->diff($fecha_ingreso);
                  ?> 
                  <hr style="border-color:#1d1b31;">
                  <div class="card-body mt-3 mb-3">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm card-title text-muted text-center">
                          <h5>Dirección:</h5>
                        </div>
                        <div class="col-sm card-title text-left">
                          <h5>{{$hermano->direccion}}</h5>
                        </div>
                        <div class="col-sm card-title text-muted text-center">
                          <h5>DNI:</h5>
                        </div>
                        <div class="col-sm card-title text-left">
                          <h5>{{$hermano->dni}}</h5>
                        </div>
                      </div>
                      <div class="row"> 
                        <div class="col-sm card-title text-muted text-center">
                          <h5>Email:</h5>
                        </div>
                        <div class="col-sm card-title text-left">
                          <h5>{{$hermano->email}}</h5>
                        </div>
                        <div class="col-sm card-title text-muted text-center">
                          <h5>Teléfono:</h5>
                        </div>
                        <div class="col-sm card-title text-left">
                          <h5>{{$hermano->telefono}}</h5>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm card-title text-muted text-center">
                          <h5>Fecha Nacimiento:</h5>
                        </div>
                        <div class="col-sm card-title text-left">
                          <h5>{{$hermano->fechaNac}} ({{$edad->y}})</h5>
                        </div>
                        <div class="col-sm card-title text-muted text-center">
                          <h5>Fecha Ingreso:</h5>
                        </div>
                        <div class="col-sm card-title text-left">
                          <h5>{{$hermano->fechaIng}} ({{$anos->y}})</h5>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm card-title text-muted text-center">
                          <h5>Cortejo: </h5>
                        </div>
                        <div class="col-sm card-title text-left">
                          <h5>{{$hermano->cortejo}}</h5>
                        </div>
                        <div class="col-sm card-title text-muted text-center">
                          <h5>¿Medalla?</h5>
                        </div>
                        <div class="col-sm card-title text-left">
                          <h5>{{$hermano->medalla}}</h5>
                        </div>
                      </div>
                    </div>
                    <hr style="border-color:#1d1b31;">
        
        
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
                    <div class="card-body mt-3">
                    <a href="{{route('cuotas.create')}}" class="btn btn-success text-center"><i class="fas fa-folder-plus"></i> Crear Cuota</a>
                    <!--<a href="{{route('cuotas.create')}}" class="btn btn-success"><i class="fas fa-user-plus"></i> Cuota</a>-->
                
                    <table id="example" class="table table-striped nowrap table-danger mt-2" style="width:100%; overflow: hidden;">
                        <thead>
                            <tr>
                              <th scope="col" class="text-center">Año</th>
                              <th scope="col" class="text-center">Precio</th>
                              <th scope="col" class="text-center">Estado</th>
                              
                              <th scope="col" class="text-center">Editar</th>
                              </tr>
                        </thead>
                        <tbody>
                            @foreach($hermano->cuotas as $item)
                          <tr>
                            <td class="text-center">{{$item->ano}}</td> 
                            <td class="text-center">{{$item->precio}} €</td>
                            <td class="text-center">{{$item->estado}}</td>
                            <td class="text-center">
                              <a href="{{route('cuotas.edit', $item)}}" class="btn btn-warning"><i class="fas fa-folder-open"></i> Editar Cuota</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
                  <div class="card-body mt-3">
                    <a href="{{route('donativos.create')}}" class="btn btn-success text-center"><i class="fas fa-calendar-plus"></i> Crear Donativo</a>
                    <!--<a href="{{route('cuotas.create')}}" class="btn btn-success"><i class="fas fa-user-plus"></i> Cuota</a>-->
                
                    <table id="example1" class="table table-striped nowrap table-danger mt-2" style="width:100%; overflow: hidden;">
                        <thead>
                            <tr>
                              <th scope="col" class="text-center">Año</th>
                              <th scope="col" class="text-center">Tipo</th>
                              <th scope="col" class="text-center">Info</th>
                              </tr>
                        </thead>
                        <tbody>
                            @foreach($hermano->donativos as $item)
                          <tr>
                            <td class="text-center">{{$item->ano}}</td> 
                            <td class="text-center">{{$item->dinero}}</td>
                            <td class="text-center">{{$item->info}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
        
        
                    <!--<div class="card-body mt-3">
                      <table class="table table-primary table-striped mt-2">
                        <thead>
                          <tr>
                            <th scope="col" class="text-center">Año</th>
                            <th scope="col" class="text-center">Precio</th>
                            <th scope="col" class="text-center">Estado</th>
                            
                            <th scope="col" colspan=2 class="text-center">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($hermano->cuotas as $item)
                          <tr>
                            <td class="text-center">{{$item->ano}}</td>
                            <td class="text-center">{{$item->precio}} €</td>
                            <td class="text-center">{{$item->estado}}</td>
        
                            <td class="text-right">
                              <a href="{{route('cuotas.edit', $item)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
                            </td>
                            <td class="text-left">
                              <form name="borrado" method="POST" action="{{route('cuotas.destroy', $item)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-user-minus"></i> Borrar</button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>-->
                  <div class="row justify-content-rigth">
                      <a class="btn btn-info mt-2" href="{{route('hermanos.index')}}"><i class="fas fa-backward"></i> Volver</a>
                  </div>
                  </div>
                  
                  
                  
                </div>
            </div>
            </div>
            <script>
              $(document).ready(function() {
              var table = $('#example').DataTable( {
                  scrollY:        "150px",
                  scrollX:        true,
                  scrollCollapse: true,
                  paging:         false,
                  fixedColumns:   true
                  
                  
              } );
          } );
          $(document).ready(function() {
              var table = $('#example1').DataTable( {
                  scrollY:        "150px",
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
