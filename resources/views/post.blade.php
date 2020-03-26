@extends('templates.master')

@section('title')- Post @stop

@section('css')
<style media="screen">
  .py-5{
    padding-bottom: 0!important;
  }
  .text-post img{
    max-width: 75rem;
  }
</style>
@stop

@section('content')
<div class="container">
  <div class="row" id="buscador">
    <div class="chip hoverable" onClick="window.history.back();">
      <img src="/assets/images/system/340.png" alt="Contact Person"> Regresar
    </div>
  </div>
  <br>
  <div class="row">
      <h4 class="title-post"><strong>{{$post->titulo}}</strong></h4>
  </div>
  <br>
  <div class="row">
    <div class="img-post view overlay hoverable">
      <img src="/assets/images/post/{{$post->banner}}?{{rand()}}" alt="" class="img-fluid">
      <div class="mask flex-center">
      </div>
    </div>
  </div>
  <div class="row row-text">
    <div class="col-md-12 col-lg-8 col-sm-12 col-xs-12">
      <span class="text-post">{!!$post->contenido!!}</span>
    </div>
    <div class="col-lg-4 hide-md-down">

    </div>
  </div>
</div>
<div class="container container-comments">
  <div class="row">
      <h6 class="title-section"><strong>Dejanos tu comentario</strong></h6>
  </div>
  <form id="frm-comment">
    <div class="md-form form-sm">
      <input type="email" id="email" class="form-control">
      <label for="email" class="">Correo electronico</label>
    </div>
    <div class="md-form form-sm">
      <input type="text" id="username" class="form-control">
      <label for="username" class="">Nombre</label>
    </div>
    <!--Textarea with icon prefix-->
    <div class="md-form">
        <textarea type="text" id="message" class="md-textarea"></textarea>
        <label for="message">Comentario</label>
    </div>
    <div class="text-center">
        <button type="submit" id="btnSendComment" data-post="{{$post->id}}" class="btn btn-primary waves-effect waves-light">Comentar</button>
    </div>
  </form>
  <br>
  <hr>
  <div class="comments-list text-left">
    <div class="section-heading">
        <h3 class="section-heading h3 pt-3 mb-5">Comments <span class="badge Audi countComments">3</span></h3>
    </div>
    <div id="content-comments">
    </div>
  </div>
</div>
@stop
@section('js')
<script src="/assets/js/blog/components.js" charset="utf-8"></script>
<script src="/assets/js/blog/post.js" charset="utf-8"></script>
@stop
