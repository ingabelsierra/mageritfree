@extends ('layouts.admin')
@section ('contenido')

<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                          <div class="panel-heading">
                            
                            <p class="text-danger">Editar datos de la Amenaza</p>
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
      
       
	     <form class="form" role="form" method="POST" action="{{ url('/proyecto/amenaza/'. $amenaza->idamenaza) }}">

        <input type="hidden" name="_method" value="patch">

    {{ csrf_field() }}

    <!-- name Form Input -->

       <div class="form-group{{ $errors->has('activo_idactivo') ? ' has-error' : '' }}">

            <label class="control-label">Activo</label>
            <input type="text" list="activo" class="form-control" name="activo_idactivo" value="{{ $amenaza->activo_idactivo }}">
            <datalist id="activo">
                        @foreach ($activo as $act)
                   <option label="{{ $act->nombre}}" value="{{ $act->idactivo}}">
                  
                          @endforeach               
                </datalist>
            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
    
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Nombre de la Amenaza</label>

            <input type="text" class="form-control" name="descripcion" value="{{ $amenaza->descripcion }}">

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
        
    
    <div class="form-group{{ $errors->has('idamenaza_catalogo') ? ' has-error' : '' }}">

            <label class="control-label">Catalogo Magerit</label>

            
            <input type="textarea" list="cat" class="form-control" name="idamenaza_catalogo" value="{{ $amenaza->idamenaza_catalogo }}">
            <datalist id="cat">
                   <option label="[N] - Desastres naturales" value="1">
                   <option label="[I] - De origen industrial" value="2">
                   <option label="[E] - Errores y fallos no intencionados" value="3">
                   <option label="[A] - Ataques intencionados" value="4">
                                        
                </datalist>
            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
    
     <div class="form-group{{ $errors->has('iddescripcion_amenaza') ? ' has-error' : '' }}">

            <label class="control-label">Descripción Magerit</label>

            
            <input type="textarea" list="des" class="form-control" name="iddescripcion_amenaza" value="{{ $amenaza->iddescripcion_amenaza }}">
            <datalist id="des">
                   <option label="[N.1] - Fuego" value="1">
                   <option label="[N.2] - Daños por agua" value="2">
                   <option label="[N.*] - Desastres naturales" value="3">
                   <option label="[I.1] - Fuego" value="4">
                   <option label="[I.2] - Daños por agua" value="5">
                   <option label="[I.*]- Desastres industriales" value="6">
                   <option label="[I.3] - Contaminación mecánica" value="7">
                   <option label="[I.4] - Contaminación electromagnética" value="8">
                   <option label="[I.5] - Avería de origen físico o lógico" value="9">
                   <option label="[I.6] - Corte del suministro eléctrico" value="10">
                   <option label="[I.7] - Condiciones inadecuadas de temperatura o humedad" value="11">
                   <option label="[I.8] - Fallo de servicios de comunicaciones" value="12">
                   <option label="[I.9] - Interrupción de otros servicios y suministros esenciales" value="13">
                   <option label="[I.10] - Degradación de los soportes de almacenamiento de la información" value="14">
                   <option label="[I.11] - Emanaciones electromagnéticas" value="15">
                   <option label="[E.1] - Errores de los usuarios" value="16">
                   <option label="[E.2] - Errores del administrador" value="17">
                   <option label="[E.3] - Errores de monitorización (log)" value="18">
                   <option label="[E.4] - Errores de configuración" value="19">
                   <option label="[E.7] - Deficiencias en la organización" value="20">
                   <option label="[E.8] - Difusión de software dañino" value="21">
                   <option label="[E.9] - Errores de [re-]encaminamiento" value="22">
                   <option label="[E.10] - Errores de secuencia" value="23">
                    <option label="[E.14] - Escapes de información" value="24">
                   <option label="[E.15] - Alteración accidental de la información" value="25">
                   <option label="[E.18] - Destrucción de información" value="26">
                   <option label="[E.19] - Fugas de información" value="27">
                   <option label="[E.21] - Errores de mantenimiento / actualización de programas (software)" value="28">
                   <option label="[E.23] - Errores de mantenimiento / actualización de equipos (hardware)" value="29">
                   <option label="[E.24] - Caída del sistema por agotamiento de recursos" value="30">
                   <option label="[E.25] - Pérdida de equipos" value="31">
                   <option label="[E.28] - Indisponibilidad del personal" value="32">
                   <option label="[A.3] - Manipulación de los registros de actividad (log)" value="33">
                   <option label="[A.4] - Manipulación de la configuración" value="34">
                   <option label="[A.5] - Suplantación de la identidad del usuario" value="35">
                   <option label="[A.6] - Abuso de privilegios de acceso" value="36">
                   <option label="[A.7] - Uso no previsto" value="37">
                   <option label="[A.8] - Difusión de software dañino" value="38">
                   <option label="[A.9] - Re-encaminamiento de mensajes" value="39">
                   <option label="[A.10] - Alteración de secuencia" value="40">
                   <option label="[A.11] - Acceso no autorizado" value="41">
                   <option label="[A.12] - Análisis de tráfico" value="42">
                   <option label="[A.13] - Repudio" value="43">
                    <option label="[A.14] - Interceptación de información (escucha)" value="44">
                   <option label="[A.15] - Modificación deliberada de la información" value="45">
                   <option label="[A.18] - Destrucción de información" value="46">
                   <option label="[A.19] - Divulgación de información" value="47">
                   <option label="[A.22] - Manipulación de programas" value="48">
                   <option label="[A.23] - Manipulación de los equipos" value="49">
                   <option label="[A.24] - Denegación de servicio" value="50">
                   <option label="[A.25] - Robo" value="51">
                   <option label="[A.26] - Ataque destructivo" value="52">
                   <option label="[A.27] - Ocupación enemiga" value="53">  
                   <option label="[A.28] - Indisponibilidad del personal" value="54"> 
                   <option label="[A.29] - Extorsión" value="55"> 
                   <option label="[A.30] - Ingeniería social (picaresca)" value="56"> 
                </datalist>
            
            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
     
    
    
   
     
       
        <div class="form-group">

        <button type="submit" class="btn btn-outline btn-primary">Actualizar Datos</button>

        </div>

    </form>
            
		</div>
	</div>
@endsection