@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="panel panel-primary">
                       
                        <div class="panel-body">
                            <p>El Impacto es la reducción de valor de activo como consecuencia que sobre un activo tiene la materialización de una amenaza. El impacto usualmente se mide con las mismas unidades del valor del activo y es el producto final entre dicho valor y la degradación.</p>
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
                    @foreach ($impacto as $inf)
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
		{{$impacto->render()}}
	</div>

</div>
@stop