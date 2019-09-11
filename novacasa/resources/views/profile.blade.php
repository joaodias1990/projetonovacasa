@extends('menu')

@section('content')

    <section class="content-header">
      <h1>
        Perfil
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Ver perfil</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <!-- right column -->
        <div class="col-md-12">
          
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="{{route('update_profile')}}">
                <input name="_method" type="hidden" value="put">
              	{{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <label>Nome</label>
                  <input type="text" class="form-control" placeholder="Nome do utilizador ..." name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" placeholder="Email do utilizador..." name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password ..." name="password">
                </div>
                  <div class="form-group">
                  <button type="submit">Alterar</button>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection