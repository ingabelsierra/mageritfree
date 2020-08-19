@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="panel panel-primary">
                     
                        <div class="panel-body">
                            <p>El Riesgo Residual es el riesgo final luego de la materialización de una amenaza sobre un activo que a su vez tiene una salvaguarda que reduce su probabilidad de ocurrencia. El riesgo residual se halla como el producto del Impacto Residual y de la Probabilidad Residual.

Riesgo_Residual=Impacto_Residual× Probabilidad_Residual

</p>
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
                                <th>Salvaguarda</th>
 				<th>Valor</th>
                               
				</thead>
                    @foreach ($prob as $inf)
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
					
                                        @foreach ($salvaguarda as $sa)
                                        @if ($sa->idsalvaguarda === $inf->salvaguarda_idsalvaguarda) 
                                        <td>{{$sa->descripcion}}</td>
                                        @endif
                                        @endforeach
                                        
                                       
					<td>{{ $inf->valor}}</td>
					
                                                              
					
					</tr>
		    @endforeach
			</table>
		</div>
            <div class="row">
             
            </div>
		{{$prob->render()}}
	</div>

</div>
@stop