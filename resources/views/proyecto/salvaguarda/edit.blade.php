@extends ('layouts.admin')
@section ('contenido')
<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                         <div class="panel-heading">
                            
                            <p class="text-danger">Editar datos de la Salvaguarda</p>
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
      
       
	     <form class="form" role="form" method="POST" action="{{ url('/proyecto/salvaguarda/'. $salvaguarda->idsalvaguarda) }}">

        <input type="hidden" name="_method" value="patch">

    {{ csrf_field() }}

    <!-- name Form Input -->

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Descripción</label>

            <input type="text" class="form-control" name="descripcion" value="{{ $salvaguarda->descripcion }}">

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
    
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Catalogo Magerit</label>

            <input type="text" list="cat" class="form-control" name="idsalvaguarda_catalogo" value="{{ $salvaguarda->idsalvaguarda_catalogo }}">
            <datalist id="cat">
                   <option label="Protecciones generales u horizontales" value="1">
                   <option label="Protección de los datos / información" value="2">
                   <option label="Protección de las claves criptográficas" value="3">
                   <option label="Protección de los servicios" value="4">
                   <option label="Protección de las aplicaciones (software)" value="5">
                   <option label="Protección de los equipos (hardware)" value="6">
                   <option label="Protección de las comunicaciones" value="7">
                   <option label="Protección en los puntos de interconexión con otro..." value="8">
                   <option label="Protección de los soportes de información" value="9">
                   <option label="Protección de los elementos auxiliares" value="10">
                   <option label="Seguridad física – Protección de las instalaciones" value="11">
                   <option label="Salvaguardas relativas al personal" value="12">
                   <option label="Salvaguardas de tipo organizativo" value="13">
                   <option label="Continuidad de operaciones" value="14">
                   <option label="Externalización" value="15">
                   <option label="Adquisición y desarrollo" value="16">
                   <option label="Referencias" value="17">
                </datalist>
            
            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
    
     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Descripción Magerit</label>

            <input type="text" list="des" class="form-control" name="iddescripcion_salvaguarda" value="{{ $salvaguarda->iddescripcion_salvaguarda }}">
            <datalist id="des">
                   <option label="H - Protecciones Generales" value="1">
                   <option label="H.IA - Identificación y autenticación" value="2">
                   <option label="H.AC - Control de acceso lógico" value="3">
                   <option label="H.ST - Segregación de tareas" value="4">
                   <option label="H.IR - Gestión de incidencias" value="5">
                   <option label="H.tools - Herramientas de seguridad" value="6">
                   <option label="H.tools.AV - Herramienta contra código dañino" value="7">
                   <option label="H.tools.IDS - IDS/IPS: Herramienta de detección / prevención de intrusión" value="8">
                   <option label="H.tools.CC - Herramienta de chequeo de configuración" value="9">
                   <option label="H.tools.VA - Herramienta de análisis de vulnerabilidades" value="10">
                   <option label="H.tools.TM - Herramienta de monitorización de tráfico" value="11">
                   <option label="H.tools.DLP - DLP: Herramienta de monitorización de contenidos" value="12">
                   <option label="H.tools.LA - Herramienta para análisis de logs" value="13">
                   <option label="H.tools.HP - Honey net / honey pot" value="14">
                   <option label="H.tools.SFV - Verificación de las funciones de seguridad" value="15">
                   <option label="H.VM - Gestión de vulnerabilidades" value="16">
                   <option label="H.AU - Registro y auditoría" value="17">
                   <option label="D - Protección de la Información" value="18">
                   <option label="D.A - Copias de seguridad de los datos (backup)" value="19">
                   <option label="D.I - Aseguramiento de la integridad" value="20">
                   <option label="D.C - Cifrado de la información" value="21">
                   <option label="D.DS - Uso de firmas electrónicas" value="22">
                   <option label="D.TS - Uso de servicios de fechado electrónico (time stamping)" value="23">
                   <option label="K - Gestión de claves criptográficas" value="24">
                   <option label="K.IC - Gestión de claves de cifra de información" value="25">
                   <option label="K.DS - Gestión de claves de firma de información" value="26">
                   <option label="K.disk - Gestión de claves para contenedores criptográficos" value="27">
                   <option label="K.comms - Gestión de claves de comunicaciones" value="28">
                   <option label="K.509 - Gestión de certificados" value="29">
                   <option label="S - Protección de los Servicios" value="30">
                   <option label="S.A - Aseguramiento de la disponibilidad" value="31">
                   <option label="S.start - Aceptación y puesta en operación" value="32">
                   <option label="S.SC - Se aplican perfiles de seguridad" value="33">
                   <option label="S.op - Explotación" value="34">
                   <option label="S.CM - Gestión de cambios (mejoras y sustituciones" value="35">
                   <option label="'S.end - Terminación" value="36">
                   <option label="S.www - Protección de servicios y aplicaciones web" value="37">
                   <option label="S.email - Protección del correo electrónico" value="38">
                   <option label="S.dir - Protección del directorio" value="39">
                   <option label="S.dns - Protección del servidor de nombres de dominio (DNS)" value="40">
                   <option label="S.TW - Teletrabajo" value="41">
                   <option label="S.voip - Voz sobre IP" value="42">
                   <option label="SW - Protección de las Aplicaciones Informáticas" value="43">
                   <option label="SW.A - Copias de seguridad (backup)" value="44">
                   <option label="SW.start - Puesta en producción" value="45">
                   <option label="SW.SC - Se aplican perfiles de seguridad" value="46">
                   <option label="SW.op - Explotación / Producción" value="47">
                   <option label="SW.CM - Cambios (actualizaciones y mantenimiento)" value="48">
                   <option label="SW.end - Terminación" value="49">
                   <option label="HW - Protección de los Equipos Informáticos" value="50">
                   <option label="HW.start - Puesta en producción" value="51">
                   <option label="HW.SC - Se aplican perfiles de seguridad" value="52">
                   <option label="HW.A - Aseguramiento de la disponibilidad" value="53">
                   <option label="HW.op - Operación" value="54">
                   <option label="HW.CM - Cambios (actualizaciones y mantenimiento)" value="55">
                   <option label="HW.end - Terminación" value="56">
                   <option label="HW.PCD - Informática móvil" value="57">
                   <option label="HW.print - Reproducción de documentos" value="58">
                   <option label="HW.pabx - Protección de la centralita telefónica (PABX)" value="59">
                   <option label="COM - Protección de las Comunicaciones" value="60">
                   <option label="COM.start - Entrada en servicio" value="61">
                   <option label="COM.SC - Se aplican perfiles de seguridad" value="62">
                   <option label="COM.A - Aseguramiento de la disponibilidad" value="63">
                   <option label="COM.aut - Autenticación del canal" value="64">
                   <option label="COM.I - Protección de la integridad de los datos intercambiados" value="65">
                   <option label="COM.C - Protección criptográfica de la confidencialidad de los datos intercambiados" value="66">
                   <option label="COM.op - Operación" value="67">
                   <option label="COM.CM - Cambios (actualizaciones y mantenimiento)" value="68">
                   <option label="COM.end - Terminación" value="69">
                   <option label="COM.internet - Internet: uso de ? acceso a" value="70">
                   <option label="COM.wifi - Seguridad Wireless (WiFi)" value="71">
                   <option label="COM.mobile - Telefonía móvil" value="72">
                   <option label="COM.DS - Segregación de las redes en dominios" value="73">
                   <option label="IP - Puntos de interconexión: conexiones entre zonas de confianza" value="74">
                   <option label="IP.SPP - Sistema de protección perimetral" value="75">
                   <option label="IP.BS - Protección de los equipos de frontera" value="76">
                   <option label="MP - Protección de los Soportes de Información" value="77">
                   <option label="MP.A - Aseguramiento de la disponibilidad" value="78">
                   <option label="MP.IC - Protección criptográfica del contenido" value="79">
                   <option label="MP.clean - Limpieza de contenidos" value="80">
                   <option label="MP.end - Destrucción de soportes" value="81">
                   <option label="AUX - Elementos Auxiliares" value="82">
                   <option label="AUX.A - Aseguramiento de la disponibilidad" value="83">
                   <option label="AUX.start - Instalación" value="84">
                   <option label="AUX.power - Suministro eléctrico" value="85">
                   <option label="AUX.AC - Climatización" value="86">
                   <option label="AUX.wires - Protección del cableado" value="87">
                   <option label="L - Protección de las Instalaciones" value="88">
                   <option label="L.design - Diseño" value="89">
                   <option label="L.depth - Defensa en profundidad" value="90">
                   <option label="L.AC - Control de los accesos físicos" value="91">
                   <option label="L.A - Aseguramiento de la disponibilidad" value="92">
                   <option label="L.end - Terminación" value="93">
                   <option label="PS - Gestión del Personal" value="94">
                   <option label="PS.AT - Formación y concienciación" value="95">
                   <option label="PS.A - Aseguramiento de la disponibilidad" value="96">
                   <option label="G - Organización" value="97">
                   <option label="G.RM - Gestión de riesgos" value="98">
                   <option label="G.plan - Planificación de la seguridad" value="99">
                   <option label="G.exam - Inspecciones de seguridad" value="100">
                   <option label="BC - Continuidad del negocio" value="101">
                   <option label="BC.BIA - Análisis de impacto (BIA)" value="102">
                   <option label="BC.DRP - Plan de Recuperación de Desastres (DRP)" value="103">
                   <option label="E - Relaciones Externas" value="104">
                   <option label="E.1 - Acuerdos para intercambio de información y software" value="105">
                   <option label="E.2 - Acceso externo" value="106">
                   <option label="E.3 - Servicios proporcionados por otras organizaciones" value="107">
                   <option label="NEW - Adquisición / desarrollo" value="108">
                   <option label="NEW.S - Servicios: Adquisición o desarrollo" value="109">
                   <option label="NEW.SW - Aplicaciones: Adquisición o desarrollo" value="110">
                   <option label="NEW.HW - Equipos: Adquisición o desarrollo" value="111">
                   <option label="NEW.COM - Comunicaciones: Adquisición o contratación" value="112">
                   <option label="NEW.MP - Soportes de Información: Adquisición" value="113">
                   <option label="NEW.C - Productos certificados o acreditados" value="114">
                      
                </datalist>
            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
    
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Activo</label>

            <input type="text" list="activo" class="form-control" name="activo_idactivo" value="{{ $salvaguarda->activo_idactivo }}">
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
    
  
        
    
    
       
        <div class="form-group">

        <button type="submit" class="btn btn-outline btn-primary">Actualizar Datos</button>

        </div>

    </form>
            
		</div>
</div>
@endsection