
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Creando Donativo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-errores />


    <form name="fc" method="POST" action="{{route('donativos.store')}}" class="p-4" style="background: #ECCCCF;color: black;">
        @csrf
    
        <div class="container mb-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="well well-sm">
                        <form class="form-horizontal" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label for="full_name_id" class="control-label"><i class="fas fa-calendar-alt"></i><b> Hermano</b></label>
                                    <x-form-select name="hermano_id" :options="$hermanos"/>
                                </div>
                                
                                <div class="form-group">
                                    <label for="full_name_id" class="control-label"><i class="fas fa-calendar-alt"></i><b> Año</b></label>
                                    <input type="text" class="form-control" id="ano" name="ano" placeholder="Año" maxlength="4" maxlength="4">
                                </div>                       
                                                        
                                <div class="form-group">
                                    <label for="street2_id" class="control-label"><i class="fas fa-money-bill-alt"></i><b> Tipo</b></label>
                                    <x-form-select type="text" class="form-control" id="dinero" name="dinero">
                                        <option value="Dinero">Dinero</option>
                                        <option value="Enseres">Enseres</option>
                                     </x-form-select>
                                </div>    
                            
                                <div class="form-group">
                                    <label for="street1_id" class="control-label"><i class="fas fa-clipboard"></i><b> Información</b></label>
                                    <x-form-textarea type="text" class="form-control" id="info" name="info" placeholder="Información"/>
                                </div>                 
        
                                <div class="form-group text-center">
                                    <div class="mt-3 text-center">
                                        <button type="submit" class="btn btn-success mr-1 ml-1"><i class="fas fa-folder-plus"></i> Crear</button>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
            </div>
        </div>
    </div>
</x-app-layout>