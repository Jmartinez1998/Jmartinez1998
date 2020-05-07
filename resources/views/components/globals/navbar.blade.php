<nav id="navigation" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-rj-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#page-top"><img src="/assets/images/system/bg2.png" class="img-fluid img-responsive img-logo-banner" style="width:14rem;height:4.5rem;margin-top:1rem;margin-bottom:1rem;" alt=""></a>
    </div>
    <!-- //.navbar-header -->
    <div class="navbar-collapse collapse navbar-rj-collapse">
      <ul class="nav navbar-nav ">
        <li class="page-scroll">
          <a href="#who-we-are">{{__('ini.navbar.NB1')}}</a>
        </li>
        <li class="page-scroll">
          <a href="#our-services">{{__('ini.navbar.NB2')}}</a>
        </li>
        <li class="page-scroll">
          <a href="#keep-in-touch">{{__('ini.navbar.NB3')}}</a>
        </li>
        <li class="page-scroll">
          <a href="#our-blog">{{__('ini.navbar.NB5')}}</a>
        </li>
        <li class="page-scroll">
          <a href="/blog" onclick="window.location = '/blog'">{{__('ini.navbar.NB6')}}</a>
        </li>
        <li class="page-scroll">
          <a href data-toggle="modal" data-target="#modalAccess">{{__('ini.navbar.LOG')}}</a>
        </li>
        <li class="page-scroll">
          <a href="http://127.0.0.1:3000/" >  <i class="fa fa-envelope" style="font-size:35px;color:#fff;padding-bottom:20px"></i> </a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" style="padding-top: 1rem;" action="{{route('products.search')}}" method="POST">
        @csrf
        <input class="form-control mr-sm-2" name='busqueda' type="search" placeholder="Descubre" aria-label="Search">
        <a type="button" class="btn btn-outline-success my-2 my-sm-0 fa fa-search" type="submit" ></a>
      </form>
    </div>
    <!-- //.navbar-collapse -->
  </div>
  <!-- //.container -->
</nav>
<!-- //End Navbar -->