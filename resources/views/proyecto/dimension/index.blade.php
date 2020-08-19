@extends ('layouts.admin')
@section ('contenido')

<div class="row">
                <div class="col-lg-12">
                   <!-- -->
				   <h1 class="page-header">Dimensiones de la Valoración</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
				<th>Codigo</th>
				<th>Nombre</th>
 				
				<th>Editar Datos</th>
				</thead>
                    @foreach ($informacion as $inf)
				    <tr>
					
					<td>{{ $inf->codigo}}</td>
					<td>{{ $inf->nombre}}</td>
				
					
				    <td><a href=""><button class="btn btn-info">Deshabilitar</button></a></td>
					
					</tr>
					@endforeach
			</table>
		</div>
		
	</div>
</div>



@stop