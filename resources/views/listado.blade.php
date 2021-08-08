@include('templates.header')

<h1>Conciertos de {{ $generos }}</h1>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-3 mt-1">


  @if(count($eventos) <= 0)
    <p>No existen conciertos con esta categoria.</p>
  @else
    @foreach ($eventos as $evento)
    <div class="col">
      <div class="card shadow-sm">
        <img src="{{ $evento['img_small'] }}" alt="{{ $evento['nombre'] }}">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted">{{ $evento['nombre'] }}</small>
            <div class="btn-group">
              <a href="/evento/{{ $evento['id'] }}" class="btn btn-sm btn-outline-secondary">Más Información</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  @endif
 

</div>


@include('templates.footer')