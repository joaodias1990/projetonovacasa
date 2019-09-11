@extends('layouts.app')

@section('body')
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Nova</b>Casa</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <div class="navbar-custom-menu" style="width:100%;">
        <ul class="nav navbar-nav" style="width:100%;">
          <li class="dropdown notifications-menu pull-left" style="width:62%;">
            <i class="fa fa-arrow-left"></i>
          </li>
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <!--<span class="label label-warning">10</span> -->
            </a>
            <ul class="dropdown-menu">
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <li class="user-header">
                
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('profile')}}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                  <a href="javascript:$('#logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @section('content')
    <section class="content-header">
      <h1>
        Menu
        <small>Marcações</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Index</a></li>
        <li class="active">Menu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <a href="{{route('add_marcacao')}}"> 
            <div class="col-lg-3 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h4>ADICIONAR MARCAÇÕES</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
        </a>

        <a href="{{route('ver_marcacao')}}"> 
            <div class="col-lg-3 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h4>VER MARCAÇÕES</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
              </div>
            </div>
        </a>
        <a href="{{route('profile')}}"> 
            <div class="col-lg-3 col-xs-12">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h4>DADOS PESSOAIS</h4>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
              </div>
            </div>
        </a>


        <!-- ./col -->
    </section>
    @show
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2019 <a>João Dias</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
@endsection
