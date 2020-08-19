@extends ('layouts.admin')
@section ('contenido')


<div class="row">
    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Recuerda que
                        </div>
                        <div class="panel-body">
                            <p>La valoración es la cualidad estimable (en muchos casos, costo/precio) que posee algún bien o activo . El valor se define por las dimensiones de confidencialidad, disponibilidad, integridad, autenticidad y trazabilidad; también se define el valor por según unos criterios..</p>
                        </div>
                     
                    </div>
      
             
                <!-- /.col-lg-12 -->
            </div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
                                <th>Activo</th>
                                <th>Criterio</th>
                                <th>Valoración %</th>
				<th>Editar</th>
                                <th>Eliminar</th>
				</thead>
                    @foreach ($valoracion as $inf)
				    <tr>
					
				        @foreach ($activo as $act)
                                        @if ($act->idactivo === $inf->activo_idactivo) 
                                        <td>{{$act->nombre}}</td>
                                        @endif
                                        @endforeach
					
                                        <td>{{ $inf->criterio}}</td>
                                          
                                        <td>{{ $inf->valoracion}}</td>
                                      
                                                                                  
                                        
					
				        <td>
					  <a href="{{URL::action('ValoracionController@edit',$inf->idvaloracion)}}"><button class="btn btn-outline btn-warning">Editar</button></a>
				        </td>
                                    
                                        <td>
						{!! Form::open(['route' => ['valoracion.destroy', $inf->idvaloracion], 'method' => 'DELETE']) !!}
							<button class="btn btn-outline btn-danger">
								Eliminar
							</button>							
						{!! Form::close() !!}
					
                                    
                                        </td>
					
					</tr>
					@endforeach
			</table>
		</div>
		{{$valoracion->render()}}
	</div>
       <div class="col-lg-4">
                   <!-- -->
				   <h2 class="page-header"><a href="valoracion/create"><button class="btn btn-outline btn-primary">Agrega una nueva Valoracion</button></a></h2>
                </div>
</div>



@stop