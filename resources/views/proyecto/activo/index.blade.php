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
                                <li><a href="#profile" data-toggle="tab">Descripcion</a>
                                </li>
                              
                                <li><a href="#settings" data-toggle="tab">Catalogo</a>
                                </li>
                                 <li><a href="#des" data-toggle="tab">Descripcion</a>
                                </li>
                                <li><a href="#dominio" data-toggle="tab">Dominio</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <h4>Nombre del Activo</h4>
                                    <p>En este campo se muestra el nombre del activo que a su vez se asocia con un número o id</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Descripción del Activo</h4>
                                    <p>Se muestra una breve descripción, detalles técnicos ó caracteristicas del activo.</p>
                                </div>
                             
                                <div class="tab-pane fade" id="settings">
                                    <h4>Catalogo Magerit</h4>
                                    <p>En este campo se muestra el catalogo sugerido en el libro II de la metodología</p>
                                </div>
                                 <div class="tab-pane fade" id="des">
                                    <h4>Descripción Magerit</h4>
                                    <p>En este campo se muestra la descripción del catalogo sugerido en el libro II de la metodología</p>
                                </div>
                                 <div class="tab-pane fade" id="dominio">
                                    <h4>Dominio del Activo</h4>
                                    <p>En este campo se muestra el dominio en el cual se encuentra el activo en mención</p>
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
 				<th>Descripción</th>
                                <th>Catalogo</th>
                                <th>Descripción Magerit</th>
                                <th>Dominio</th>
                                
				<th>Editar</th>
                                <th>Eliminar</th>
				</thead>

           
                    @foreach ($activo as $inf)
                    
                                                       
                    
                                     
                                     
				    <tr>
					
					<td>{{ $inf->idactivo}}</td>
					<td>{{ $inf->nombre}}</td>
					<td>{{ $inf->descripcion}}</td>
					
                                        @foreach ($activocatalogo as $ac)
                                        @if ($ac->idactivo_catalogo === $inf->idactivo_catalogo) 
                                        <td>{{$ac->codigo}} - {{$ac->descripcion}}</td>
                                        @endif
                                        @endforeach
                                        
                                        @foreach ($descripcionactivo as $da)
                                        @if ($da->iddescripcion_activo === $inf->iddescripcion_activo) 
                                        <td>{{$da->codigo}} - {{$da->descripcion}}</td>
                                        @endif
                                        @endforeach
                                        
                                        @foreach ($dominio as $dom)
                                        @if ($dom->iddominio === $inf->dominio_iddominio) 
                                        <td>{{$dom->nombre}}</td>
                                        @endif
                                        @endforeach
                                        
                                        
                                        

				      <td>
					<a href="{{URL::action('ActivoController@edit',$inf->idactivo)}}"><button class="btn btn-outline btn-primary">Editar</button></a>
				      </td>
                                    
                                      <td>
						{!! Form::open(['route' => ['activo.destroy', $inf->idactivo], 'method' => 'DELETE']) !!}
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
               <h2 class="page-header" > <a href="activo/create" ><button class="btn btn-outline btn-primary">Nuevo Activo</button></a></h2>
               </div>
            </div>
		{{$activo->render()}}
	</div>

</div>
@stop