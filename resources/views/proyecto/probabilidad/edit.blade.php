@extends ('layouts.admin')
@section ('contenido')
<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                         <div class="panel-heading">
                            
                            <p class="text-danger">Editar datos de la Probabilidad</p>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Porcentaje</a>
                                </li>
                              
                               
                                                               
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <h4>Porcentaje de la Probabilidad ARO</h4>
                                    <p>Es el valor en porcentaje de la probabilidad de la amenaza</p>
                                </div>
                                
                             
                            </div>
                        </div>
                        <!-- /.panel-body -->
                </div>
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
      
       
	     <form class="form" role="form" method="POST" action="{{ url('/proyecto/probabilidad/'. $probabilidad->idprobabilidad) }}">

        <input type="hidden" name="_method" value="patch">

    {{ csrf_field() }}

    <!-- name Form Input -->

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Porcentaje (ARO)</label>

            <input type="text" class="form-control" name="aro" value="{{ $probabilidad->aro }}">

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