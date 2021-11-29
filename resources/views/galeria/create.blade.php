<x-plantilla>
    <x-slot name="titulo">Gestión Galería</x-slot>
    <x-slot name="cabecera">Crear Foto</x-slot>
    <x-errores />
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
    
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
    
                <div class="card">
                    <div class="card-header">
                        <h4>Add Student with IMAGE
                            <a href="{{route('galeria.index')}}" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
    
                        <form action="{{route('galeria.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
    
                            <div class="form-group mb-3">
                                <label for="">Autor</label>
                                <input type="text" name="autor" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Foto</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save Student</button>
                            </div>
    
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-plantilla>