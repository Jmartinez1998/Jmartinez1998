@extends('templates.master')

@section('title')- Sección @stop

@section('css')

@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
              <div class="view hm-black-light" style="width:100%;">
                  <img class="d-block w-100" src="/assets/images/secciones/{{$seccion->imagen}}" alt="First slide">
                  <div class="mask"></div>
              </div>
              <div class="carousel-caption">
                  <h3 class="h3-responsive">{{$seccion->titulo}}</h3>
                  <p>{{strip_tags($seccion->contenido,ENT_QUOTES)}}</p>
                  <a href="/blog" class="btn btn-lg btn-green86 btn-rounded">Regresar al blog</a>
                  <br>
                  <br>
              </div>
          </div>
        </div>
    </div>
  </div>
  <br>
  <hr>
    <div class="row" id="row-seccion">
        <h4 class="title-section"><strong>Publicaciones de esta sección</strong></h4>
    </div>
    <br>
    <div class="row">
      @foreach($posts as $post)
      <div class="col-md-4">

        <!--Card-->
        <div class="card my-card">

            <!--Card image-->
            <div class="view overlay hm-white-slight">
                <img src="/assets/images/post/{{$post->banner}}?{{rand()}}" class="img-fluid" alt="" style="width:100%;">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
            <!--/.Card image-->
            <a href="/post/{{$post->id}}" class="btn-floating btn-action"><i class="fa fa-chevron-right"></i></a>

            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                <h4 class="card-title">{{$post->titulo}}</h4>
                <hr>
                <!--Text-->
                <p class="card-text">{{strip_tags($post->contenido)}}</p>
            </div>
            <!--/.Card content-->

            <!-- Card footer -->
            <div class="card-data">
                <ul>
                    <li><a href="#"><i class="fa fa-comments-o"></i>{{$post->cantidad}}</a></li>
                    <li><i class="fa fa-clock-o"></i><span class="date-time"> {{$post->created_at}}</span></li>
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
      <nav class="my-4 pagination-blog" data-ref="#row-seccion">
        {{$posts}}
      </nav>
      <!--/Pagination -->
    </div>
</div>
@stop

@section('js')
<script src="/assets/js/blog/blog.js" charset="utf-8"></script>

@stop
