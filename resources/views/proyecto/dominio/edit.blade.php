@extends ('layouts.admin')
@section ('contenido')

<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                            <p class="text-danger">Editar Datos del Dominio</p>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Nombre</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Descripcion</a>
                                </li>
                                
                               
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <h4>Nombre del Dominio</h4>
                                    <p>En este input se digita el nombre del dominio</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Descripción del Dominio</h4>
                                    <p>En este campo se digita una breve descripción del Dominio.</p>
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
      
       
	     <form class="form" role="form" method="POST" action="{{ url('/proyecto/dominio/'. $dominio->iddominio) }}">

        <input type="hidden" name="_method" value="patch">

    {{ csrf_field() }}

    <!-- name Form Input -->

       
    
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Nombre</label>

            <input type="text" class="form-control" name="nombre" value="{{ $dominio->nombre }}">

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
        
    
    <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">

            <label class="control-label">Descripcion</label>

            
            <input type="textarea" class="form-control" name="descripcion" value="{{ $dominio->descripcion }}">

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