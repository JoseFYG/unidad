
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Editando Hermano') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-errores />
    <!--<form name="fc" method="POST" action="{{route('hermanos.update', $hermano)}}" class="p-4 text-light bg-primary mt-3">
    @csrf
    @method("PUT")
    @bind($hermano)
    <x-form-input name="nombre" label="Nombre" />
    <x-form-input name="apellidos" label="Apellidos" />
    <x-form-input name="direccion" label="Dirección"/>
    <x-form-input name="telefono" label="Teléfono"/>
    <x-form-input name="numero" label="Número"/>
    <div class="mt-3">
    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Guardar</button>
    <button type="reset" class="btn btn-warning mr-5"><i class="fas fa-broom"></i> Limpiar</button>
    <a class="btn btn-info mx-3" href="{{route('hermanos.index')}}"><i class="fas fa-backward"></i> Volver</a>
    </div>
    </form>-->

    <form name="fc" method="POST" action="{{route('hermanos.update', $hermano)}}" class="p-4" style="background: #ECCCCF;color: black;">
        @csrf
        @method("PUT")
        @bind($hermano)
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
                                <div class="form-group">
                                    <label for="full_name_id" class="control-label"><i class="fa fa-user"></i><b> Nombre</b></label>
                                    <x-form-input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"/>
                                </div>    
                            
                                <div class="form-group">
                                    <label for="street1_id" class="control-label"><i class="fa fa-user"></i><b> Apellidos</b></label>
                                    <x-form-input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos"/>
                                </div>                    
                                                        
                                <div class="form-group">
                                    <label for="street2_id" class="control-label"><i class="fa fa-map-marker"></i><b> Dirección</b></label>
                                    <x-form-input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion"/>
                                </div>    
                            
                                <div class="form-group">
                                    <label for="city_id" class="control-label"><i class="fa fa-phone"></i><b> Teléfono</b></label>
                                    <x-form-input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono"/>
                                </div>    
                                <div class="form-group">
                                    <label for="city_id" class="control-label"><i class="fa fa-list-ol"></i><b> Número</b></label>
                                    <x-form-input type="text" class="form-control" id="numero" name="numero" placeholder="Numero"/>
                                </div> 
                                <div class="form-group">
                                    <label for="city_id" class="control-label"><b><i class="fa fa-envelope"></i><b> Email</b></label>
                                    <x-form-input type="text" class="form-control" id="email" name="email" placeholder="Email"/>
                                </div> 
                                <div class="form-group">
                                    <label for="city_id" class="control-label"><b><i class="fa fa-user-circle"></i><b> DNI</b></label>
                                    <x-form-input type="text" class="form-control" id="dni" name="dni" placeholder="DNI" maxlength="9" maxlength="9"/>
                                </div> 
                                
                                <div class="form-group">
                                    <label for="street2_id" class="control-label"><i class="fas fa-medal"></i><b> ¿Medalla?</b></label>
                                    
                                    <x-form-select type="text" class="form-control" id="medalla" name="medalla">
                                        <option value="Con Medalla">Con Medalla</option>
                                        <option value="Sin Medalla">Sin Medalla</option>
                                     </x-form-select>
                                </div> 
                                <div class="form-group">
                                    <label for="street2_id" class="control-label"><i class="fas fa-church"></i><b> Cortejo</b></label>
                                    
                                    <x-form-select type="text" class="form-control" id="cortejo" name="cortejo">
                                        <option value="Nazareno">Nazareno</option>
                                        <option value="Mantilla">Mantilla</option>
                                        <option value="Costalero">Costalero</option>
                                        <option value="Acólito">Acólito</option>
                                     </x-form-select>
                                </div> 
        
                                <div class="form-group text-center">
                                    <div class="mt-3 text-center">
                                        <button type="submit" class="btn btn-success mr-1 ml-1"><i class="fas fa-save"></i> Guardar</button>
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
