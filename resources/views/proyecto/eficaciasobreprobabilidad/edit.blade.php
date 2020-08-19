@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			
                    	<h3>Editar Eficacia/Probabilidad</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
      
       
	     <form class="form" role="form" method="POST" action="{{ url('/proyecto/eficaciasobreprobabilidad/'. $eficaciasobreprobabilidad->ideficacia_sobre_probabilidad) }}">

        <input type="hidden" name="_method" value="patch">

    {{ csrf_field() }}

    <!-- name Form Input -->

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Porcentaje (ARO)</label>

            <input type="text" class="form-control" name="eficacia" value="{{ $eficaciasobreprobabilidad->eficacia }}">

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
    
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">Amenaza</label>

            <input type="text" class="form-control" name="salvaguarda_idsalvaguarda" value="{{ $eficaciasobreprobabilidad->salvaguarda_idsalvaguarda }}">

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>
    
         
    
    
       
        <div class="form-group">

        <button type="submit" class="btn btn-primary btn-lg">Actualizar </button>

        </div>

    </form>
            
		</div>
	</div>
@endsection