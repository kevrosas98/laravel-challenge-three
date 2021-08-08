@include('templates.header')

<div class="row">
        <div class="col-md-6">
            <img src="{{ $eventos['img_small'] }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
            <h3><strong>{{ $eventos['nombre']  }} </strong></h3><br>
            <p><strong>Fecha : </strong>{{ $eventos['fecha']  }}</p> 
            <p><strong>Fecha : </strong>{{ $eventos['hora']  }}</p> 
            <p><strong>Grupo : </strong>{{ $grupo['nombre']  }}</p> 
            <p><strong>Lugar : </strong>{{ $eventos['lugar']  }}</p> 
            <p><strong>Entrada : </strong> S/ {{ $eventos['precio']  }}</p> 
            <br>
            
            <input type="text" class="form-control" style="width: 100px;" value="1">

            <br>
            
            <a class="btn btn-primary" href="#" role="button">Agregar al carrito</a>

        </div>
</div>

<h2 class="border-bottom mt-5">Eventos que te pueden gustar</h2>


<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-4 mt-1">


@foreach ($levents as $levent)

<div class="col">
    <div class="card mb-3">
    <img src="{{ $levent['img_small'] }}" class="card-img-top" alt="{{ $levent['nombre'] }}">
    <div class="card-body">
        <h5 class="card-title">{{ $levent['nombre'] }}</h5>
    </div>
    <div class="d-grid gap-2">
        <a href="/evento/{{ $levent['id'] }}" class="btn btn-primary" style="border-radius: 0 !important;">Ver Detalle</a>
    </div>
    </div>
</div>

@endforeach


</div>

@include('templates.footer')