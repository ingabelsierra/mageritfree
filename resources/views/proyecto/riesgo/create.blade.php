@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="panel panel-primary">
                       
                        <div class="panel-body">
                            <p>El Riesgo es la estimación del grado de exposición a que una amenaza se materialice sobre uno o más activos causando daños o perjuicios a la organización . Sus unidades se definen en el valor del activo sobre un año y resulta siendo el producto entre la probabilidad de ocurrencia de la amenaza y el impacto que este ocasiona sobre el activo.</p>
                        </div>
                     
     </div>
      
             
                <!-- /.col-lg-12 -->
</div>


<div class="row">
   
    
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
				<th>Activo</th>
				<th>Amenaza</th>
 				<th>Valor</th>
                               
				</thead>
                    @foreach ($riesgo as $inf)
				    <tr>
					@foreach ($activo as $ac)
                                        @if ($ac->idactivo === $inf->activo_idactivo) 
                                        <td>{{$ac->nombre}}</td>
                                        @endif
                                        @endforeach
                                        
                                        @foreach ($amenaza as $ame)
                                        @if ($ame->idamenaza === $inf->amenaza_idamenaza) 
                                        <td>{{$ame->descripcion}}</td>
                                        @endif
                                        @endforeach
					
					<td>{{ $inf->valor}}</td>
					
                                                              
					
					</tr>
		    @endforeach
			</table>
		</div>
            <div class="row">
             
            </div>
		{{$riesgo->render()}}
	</div>

</div>
@stop