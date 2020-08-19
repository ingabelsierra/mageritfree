@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="panel panel-primary">
                       
                        <div class="panel-body">
                            <p>	Degradación Residual – La degradación remanente luego que una amenaza se materialice sobre un activo que posee alguna salvaguarda. Técnicamente, es el producto entre la degradación y la efectividad de la salvaguarda sobre el impacto.

Degradación_Residual=Degradación × Efectividad_Impacto
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
                    @foreach ($degradacion as $deg)
				    <tr>
					@foreach ($amenaza as $ame)
                                        @if ($ame->idamenaza === $deg->amenaza_idamenaza) 
                                        <td>{{$ame->descripcion}}</td>
                                        @endif
                                        @endforeach
                                        
                                        @foreach ($salvaguarda as $sa)
                                        @if ($sa->idsalvaguarda === $deg->salvaguarda_idsalvaguarda) 
                                        <td>{{$sa->descripcion}}</td>
                                        @endif
                                        @endforeach
                                       
					
					<td>{{ $deg->valor}}</td>
					
                                                              
					
					</tr>
		    @endforeach
			</table>
		</div>
            <div class="row">
             
            </div>
		{{$degradacion->render()}}
	</div>

</div>
@stop