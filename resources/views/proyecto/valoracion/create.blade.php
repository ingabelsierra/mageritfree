@extends ('layouts.admin')
@section ('contenido')

<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                            <p class="text-danger">Información relacionada a la valoración del Activo</p>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Activo</a>
                                </li>
                              
                                 <li><a href="#des" data-toggle="tab">Descripción</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Valoración</a>
                                </li>
                                <li><a href="#tipo" data-toggle="tab">Criterio</a>
                                </li>
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <h4>Lista de Activos</h4>
                                    <p>Se escoge el activo dentro de la lista establecida por la aplicacion</p>
                                </div>
                             
                                <div class="tab-pane fade" id="messages">
                                    <h4>Valoración del Activo</h4>
                                    <p>Se digita el valor en porcentaje</p>
                                    </div>
                            
                                <div class="tab-pane fade" id="des">
                                    <h4>Descripción</h4>
                                    <p>Se realiza una breve descripción acerca de la valoración del activo</p>
                               </div>
                                 <div class="tab-pane fade" id="tipo">
                                    <h4>Citerio</h4>
                                    <p>Se escoge el criterio según Magerit</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                
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

			{!!Form::open(array('url'=>'proyecto/valoracion','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            
             <div class="form-group">
            	<label for="activo_idactivo">Activo</label>
                <input type="text" list="activo" name="activo_idactivo" class="form-control" >
                <datalist id="activo">
                        @foreach ($activo as $act)
                   <option label="{{ $act->nombre}}" value="{{ $act->idactivo}}">
                  
                          @endforeach               
                </datalist>
            </div>
            
                 
          
			
	    <div class="form-group">
            	<label for="valoracion">Valoracion</label>
            	<input type="text" name="valoracion" class="form-control" >
            </div>
           
         
	  	
					
		
			
            <div class="form-group">
            	<button class="btn btn-outline btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-outline btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection