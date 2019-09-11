@extends('menu')

@section('content')

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
				<div class="col-md-6">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Bordered Table</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<table class="table table-bordered">
								<tr>
									<th style="width: 10px">#</th>
									<th>Cliente</th>
									<th>Hora</th>
									<th>Quantidade</th>
									<th>Estado</th>
									<th style="width: 40px"></th>
								</tr>
								@foreach($marcacoes as $marcacao)
								<tr>
									<td>{{ $marcacao->id }}</td>
									<td>{{ $marcacao->cliente }}</td>
									<td>{{ $marcacao->hora_data }}</td>
									<td>{{ $marcacao->quantidade }}</td>
									<td>
										@if($marcacao->estado == 0)
										Não tratado
										@else
										Tratado
										@endif
									</td>
									<td><a href="{{ route('abrir_marcacao', $marcacao->id) }}">Abrir</a></td>
								</tr>
								@endforeach
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
  @endsection