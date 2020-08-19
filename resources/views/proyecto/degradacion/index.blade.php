@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Recuerda que
                        </div>
                        <div class="panel-body">
                            <p>La Degradación es la pérdida de valor de una activo debido a la materialización de una amenaza . </p>
                        </div>
                       
                    </div>
      
             
                <!-- /.col-lg-12 -->
            </div>

<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'proyecto/degradacion','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            
            
               <div class="form-group">
            	 <label >Degradación de la Amenaza</label>
                 <input type="range" min="0" max="100" list="tickmarks" name="porcentaje" class="form-control"  value="0" >
                 <datalist id="tickmarks">
                 <option value="0" label="0%">
                 <option value="10">
                 <option value="20">
                 <option value="30">
                 <option value="40">
                 <option value="50" label="50%">
                 <option value="60">
                 <option value="70">
                 <option value="80">
                 <option value="90">
                 <option value="100" label="100%">
                </datalist>
                 
             
                  
            	
            </div>
            
              <div class="form-group">
            	<label for="amenaza_idamenaza">Amenaza</label>
                <input type="text" list="amenaza" name="amenaza_idamenaza" class="form-control" >
                <datalist id="amenaza">
                        @foreach ($amenaza as $am)
                   <option label="{{ $am->descripcion}}" value="{{ $am->idamenaza}}">
                  
                          @endforeach               
                </datalist>
            </div>
			
			 
        
            <div class="form-group">
            	<button class="btn btn-outline btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-outline btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>

<div class="row">
   
    <h3>Degradación de las Amenazas</h3>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
                                <th>Amenaza</th>
				<th>Porcentaje</th>
				<th>Editar</th>
                                <th>Eliminar</th>
				</thead>
                    @foreach ($degradacion as $inf)
				    <tr>
					@foreach ($amenaza as $ame)
                                        @if ($ame->idamenaza === $inf->amenaza_idamenaza) 
                                        <td>{{$ame->descripcion}}</td>
                                        @endif
                                        @endforeach
                                        
					<td>{{ $inf->porcentaje}}</td>
					
					
                                        
				    <td>
					<a href="{{URL::action('DegradacionController@edit',$inf->iddegradacion)}}"><button class="btn btn-outline btn-primary">Editar</button></a>
				    </td>
                                    
                                      <td>
						{!! Form::open(['route' => ['degradacion.destroy', $inf->iddegradacion], 'method' => 'DELETE']) !!}
							<button class="btn btn-outline btn-danger">
								Eliminar
							</button>							
						{!! Form::close() !!}
					
                                    
                                    </td>
					
					</tr>
					@endforeach
			</table>
		</div>
		{{$degradacion->render()}}
               
	</div>
</div>


@stop