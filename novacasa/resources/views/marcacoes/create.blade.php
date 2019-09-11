@extends('menu')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Adicionar Marcação
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Adicionar Marcação</a></li>
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
              <form role="form" method="post" action="{{route('add_marcacao')}}">
              	{{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <label>Cliente</label>
                  <input type="text" class="form-control" placeholder="Nome do cliente ..." name="nome">
                </div>
                <div class="form-group">
                  <label>Número de Telefone</label>
                  <input type="text" class="form-control" placeholder="Número de telefone ..." name="telefone">
                </div>
                <div class="form-group">
                  <label>Local da Entrega</label>
                  <input type="text" class="form-control" placeholder="Local da entrega ..." name="local">
                </div>
                <div class="form-group">
                  <label>Hora e Data</label>
                  <input type="text" class="form-control" placeholder="Hora e data ..." name="hora">
                </div>
                <div class="form-group">
                  <label>Quantidade</label>
                  <input type="text" class="form-control" placeholder="Quantidade ..." name="quantidade">
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Observações</label>
                  <textarea class="form-control" rows="3" placeholder="observações ..." name="observacoes"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit">enviar</button>
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