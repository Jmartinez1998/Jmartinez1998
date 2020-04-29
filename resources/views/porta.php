<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="popup-portfolio">
        @foreach($productos as $producto)

            <div class="card" style="width: 18rem;">
            <a class="download-link" target="_blank" href="/assets/images/productos/{{$producto->imagen}}" title="{{$producto->nombre}}">
                <div class="card-body">
                    <h5 class="card-title">{{$producto->nombre}}</h5>
                    <p class="card-text">{{strip_tags($producto->descripcion)}}</p>
                    <h6 role="button" data-id="{{$producto->id}}" class="btn btn-green86 btn-interesa" data-toggle="modal" data-target="#md-interes" style="margin-top:-39rem;">¡Me interesa!</h6>
                </div>
            </div>        



        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="popup-portfolio">
            @foreach($productos as $producto)
            <div class="portfolio-item grow {{$producto->categoria}}" data-categoria="{{trim($producto->categoria)}}">
                <div class="inner-content">
                    <div class="portfolio-content">
                        <div class="portfolio-detail">
                            <a class="download-link" target="_blank" href="/assets/images/productos/{{$producto->imagen}}" title="{{$producto->nombre}}">
                                <div class="portfolio-text">
                                    <h4>{{$producto->nombre}}</h4>
                                    <p>{{strip_tags($producto->descripcion)}}</p>
                                </div>
                                <!-- //.portfolio-text -->
                            </a>
                            <div class="text-center" style="text-align:center;position:relative;">
                                <h6 role="button" data-id="{{$producto->id}}" class="btn btn-green86 btn-interesa" data-toggle="modal" data-target="#md-interes" style="margin-top:-39rem;">¡Me interesa!</h6>
                            </div>
                        </div>
                        <!-- //.portfolio-detail -->
                    </div>
                    <!-- //.portfolio-content -->
                    <img src="/assets/images/productos/{{$producto->imagen}}" alt="" class="img-responsive">
                    </img>

                </div>
                <!-- //.inner-content -->
            </div>
            @endforeach
            <!-- //.portfolio-item -->
        </div>
        <!-- //.popup-portfolio -->
    </div>
    <!-- //.col-md-12 -->
</div>
