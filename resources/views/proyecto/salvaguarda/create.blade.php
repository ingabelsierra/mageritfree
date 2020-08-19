@extends ('layouts.admin')
@section ('contenido')


<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                         <div class="panel-heading">
                            
                            <p class="text-danger">Información relacionada a la nueva salvaguarda</p>
                        </div>
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

			{!!Form::open(array('url'=>'proyecto/salvaguarda','method'=>'POST','autocomplete'=>'off'))!!}
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
            	<label >Amenaza</label>
                <input type="text" list="ame" name="amenaza_idamenaza" class="form-control" >
                 <datalist id="ame">
                        @foreach ($amenaza as $am)
                        <option label="{{ $am->descripcion}}" value="{{ $am->idamenaza}}">
                  
                          @endforeach   
                       </datalist>
             
            </div>
              
              <div class="form-group">
            	<label for="descripcion">Nombre de la Salvaguarda</label>
            	<input type="text" name="descripcion" class="form-control" >
            </div>
			
			 <div class="form-group">
            	                
                <label >Catalogo Magerit</label>
                 <input type="text" list="cat" name="idsalvaguarda_catalogo" class="form-control" >
                <datalist id="cat">
                   @foreach ($catalogo as $cat)
                    <option label="{{ $cat->descripcion}}" value="{{ $cat->idsalvaguarda_catalogo}}">
                    @endforeach 
                </datalist>
            </div>
           
            <div class="form-group">
            	                
                <label >Descripción Magerit</label>
                 <input type="text" list="desc" name="iddescripcion_salvaguarda" class="form-control" >
                <datalist id="desc">
                   @foreach ($catalogodes as $catd)
                    <option label="{{ $catd->codigo}} {{ $catd->descripcion}}" value="{{ $catd->iddescripcion_salvaguarda}}">
                    @endforeach 
                      
                </datalist>
            </div>
         
	 <div class="form-group">
            	<label for="tipo">Tipo</label>
            	 <select class="form-control" name="tipo">
                      <option value="0">Eficacia sobre Impacto</option>
                      <option value="1">Eficacia sobre Probabilidad</option>
                                                
                </select>
            </div>		
		
			
					
		
			
            <div class="form-group">
            	<button class="btn btn-outline btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-outline btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection