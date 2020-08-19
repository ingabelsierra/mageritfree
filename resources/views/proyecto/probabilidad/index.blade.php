@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Recuerda que
                        </div>
                        <div class="panel-body">
                            <p>La probabilidad de ocurrencia con la que cuenta una amenaza para su materialización completa, que en muchos casos se calcula como ARO (Annual Rate of Ocurrance), cuyas unidades consta del número de ocurrencias sobre un año.</p>
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

			{!!Form::open(array('url'=>'proyecto/probabilidad','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            
            
              <div class="form-group">
                  <label >Probabilidad o frecuencia de la amenaza</label>
                   <input type="text" name="aro" class="form-control" >
                
              </div>
            
              <div class="form-group">
            	<label >Amenaza</label>
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
   
    <h3>Probabilidades de las Amenazas</h3>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
                                <th>Amenaza</th>
				<th>Probabilidad</th>
				<th>Editar</th>
                                <th>Eliminar</th>
				</thead>
                    @foreach ($probabilidad as $inf)
				    <tr>
					@foreach ($amenaza as $ame)
                                        @if ($ame->idamenaza === $inf->amenaza_idamenaza) 
                                        <td>{{$ame->descripcion}}</td>
                                        @endif
                                        @endforeach
					<td>{{ $inf->aro}}</td>
				
					
                                        
				    <td>
					<a href="{{URL::action('ProbabilidadController@edit',$inf->idprobabilidad)}}"><button class="btn btn-outline btn-primary">Editar</button></a>
				    </td>
                                    
                                      <td>
						{!! Form::open(['route' => ['probabilidad.destroy', $inf->idprobabilidad], 'method' => 'DELETE']) !!}
							<button class="btn btn-outline btn-danger">
								Eliminar
							</button>							
						{!! Form::close() !!}
					
                                    
                                    </td>
					
					</tr>
					@endforeach
			</table>
		</div>
		{{$probabilidad->render()}}
	</div>
</div>

@stop