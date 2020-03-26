@extends('templates.master')

@section('title')-Blog @stop

@section('css')
@stop

@section('content')
<div class="row" id="buscador">

</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!--Carousel Wrapper-->
      <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
          <!--Indicators-->
          <ol class="carousel-indicators">
            @for($i=0;$i<count($secciones);$i++)
              <li data-target="#carousel-example-2" data-slide-to="{{$i}}" class="{{($i==0)? 'active': ''}}"></li>
             @endfor
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <?php $id = $secciones[0]->id;?>
          <div class="carousel-inner" role="listbox">
            @foreach($secciones as $seccion)
              <div class="carousel-item {{($id == $seccion->id)? 'active' : ''}}">
                  <div class="view hm-black-light" style="width:100%;">
                      <img class="d-block w-100" src="/assets/images/secciones/{{$seccion->imagen}}" alt="First slide">
                      <div class="mask"></div>
                  </div>
                  <div class="carousel-caption">
                      <h3 class="h3-responsive">{{$seccion->titulo}}</h3>
                      <p>{{strip_tags($seccion->contenido,ENT_QUOTES)}}</p>
                      <a href="/seccion/{{$seccion->id}}" class="btn btn-lg btn-green86 btn-rounded">Ir a sección</a>
                      <br>
                      <br>
                  </div>
              </div>
              @endforeach
          </div>
          <!--/.Slides-->
          <!--Controls-->
          <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
      </div>
      <!--/.Carousel Wrapper-->
    </div>
  </div>
  <br>
  <hr>
    <div class="row" id="row-destacados">
        <h4 class="title-section"><strong>Publicaciones destacadas</strong></h4>
    </div>
    <br>
    <div class="row">
      @foreach($destacados as $destacado)
      <div class="col-md-4">

        <!--Card-->
        <div class="card my-card">

            <!--Card image-->
            <div class="view overlay hm-white-slight">
                <img src="/assets/images/post/{{$destacado->banner}}?{{rand()}}" class="img-fluid" alt="" style="width:100%;">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
            <!--/.Card image-->
            <a href="/post/{{$destacado->id}}" class="btn-floating btn-action"><i class="fa fa-chevron-right"></i></a>

            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                <h4 class="card-title">{{$destacado->titulo}}</h4>
                <hr>
                <!--Text-->
                <p class="card-text">{{strip_tags($destacado->contenido)}}</p>
            </div>
            <!--/.Card content-->

            <!-- Card footer -->
            <div class="card-data">
                <ul>
                    <li><a href="#"><i class="fa fa-comments-o"></i>{{$destacado->cantidad}}</a></li>
                    <li><i class="fa fa-clock-o"></i><span class="date-time"> {{$destacado->created_at}}</span></li>
                </ul>
            </div>
            <!-- Card footer -->

        </div>
        <!--/.Card-->

      </div>
      @endforeach
    </div>
    <div class="row">
      <!--Pagination -->
      <nav class="my-4 pagination-blog" data-ref="#row-destacados">
          {{ $destacados->render() }}
      </nav>
      <!--/Pagination -->
    </div>
    <hr>
    <div class="row" id="row-recientes">
        <h4 class="title-section"><strong>Últimas publicaciones</strong></h4>
    </div>
    <br>
    <div class="row">
      @foreach($recientes as $reciente)
      <div class="col-md-4">

        <!--Card-->
        <div class="card my-card">

            <!--Card image-->
            <div class="view overlay hm-white-slight">
                <img src="/assets/images/post/{{$reciente->banner}}?{{rand()}}" class="img-fluid" alt="" style="width:100%;">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
            <!--/.Card image-->
            <a href="/post/{{$reciente->id}}" class="btn-floating btn-action"><i class="fa fa-chevron-right"></i></a>

            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                <h4 class="card-title">{{$reciente->titulo}}</h4>
                <hr>
                <!--Text-->
                <p class="card-text">{{strip_tags($reciente->contenido)}}</p>
            </div>
            <!--/.Card content-->

            <!-- Card footer -->
            <div class="card-data">
                <ul>
                    <li><a href="#"><i class="fa fa-comments-o"></i>{{$reciente->cantidad}}</a></li>
                    <li><i class="fa fa-clock-o"></i><span class="date-time"> {{$reciente->created_at}}</span></li>
                </ul>
            </div>
            <!-- Card footer -->

        </div>
        <!--/.Card-->

      </div>
      @endforeach
    </div>
    <div class="row">
      <!--Pagination -->
      <nav class="my-4 pagination-blog" data-ref="#row-recientes">
          {{ $recientes->render() }}
      </nav>
      <!--/Pagination -->
    </div>
</div>
@stop

@section('js')
<script src="/assets/js/blog/blog.js" charset="utf-8"></script>
<script type="text/javascript">

</script>
@stop
