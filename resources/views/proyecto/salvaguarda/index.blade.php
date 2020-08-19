@extends ('layouts.admin')
@section ('contenido')

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Descripción</a>
                                </li>
                              
                                <li><a href="#messages" data-toggle="tab">Catalogo</a>
                                </li>
                                <li><a href="#des" data-toggle="tab">Descripción</a>
                                </li>
                                <li><a href="#tipo" data-toggle="tab">Activo</a>
                                </li>
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <h4>Descripción de la Salvaguarda</h4>
                                    <p>En esta columna se muestra la descripción de la salvaguarda creada con su respectivo id</p>
                                </div>
                            
                                <div class="tab-pane fade" id="messages">
                                    <h4>Catalogo Magerit</h4>
                                    <p>Es la lista codificada sugerida en el libro 2 de la metodología</p>
                                    </div>
                            
                                <div class="tab-pane fade" id="des">
                                    <h4>Descripción Magerit</h4>
                                    <p>Es la lista con las descripciones de cada uno de los items del catalogo sugerida en el libro 2 de la metodología</p>
                               </div>
                                 <div class="tab-pane fade" id="tipo">
                                    <h4>Activo</h4>
                                    <p>En esta columna se muestra el activo asociado a dicha salvaguarda</p>
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
				<th>Descripción</th>
				<th>Catalogo</th>
                                <th>Descripción Magerit</th>
 				<th>Activo</th>
                              	<th>Editar</th>
                                <th>Eliminar</th>
				</thead>
                    @foreach ($salvaguarda as $inf)
				    <tr>
					
					<td>{{ $inf->descripcion}}</td>
                                       
                                        @foreach ($salvaguardacatalogo as $sa)
                                        @if ($sa->idsalvaguarda_catalogo === $inf->idsalvaguarda_catalogo) 
                                        <td>{{$sa->descripcion}}</td>
                                        @endif
                                        @endforeach
                                        
                                        @foreach ($descripcionsalvaguarda as $ds)
                                        @if ($ds->iddescripcion_salvaguarda === $inf->iddescripcion_salvaguarda) 
                                        <td>{{$ds->codigo}} - {{$ds->descripcion}}</td>
                                        @endif
                                        @endforeach
                                        
                                        @foreach ($activo as $ac)
                                        @if ($ac->idactivo === $inf->activo_idactivo) 
                                        <td>{{$ac->nombre}}</td>
                                        @endif
                                        @endforeach
					
					
                                       
					
				    <td>
					<a href="{{URL::action('SalvaguardaController@edit',$inf->idsalvaguarda)}}"><button class="btn btn-outline btn-warning">Editar</button></a>
				    </td>
                                    
                                      <td>
						{!! Form::open(['route' => ['salvaguarda.destroy', $inf->idsalvaguarda], 'method' => 'DELETE']) !!}
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
              <div class="col-lg-4">
                   <!-- -->
		  <h2 class="page-header"> <a href="salvaguarda/create"><button class="btn btn-outline btn-primary">Agregar Salvaguarda</button></a></h2>
                </div>  
       </div>  
		{{$salvaguarda->render()}}
              
                
	</div>
    
     
</div>



@stop