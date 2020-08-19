@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Recuerda que
                        </div>
                        <div class="panel-body">
                            <p>La Eficacia sobre Impacto es el grado o porcentaje en el cual una salvaguarda reduce la degradación que ocasionaría una amenaza al materializarse sobre un activo.</p>
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

			{!!Form::open(array('url'=>'proyecto/eficaciasobreimpacto','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            
            
               <div class="form-group">
                 <label for="salvaguarda_idsalvaguarda">Eficacia</label>
            	 <input type="range" list="tickmarks" name="eficacia" class="form-control" value="0">
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
            	<label for="salvaguarda_idsalvaguarda">Salvaguarda</label>
                <input type="text" list="salvaguarda"name="salvaguarda_idsalvaguarda" class="form-control" >
                 <datalist id="salvaguarda">
                        @foreach ($salvaguarda as $salv)
                   <option label="{{ $salv->descripcion}}" value="{{ $salv->idsalvaguarda}}">
                  
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
   
    <h3>Tabla de Datos Eficacia/Impacto</h3>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
                                <th>Salvaguarda</th>
				<th>Eficacia</th>
				<th>Editar</th>
                                <th>Eliminar</th>
				</thead>
                    @foreach ($informacion as $inf)
				    <tr>
					@foreach ($salvaguarda as $sa)
                                        @if ($sa->idsalvaguarda === $inf->salvaguarda_idsalvaguarda) 
                                        <td>{{$sa->descripcion}}</td>
                                        @endif
                                        @endforeach
					<td>{{ $inf->eficacia}}</td>
					
					
                                        
				    <td>
					<a href="{{URL::action('EficaciasobreimpactoController@edit',$inf->ideficacia_sobre_impacto)}}"><button class="btn btn-outline btn-primary">Editar</button></a>
				    </td>
                                    
                                      <td>
						{!! Form::open(['route' => ['eficaciasobreimpacto.destroy', $inf->ideficacia_sobre_impacto], 'method' => 'DELETE']) !!}
							<button class="btn btn-outline btn-danger">
								Eliminar
							</button>							
						{!! Form::close() !!}
					
                                    
                                    </td>
					
					</tr>
					@endforeach
			</table>
		</div>
		{{$informacion->render()}}
	</div>
</div>
@stop