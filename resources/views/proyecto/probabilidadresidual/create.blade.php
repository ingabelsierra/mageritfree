@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="panel panel-primary">
                      
                        <div class="panel-body">
                            <p>La Probabilidad Residual es la probabilidad de ocurrencia remanente luego que una amenaza se materialice sobre un activo que posee alguna salvaguarda. La probabilidad residual es el producto entre la probabilidad de ocurrencia y la efectividad de la salvaguarda sobre la probabilidad.

Probabilidad_Residual=Probabilidad ×Efectividad_Probabilidad

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
                                <th>Amenaza</th>
				<th>Salvaguarda</th>
				<th>Valor</th>
                               
				</thead>
                    @foreach ($prob as $inf)
				    <tr>
					
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