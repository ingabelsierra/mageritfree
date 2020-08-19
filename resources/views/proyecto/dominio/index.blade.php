@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Recuerda que
                        </div>
                        <div class="panel-body">
                            <p>El Dominio es la sección donde se define el subconjunto del proyecto a ser analizado; es aquí donde el usuario ingresa la información pertinente a diferentes sectores o espacios del proyecto que necesitan ser analizados, por ejemplo, el dominio de Mesa de Ayuda, el dominio del Area de Finanzas. Esta entidad es constituida por ID, código del dominio, nombre del dominio, descripción del dominio y, finalmente, el ID del proyecto. El ID del proyecto, como mencionado anteriormente, se escoge en Dominio para relacionarlo con el proyecto pertinente.</p>
                        </div>
                     
                    </div>
      
             
                <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
				<th>id</th>
				<th>Nombre</th>
 				<th>Descripción</th>
				<th>Editar Datos</th>
                                <th>Eliminar</th>
				</thead>
                    @foreach ($informacion as $inf)
				    <tr>
					<td>{{ $inf->iddominio}}</td>
					<td>{{ $inf->nombre}}</td>
					<td>{{ $inf->descripcion}}</td>
					
				        <td>
					<a href="{{URL::action('DominioController@edit',$inf->iddominio)}}"><button class="btn btn-outline btn-warning">Editar Datos</button></a>
                                        
					</td>
                                        
                                        <td>
                                            {!! Form::open(['route' => ['dominio.destroy', $inf->iddominio], 'method' => 'DELETE']) !!}
							<button class="btn btn-outline btn-danger">
								Eliminar
							</button>							
						{!! Form::close() !!}
                                        </td>
					
					</tr>
                                      
					@endforeach
			</table>
		</div>
              <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <h2 class="page-header" > <a href="dominio/create" ><button class="btn btn-outline btn-primary">Nuevo Dominio</button></a></h2>
               </div>
            </div>
		 {{$informacion->render()}}
	</div>
</div>



@stop