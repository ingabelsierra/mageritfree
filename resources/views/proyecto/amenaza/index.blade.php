@extends ('layouts.admin')
@section ('contenido')

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Nombre</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Catalogo</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Descripción</a>
                                </li>
                                <li><a href="#tipo" data-toggle="tab">Activo</a>
                                </li>
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <h4>Nombre de la Amenaza</h4>
                                    <p>En este campo se muestra el nombre descriptivo de la amenaza y también se asocia con un número o id</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Catalogo Magerit</h4>
                                    <p>Es la lista codificada sugerida en el libro 2 de la metodología.</p>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Descripción Magerit</h4>
                                    <p>Es la lista codificada con la descripción de la amenaza sugerida en el libro 2 de la metodología.</p>
                                    </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Propietario del Activo</h4>
                                    <p>En este input se escoge el propietario del activo ya sea la organización como tal o la persona encargada directamente de dicho activo</p>
                                </div>
                                <div class="tab-pane fade" id="des">
                                    <h4>Descripción Magerit</h4>
                                    <p>Es la lista con las descripciones de cada uno de los items del catalogo sugerida en el libro 2 de la metodología</p>
                               </div>
                                 <div class="tab-pane fade" id="tipo">
                                    <h4>Activo</h4>
                                    <p>En esta columna se observa el activo relacionado a la amenaza</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                
</div>



<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
				<th>id</th>
				<th>Nombre</th>
                                <th>Catalogo</th>
                                <th>Descripcion</th>
                                <th>Activo</th>
                                
				<th>Editar</th>
                                <th>Eliminar</th>
				</thead>
                    @foreach ($amenaza as $inf)
				    <tr>
					
				        <td>{{ $inf->idamenaza}}</td>
					<td>{{ $inf->descripcion}}</td>
                                        
                                        @foreach ($amenazacatalogo as $acat)
                                        @if ($acat->idamenaza_catalogo === $inf->idamenaza_catalogo) 
                                        <td>{{$acat->codigo}} - {{$acat->descripcion}}</td>
                                        @endif
                                        @endforeach
                                        
                                        
                                        @foreach ($descripcionamenaza as $da)
                                        @if ($da->iddescripcion_amenaza === $inf->iddescripcion_amenaza) 
                                        <td>{{$da->codigo}} - {{$da->descripcion}}</td>
                                        @endif
                                        @endforeach
                                        
                                        
                                                                  
                                        
                                        @foreach ($activo as $act)
                                        @if ($act->idactivo === $inf->activo_idactivo) 
                                        <td>{{$act->nombre}}</td>
                                        @endif
                                        @endforeach
                                      
                                       
                                        
                                        
					
				    <td>
					<a href="{{URL::action('AmenazaController@edit',$inf->idamenaza)}}"><button class="btn btn-outline btn-warning">Editar Datos</button></a>
				    </td>
                                    
                                      <td>
						{!! Form::open(['route' => ['amenaza.destroy', $inf->idamenaza], 'method' => 'DELETE']) !!}
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
                <div class="col-lg-12">
                   <!-- -->
				   <h2 class="page-header"><a href="amenaza/create"><button class="btn btn-outline btn-primary">Nueva Amenaza</button></a></h2>
                </div>
                <!-- /.col-lg-12 -->
              </div>
		{{$amenaza->render()}}
	</div>
</div>



@stop