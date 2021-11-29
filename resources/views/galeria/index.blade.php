<x-plantilla>
  <style>
    .grid-gallery {
      display: grid;
      grid-auto-rows: 200px;
      grid-gap: 1rem;
      grid-auto-flow: row dense;
    }

    @media all and (min-width: 320px) {
      .grid-gallery {
        grid-template-columns: repeat(1, 1fr);
      }
    }

    @media all and (min-width: 768px) {
      .grid-gallery {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media all and (min-width: 1024px) {
      .grid-gallery {
        grid-template-columns: repeat(6, 1fr);
      }
    }

    .grid-gallery__item:nth-child(11n+1) {
      grid-column: span 1;
    }

    .grid-gallery__item:nth-child(11n+4) {
      grid-column: span 2;
      grid-row: span 1;
    }

    .grid-gallery__item:nth-child(11n+6) {
      grid-column: span 3;
      grid-row: span 1;
    }

    .grid-gallery__item:nth-child(11n+7) {
      grid-column: span 1;
      grid-row: span 2;
    }

    .grid-gallery__item:nth-child(11n+8) {
      grid-column: span 2;
      grid-row: span 2;
    }

    .grid-gallery__item:nth-child(11n+9) {
      grid-row: span 3;
    }

    .grid-gallery__image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
</style>
    <x-slot name="titulo">Galería</x-slot>
    <x-slot name="cabecera">Galería</x-slot>
    <!--<x-mensajes />
    <a href="{{route('galeria.create')}}" class="btn btn-success"><i class="fas fa-user-plus"></i> Crear Foto</a>
    <table class="table table-primary table-striped mt-2">
        <thead>
          <tr>
            <th scope="col">Autor</th>
            <th scope="col">Foto</th>
            <th scope="col" colspan=2 class="text-center">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach($galeria as $item)
          <tr>
            <td>{{$item->autor}}</td>
            <td><img src="{{ asset('uploads/galeria/'.$item->image) }}" width="140px" height="140px" alt="Image"></td>
            <td class="text-center">
                <a href="{{route('galeria.edit', $item)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
            </td>
            <td class="text-center">
              <form name="borrado" method="POST" action="{{route('galeria.destroy', $item)}}">
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
  
      </div>

      <div class="container">
        <h2>Carousel Example</h2>  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
           Indicators
          <ol class="carousel-indicators">
            @foreach($galeria as $item)
            <li data-target="#myCarousel" data-slide-to="0"></li>
            @endforeach
          </ol>
      
          <div class="carousel-inner">
            @foreach($galeria as $item)
            <div class="item active">
              <img src="{{ asset('uploads/galeria/'.$item->image) }}" alt="{{$item->autor}}" width="140px" height="140px" alt="Image">
            </div>
            @endforeach
          </div>
        

          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
          
        </div>
      </div>-->
      <div class="grid-gallery">
          @foreach($galeria as $item)
          <a class="grid-gallery__item text-center">
              <img class="grid-gallery__image" src="{{ asset('uploads/galeria/'.$item->image) }}">
              <span style="color: black">{{$item->autor}}</span>
          </a>
          
          @endforeach
      </div>
</x-plantilla>
