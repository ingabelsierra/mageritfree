@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	
    	<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                            <p class="text-danger">Editar datos del Activo</p>
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
                                    <p>En este input se captura una breve descripción del activo, tales como detalles técnicos como marca,modelo,velocidad del procesador etc..</p>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Catalogo Magerit</h4>
                                    <p>Es la lista codificada sugerida en el libro 2 de la metodología</p>
                                    <h4>Descripción Magerit</h4>
                                    <p>Es la lista con las descripciones de cada uno de los items del catalogo sugerida en el libro 2 de la metodología</p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Propietario del Activo</h4>
                                    <p>En este input se escoge el propietario del activo ya sea la organización como tal o la persona encargada directamente de dicho activo</p>
                                </div>
                                 <div class="tab-pane fade" id="dominio">
                                    <h4>Dominio del Activo</h4>
                                    <p>En este input se escoge el propietario del activo ya sea la organización como tal o la persona encargada directamente de dicho activo</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                
</div>
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
      
       
	     <form class="form" role="form" method="POST" action="{{ url('/proyecto/activo/'. $activo->idactivo) }}">

        <input type="hidden" name="_method" value="patch">

    {{ csrf_field() }}

    <!-- name Form Input -->

       
    
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Nombre</label>
                       
            <input type="text" list="activos" name="nombre" class="form-control" value="{{ $activo->nombre }}">
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
            

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
        
    
    <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">

            <label class="control-label">Descripcion del Activo</label>

            
            <input type="textarea" class="form-control" name="descripcion" value="{{ $activo->descripcion }}">

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
    
     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Catalogo Magerit</label>

            <input type="text" class="form-control" name="idactivo_catalogo" list="cat"value="{{ $activo->idactivo_catalogo }}">
            
             <datalist id="cat">
                    <option label="[essential] - Activos esenciales" value="1">
                   <option label="[arch] - Arquitectura del sistema" value="2">
                   <option label="[D] - Datos / Información" value="3">
                   <option label="[K] - Claves criptográficas" value="4">
                   <option label="[S] - Servicios" value="5">
                   <option label="[SW] - Software - Aplicaciones informáticas" value="6">
                   <option label="[HW] - Equipamiento informático (hardware)" value="7">
                   <option label="[COM] - Redes de comunicaciones" value="8">   
                   <option label="[Media] - Soportes de información" value="9">    
                   <option label="[AUX] - Equipamiento auxiliar" value="10">    
                   <option label="[L] - Instalaciones" value="11">    
                   <option label="[P] - Personal" value="12">    
                      
                </datalist>
            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
    
     <div class="form-group{{ $errors->has('iddescripcion_activo') ? ' has-error' : '' }}">

             <label class="control-label">Descripción Magerit</label>

            <input type="text" class="form-control" name="iddescripcion_activo" list="catdes"value="{{ $activo->iddescripcion_activo }}">
             <datalist id="catdes">
                    <option label="[info] - información" value="1">
                   <option label="[per] - datos de carácter personal" value="2">
                   <option label="[classified] - datos clasificados" value="3">
                   <option label="[service] - servicio" value="4">
                   <option label="[sap] - punto de acceso al servicio" value="5">
                   <option label="'[ip] - punto de interconexión" value="6">
                   <option label="[ext] - proporcionado por terceros" value="7">
                   <option label="[files] - ficheros" value="8">
                   <option label="[backup] - copias de respaldo" value="9">
                   <option label="[conf] - datos de configuración" value="10">
                   <option label="[int] - datos de gestión interna" value="11">
                   <option label="[password] - credenciales (ej. contraseñas)" value="12">
                   <option label="[auth] - datos de validación de credenciales" value="13">
                   <option label="[acl] - datos de control de acceso" value="14">
                   <option label="[log] - registro de actividad" value="15">
                   <option label="[source] - código fuente" value="16">
                   <option label="[exe] - código ejecutable" value="17">
                   <option label="[test] - datos de prueba" value="18">
                   <option label="[info] - protección de la información" value="19">
                   <option label="[com] - protección de las comunicaciones" value="20">
                   <option label="[disk] - cifrado de soportes de información" value="21">
                   <option label="[x509] - certificados de clave pública" value="22">
                   <option label="[anon] - anónimo (sin requerir identificación del usuario)" value="23"> 
                   <option label="[pub] - al público en general (sin relación contractual)" value="24">
                   <option label="[ext] - a usuarios externos (bajo una relación contractual)" value="25">
                   <option label="[int] - interno (a usuarios de la propia organización)" value="26">
                   <option label="[www] - world wide web" value="27">
                   <option label="[telnet] - acceso remoto a cuenta local" value="28">
                   <option label="[email]', 'correo electrónico" value="29">
                   <option label="[file]', 'almacenamiento de ficheros" value="30">
                   <option label="[ftp] - transferencia de ficheros" value="31">
                   <option label="[edi] - intercambio electrónico de datos" value="32">
                   <option label="[dir] - servicio de directorio" value="33">
                   <option label="[idm] - gestión de identidades" value="34">
                   <option label="[ipm] - gestión de privilegios" value="35">
                   <option label="[pki] - PKI - infraestructura de clave pública" value="36">
                   <option label="[prp] - desarrollo propio (in house)" value="37">
                   <option label="[sub] - desarrollo a medida (subcontratado)" value="38">
                   <option label="[std] - estándar (off the shelf)" value="39">
                   <option label="[host] - grandes equipos" value="40">
                   <option label="[mid] - equipos medios" value="41">
                   <option label="[pc] - informática personal" value="42">
                   <option label="[mobile] - informática móvil" value="43">  
                   <option label="[pda] - agendas electrónicas" value="44">
                   <option label="[vhost] - equipo virtual" value="45">
                   <option label="[backup] - equipamiento de respaldo" value="46">
                   <option label="[peripheral] - periféricos" value="47">
                   <option label="[bp] - dispositivo de frontera" value="48">
                   <option label="[network] - soporte de la red" value="49">
                   <option label="[pabx] - centralita telefónica" value="50">
                   <option label="[ipphone] - teléfono IP" value="51">
                   <option label="[PSTN] - red telefónica" value="52">
                   <option label="[ISDN] - rdsi (red digital)" value="53"> 
                   <option label="[X25] - X25 (red de datos)" value="54">
                   <option label="[ADSL] - ADSL" value="55">
                   <option label="[pp] - punto a punto" value="56">
                   <option label="[radio] - comunicaciones radio" value="57">
                   <option label="[wifi] - red inalámbrica" value="58">
                   <option label="[mobile] - telefonía móvil" value="59">
                   <option label="[sat] - por satélite" value="60">
                   <option label="[LAN] - red local" value="61">
                   <option label="[MAN] - red metropolitana" value="62">
                   <option label="[Internet] - Internet" value="63">
                   <option label="[Electronic] - electrónicos" value="64">
                   <option label="[non_electronic] - no electrónicos" value="65">
                   <option label="[power] - fuentes de alimentación" value="66">
                   <option label="[ups] - sistemas de alimentación ininterrumpida" value="67">
                   <option label="[gen] - generadores eléctricos" value="68">
                   <option label="[ac] - equipos de climatización" value="69">
                   <option label="[cabling] - cableado" value="70">
                   <option label="[robot] - robots" value="71">
                   <option label="[supply] - suministros esenciales" value="72">
                   <option label="[destroy] - equipos de destrucción de soportes de información" value="73">
                   <option label="[furniture] - mobiliario: armarios, etc" value="74">
                   <option label="[safe] - cajas fuertes" value="75">
                   <option label="[site] - recinto" value="76">
                   <option label="[building] - edificio" value="77">
                   <option label="[local] - cuarto" value="78">
                   <option label="[mobile] - plataformas móviles" value="79">
                   <option label="[channel] - canalización" value="80">
                   <option label="[backup] - instalaciones de respaldo" value="81">
                   <option label="[ue] - usuarios externos" value="82">
                   <option label="[ui] - usuarios internos" value="83">  
                   <option label="[op] - operadores" value="84">
                   <option label="[adm] - administradores de sistemas" value="85">
                   <option label="[com] - administradores de comunicaciones" value="86">
                   <option label="[dba] - administradores de BBDD" value="87">
                   <option label="[sec] - administradores de seguridad" value="88">
                   <option label="[des] - desarrolladores / programadores" value="89">
                   <option label="[sub] - subcontratas" value="90">
                   <option label="[prov] - proveedores" value="91">
                     
                </datalist>

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
    
     <div class="form-group{{ $errors->has('propietario') ? ' has-error' : '' }}">

            <label class="control-label">Propietario</label>

                    <select class="form-control" name="propietario">
                    <option >{{ $activo->propietario }}</option>
                    <option >IACA</option>
                    <option >Tony Gonzalez</option>
                    <option >Alberto Sierra</option>
                    <option >Tania Sierra</option>
                    <option >Liceth Hernandez</option>
                      
                      
                                                
                </select>
            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
    
     
     <div class="form-group{{ $errors->has('dominio_iddominio') ? ' has-error' : '' }}">

            <label class="control-label">Dominio</label>
            <input type="text" list="misdatos" name="dominio_iddominio" class="form-control" value="{{ $activo->dominio_iddominio }}">
                <datalist id="misdatos">
                   <option label="Oficina Principal" value="1">
                   <option label="Oficina en Obra" value="2">
                 
                  
                    
                   
                </datalist>
                    
            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
       
        <div class="form-group">

        <button type="submit" class="btn btn-outline btn-primary">Actualizar Datos </button>

        </div>

    </form>
            
     </div>
</div>
@endsection