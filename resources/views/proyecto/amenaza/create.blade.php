@extends ('layouts.admin')
@section ('contenido')

<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                          <div class="panel-heading">
                            
                            <p class="text-danger">Información relacionada a la nueva Amenaza</p>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Activo</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Nombre</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Catalogo</a>
                                </li>
                                <li><a href="#des" data-toggle="tab">Descripción</a>
                                </li>
                                <li><a href="#tipo" data-toggle="tab">Tipo</a>
                                </li>
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <h4>Lista de Activos</h4>
                                    <p>Se escoge el activo dentro de la lista establecida por la aplicacion</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Nombre de la Amenaza</h4>
                                    <p>En este input se captura el nombre de la amenaza.</p>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Catalogo Magerit</h4>
                                    <p>Es la lista codificada sugerida en el libro 2 de la metodología</p>
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
                                    <h4>Tipo de Amenaza</h4>
                                    <p>Se escoge el tipo de amenaza probabilidad o degradacion</p>
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

	{!!Form::open(array('url'=>'proyecto/amenaza','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            
           <div class="form-group">
            	<label for="propietario">Activo</label>
                <input type="text" list="activo" name="activo_idactivo"  class="form-control input-lg" autocomplete="off"  />
              
                 <datalist id="activo">
                        @foreach ($activo as $act)
                   <option label="{{ $act->nombre}}" value="{{ $act->idactivo}}">
                  
                          @endforeach               
                </datalist>
                
           </div>
            
         
			
           <div class="form-group">
            	<label for="descripcion">Nombre de la Amenaza</label>
            	<input type="text" name="descripcion" class="form-control" >
           </div>
           
          			
	   <div class="form-group">
            
              <label >Catalogo Magerit</label>
              <input type="text" list="cat" name="idamenaza_catalogo" class="form-control" >
              <datalist id="cat">
                   @foreach ($catalogo as $cat)
                    <option label="{{ $cat->codigo}} {{ $cat->descripcion}}" value="{{ $cat->idamenaza_catalogo}}">
                    @endforeach 
                                        
                </datalist>
            </div>
            
            <div class="form-group">
            
              <label >Descripción Magerit</label>
              <input type="text" list="desc" name="iddescripcion_amenaza" class="form-control" >
              <datalist id="desc">
                     @foreach ($catalogodes as $catd)
                    <option label="{{ $catd->codigo}} {{ $catd->descripcion}}" value="{{ $catd->iddescripcion_amenaza}}">
                    @endforeach 
                </datalist>
            </div> 
			
		            
            <div class="form-group">
            	<label for="tipo">Tipo de Amenaza</label>
            	 <select class="form-control" name="tipo">
                      <option value="0">Probabilidad</option>
                      <option value="1">Degradación</option>
                                                
                </select>
            </div>
			
			
					
            <div class="form-group">
            	<button class="btn btn-outline btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-outline btn-danger" type="reset">Cancelar</button>
            </div>

	{!!Form::close()!!}		
            
	</div>
</div>

 
@stop