<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            <form name="borrado" method="POST" action="{{route('cuotas.destroy', $cuota->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mr-3"><i class="fas fa-folder-minus"></i> Borrar Cuota</button>{{ __('Editando Cuota') }}
            </form>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-errores />
    <!--<form name="fc" method="POST" action="{{route('cuotas.update', $cuota)}}" class="p-4 text-light bg-primary mt-3">
    @csrf
    @method("PUT")
    @bind($cuota)
    <x-form-select name="hermano_id" :options="$hermanos" label="Hermano"/>
    <x-form-input name="ano" label="Año" />
    <x-form-input name="motivo" label="Motivo" />
    <x-form-select name="estado" :options="$misEstados" label="Estado"/>
    <x-form-input name="precio" label="Precio"/>
    <div class="mt-3">
    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>
    <button type="reset" class="btn btn-warning mr-5"><i class="fas fa-broom"></i> Limpiar</button>
    <a class="btn btn-info mx-3" onclick="window.history.back()"><i class="fas fa-backward"></i> Volver</a>
    </div>
    </form>-->

    <form name="fc" method="POST" action="{{route('cuotas.update', $cuota)}}" class="p-4" style="background: #ECCCCF;color: black;">
        @csrf
        @method("PUT")
        @bind($cuota)
        <!--<x-form-input name="nombre" label="Nombre" />
        <x-form-input name="apellidos" label="Apellidos" />
        <x-form-input name="direccion" label="Dirección"/>
        <x-form-input name="telefono" label="Teléfono"/>
        <x-form-input name="numero" label="Número"/>-->
    
        <div class="container mb-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="well well-sm">
                        <form class="form-horizontal" method="post">
                            <fieldset>
                                <legend class="text-center header"><b>Editar Cuota</b>
                                </legend>
                                
        
                                <div class="form-group">
                                    <label for="full_name_id" class="control-label"><i class="fas fa-calendar-alt"></i><b> Hermano</b></label>
                                    <x-form-select name="hermano_id" :options="$hermanos"/>
                                </div>    
                            
                                <div class="form-group">
                                    <label for="full_name_id" class="control-label"><i class="fas fa-calendar-alt"></i><b> Año</b></label>
                                    <x-form-input type="text" class="form-control" id="ano" name="ano" placeholder="Año" maxlength="4" maxlength="4"/>
                                </div>                    
                                                        
                                <div class="form-group">
                                    <label for="street1_id" class="control-label"><i class="fas fa-clipboard"></i><b> Motivo</b></label>
                                    <x-form-textarea type="text" class="form-control" id="motivo" name="motivo" placeholder="Motivo"/>
                                </div>    
                            
                                <div class="form-group">
                                    <label for="street2_id" class="control-label"><i class="fas fa-money-bill-alt"></i><b> Estado</b></label>
                                    <x-form-select type="text" class="form-control" id="estado" name="estado">
                                        <option value="Pagado">Pagado</option>
                                        <option value="Pendiente">Pendiente</option>
                                     </x-form-select>
                                </div>    
                                <div class="form-group">
                                    <label for="city_id" class="control-label"><i class="fas fa-euro-sign"></i><b> Precio</b></label>
                                    <x-form-input type="text" class="form-control" id="precio" name="precio" placeholder="Precio"/>
                                </div> 
   
                                <div class="form-group text-center">
                                    <div class="mt-3 text-center">
                                        <button type="submit" class="btn btn-success mr-1 ml-1"><i class="fas fa-save"></i> Guardar</button>
                                    </form>
                                        <button type="reset" class="btn btn-warning mr-1 ml-1"><i class="fas fa-broom"></i> Limpiar</button>
                                        <a class="btn btn-info mr-1 ml-1" onclick="window.history.back()"><i class="fas fa-backward"></i> Volver</a>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
            </div>
        </div>
    </div>
</x-app-layout>
