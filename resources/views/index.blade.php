@include('templates.header')

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" >
      <div class="carousel-inner">
        @foreach ($eventos as $evento)
        <div class="carousel-item {{ ($evento['id'] == 1) ? 'active' : '' }} ">
          <img src="{{ $evento['img_large'] }}" class="d-block w-100" alt="{{ $evento['nombre'] }}">
        </div>
        @endforeach

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>

    <h2 class="pt-4">Generos</h2><hr>
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-3 mt-1">
    @foreach ($generos as $genero)
      <div class="col">
        <div class="card shadow-sm">
          <img src="https://s3-us-west-2.amazonaws.com/joinnus.com/user/145113/act60b567373bd93.jpg" alt="{{ $genero['nombre'] }}">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">{{ $genero['nombre'] }}</small>
              <div class="btn-group">
                <a href="/genero/{{ $genero['id'] }}" class="btn btn-sm btn-outline-secondary">Ver Eventos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

@include('templates.footer')