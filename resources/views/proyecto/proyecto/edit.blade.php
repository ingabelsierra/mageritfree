@extends ('layouts.admin')
@section ('contenido')

<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                            <p class="text-danger">Editar datos de proyecto</p>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Codigo</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Descripcion</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Propietario</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">Organización</a>
                                </li>
                                <li><a href="#dominio" data-toggle="tab">Versión</a>
                                </li>
                                <li><a href="#fecha" data-toggle="tab">Fecha</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                  <p>Se escribe la codificación del proyecto</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <p>Se realiza una breve descripción del proyecto</p>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <p>Se escribe el propietario de la organización al cual va dirigido el estudio</p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <p>En este campo se ingresa en nombre de la organización objeto de estudio</p>
                                </div>
                                 <div class="tab-pane fade" id="dominio">
                                 <p>En este campo se ingresa la version del estudio</p>
                                </div>
                                
                                <div class="tab-pane fade" id="fecha">
                                 <p>En este campo se ingresa la fecha del estudio</p>
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
      
       
	     <form class="form" role="form" method="POST" action="{{ url('/proyecto/proyecto/'. $proyecto->idproyecto) }}">

        <input type="hidden" name="_method" value="patch">

    {{ csrf_field() }}

    <!-- name Form Input -->

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Codigo</label>

            <input type="text" class="form-control" name="codigo" value="{{ $proyecto->codigo }}">

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('codigo') }}</strong>
                </span>

            @endif

        </div>
    
    <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">

            <label class="control-label">Descripcion</label>

            
            <input type="textarea" class="form-control" name="descripcion" value="{{ $proyecto->descripcion }}">

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
    
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Propietario</label>

            <input type="text" class="form-control" name="propietario" value="{{ $proyecto->propietario }}">

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
        
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Organizacion</label>

            <input type="text" class="form-control" name="organizacion" value="{{ $proyecto->organizacion }}">

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
    
     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Version</label>

            <input type="text" class="form-control" name="version" value="{{ $proyecto->version }}">

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
    
       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Fecha</label>

            <input type="text" class="form-control" name="fecha" value="{{ $proyecto->fecha }}">

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