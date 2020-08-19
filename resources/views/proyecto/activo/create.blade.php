@extends ('layouts.admin')
@section ('contenido')

<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                            <p class="text-danger">Información relacionada al nuevo Activo</p>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Nombre</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Descripcion</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Catalogo</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">Propietario</a>
                                </li>
                                <li><a href="#dominio" data-toggle="tab">Dominio</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <h4>Nombre del Activo</h4>
                                    <p>Se escoge el nombre del activo dentro de una lista establecida por la aplicacion</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Descripción del Activo</h4>
                                    <p>En este campo se digita una breve descripción del activo, tales como detalles técnicos como marca,modelo,velocidad del procesador si es de tipo hardware.</p>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Catalogo Magerit</h4>
                                    <p>Es la lista codificada sugerida en el libro 2 de la metodología</p>
                                    <h4>Descripción Magerit</h4>
                                    <p>Es la lista con las descripciones de cada uno de los items del catalogo sugerida en el libro 2 de la metodología</p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Propietario del Activo</h4>
                                    <p>En este campo se escoge el propietario del activo ya sea la organización como tal o la persona encargada directamente de dicho activo</p>
                                </div>
                                 <div class="tab-pane fade" id="dominio">
                                    <h4>Dominio del Activo</h4>
                                    <p>En este campo se escoge el dominio en el cual se encuentra el activo en mención</p>
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

			{!!Form::open(array('url'=>'proyecto/activo','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
			
			
              <div class="form-group">
            	<label for="nombre">Nombre</label>
                
                <input type="text" list="activos" name="nombre" class="form-control" >
                <datalist id="activos">
                <option >Computador Portátil</option>  
                    <option >Computador de Escritorio</option>
                    <option >Servidor</option>
                    <option >Impresora</option>
                    <option >Disco Duro portátil</option>
                    <option >Disco Virtual</option>
                    <option >Cuenta de Correo Electrónico</option>
                    <option >Memoria USB</option>
                    <option >Router (Conexión a Internet)</option>
                    <option >Telefono IP</option>
                    <option >Software Contable</option> 
                                     
                </datalist>
            			
            </div>
            
             
            <div class="form-group">
            	<label for="descripcion">Descripción del Activo</label>
            	<input type="text" name="descripcion" class="form-control" >
            </div>
            
            <div class="form-group">
                <label >Catalogo Magerit</label>
                 <input type="text" list="cat" name="idactivo_catalogo" class="form-control" >
                <datalist id="cat">
                    @foreach ($catalogo as $cat)
                    <option label="{{ $cat->codigo}} {{ $cat->descripcion}}" value="{{ $cat->idactivo_catalogo}}">
                    @endforeach     
                      
                </datalist>
                
                 <label >Descripción Magerit</label>
                 <input type="text" list="catdes" name="iddescripcion_activo" class="form-control" >
                <datalist id="catdes">
                    @foreach ($catalogodes as $catd)
                    <option label="{{ $catd->codigo}} {{ $catd->descripcion}}" value="{{ $catd->iddescripcion_activo}}">
                    @endforeach 
                     
                </datalist>
                  
              
            </div>
            
         
			
			
			
			<div class="form-group">
            	<label for="propietario">Propietario</label>
            	 <select class="form-control" name="propietario">
                      <option >IACA</option>
                      <option >Tony Gonzalez</option>
                      <option >Alberto Sierra</option>
                      <option >Tania Sierra</option>
                      <option >Liceth Hernandez</option>
                      
                                                
                </select>
            </div>
			
			<div class="form-group">
            	<label for="dominio_iddominio">Dominio</label>
            
                
                <input type="text" list="misdatos" name="dominio_iddominio" class="form-control" >
                <datalist id="misdatos">
                    @foreach ($dominio as $dom)
                    <option label="{{ $dom->nombre}}" value="{{ $dom->iddominio}}">
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


         
@stop