@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Recuerda que
                        </div>
                        <div class="panel-body">
                            <p>En esta sección es donde se crea el proyecto base del análisis y gestión de riesgos informáticos. Los componentes básicos de entidad consisten el ID del proyecto (valor que aumenta automáticamente), código (abreviatura del nombre del proyecto), propietario del proyecto, la organización a la que se implementará el análisis de riesgos informáticos, versión del proyecto, fecha y condición (propiedad intrínseca de la entidad).</p>
                        </div>
                     
                    </div>
      
             
                <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
            
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
				
				
 				
				
				
				
				
				</thead>
                    @foreach ($proyecto as $inf)
				    <tr><th>Codigo</th><td>{{ $inf->codigo}}</td></tr>
				    <tr><th>Descripción</th><td>{{ $inf->descripcion}}</td></tr>
				    <tr><th>Propietario</th><td>{{ $inf->propietario}}</td></tr>
				    <tr><th>Organización</th><td>{{ $inf->organizacion}}</td></tr>
				    <tr><th>Versión</th><td>{{ $inf->version}}</td></tr>
				    <tr><th>Fecha</th><td>{{ $inf->fecha}}</td></tr>
				 <!--   <tr><th></th> <td><a href="{{URL::action('ProyectoController@edit',$inf->idproyecto)}}"><button class="btn btn-info">Editar Datos</button></a></td></tr>--> 
					
					</tr>
					@endforeach
			</table>
		</div>
            
            <a href="{{URL::action('ProyectoController@edit',$inf->idproyecto)}}"><button class="btn btn-outline btn-primary">Editar Datos</button></a>
		
	</div>
</div>



@stop