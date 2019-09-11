@extends('menu')

@section('content')
    <section class="content-header">
      <h1>
        Mostrar marcação
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Mostrar</a></li>
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
              
                <!-- text input -->
                <div class="form-group">
                  <label>Cliente</label>
                  {{ $marcacao->cliente }}
                </div>
                <div class="form-group">
                  <label>Número de Telefone</label>
                  {{ $marcacao->telefone }}
                </div>
                <div class="form-group">
                  <label>Local da Entrega</label>
                  {{ $marcacao->entrega }}
                </div>
                <div class="form-group">
                  <label>Hora e Data</label>
                  {{ $marcacao->hora_data }}
                </div>
                <div class="form-group">
                  <label>Quantidade</label>
                  {{ $marcacao->quantidade }}
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Observações</label>
                  {{ $marcacao->notas }}
                </div>
                <div class="form-group">
                  <label>Estado</label>
                 @if($marcacao->estado == 0)
                    Não tratado
                    @else
                    Tratado
                    @endif
                </div>
                
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
@endsection