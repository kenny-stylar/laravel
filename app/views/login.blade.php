@extends('layout.home')

@section("nav")
  @parent
<li>
  <a href="{{ URL::route('login') }}">Something</a>
</li>
@stop

@section('content')
    
	<div id="login" class="box">
		{{ Form::open( array('class'=>'form-horizontal')) }}

  		<div class="form-group">
  			{{ Form::label('username', 'Username', array('class'=>'col-lg-4 control-label')) }}
  			<div class="col-lg-8">
  				{{ Form::text('username', Input::old('username'), array('class'=>'form-control')) }}
  			</div>
  		</div>
  		<div class="form-group">
  			{{ Form::label('password', 'Password', array('class'=>'col-lg-4 control-label')) }}
  			<div class="col-lg-8">
  				{{ Form::password('password', array('class'=>'form-control')) }}
  			</div>
  		</div>
  		@if ($error = $errors->first("msg"))
      <div class="form-group" style="color:#f00;">
  			<div class="col-lg-offset-4 col-lg-8">
	        {{ $error }}
	      </div>
      </div>
      @endif
  		<div class="form-group">
  			<div class="col-lg-offset-4 col-lg-8">
  				{{ Form::submit('Login', array('class'=>'btn btn-info')) }}
  			</div>
  		</div>

  		{{ Form::close() }}
	</div>

@stop