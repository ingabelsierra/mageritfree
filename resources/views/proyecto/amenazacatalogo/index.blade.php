@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Catalogo Magerit
                        </div>
                        <div class="panel-body">
                            <p>Catalogo de Amenazas Libro II Magerit.</p>
                        </div>
                     
                    </div>
      
             
                <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		@include('proyecto.amenazacatalogo.search')
	</div>
</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
				<th>Codigo</th>
				<th>Descripción</th>
                                <th>Amenaza</th>
				
				</thead>
                    @foreach ($informacion as $inf)
				    <tr>
					
					<td>{{ $inf->codigo}}</td>
					<td>{{ $inf->descripcion}}</td>
					
				        @foreach ($amenazacatalogo as $ac)
                                        @if ($ac->idamenaza_catalogo === $inf->idamenaza_catalogo) 
                                        <td>{{$ac->codigo}} - {{$ac->descripcion}}</td>
                                        @endif
                                        @endforeach
					
					</tr>
					@endforeach
			</table>
		</div>
		{{$informacion->render()}}
	</div>
</div>



@stop