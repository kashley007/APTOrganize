@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
			<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
	            {{ csrf_field() }}
	            @if(Session::has('message'))
	                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
	            @endif
	            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                	<label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">Chore:</label>
                	<div class="col-md-6 col-sm-6 col-xs-12">
	                    <input id="name" class="form-control col-md-7 col-xs-12" type="text" name="name" value="">
	                    @if ($errors->has('name'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('name') }}</strong>
	                    	</span>
                    	@endif
                 	</div>
                </div>
                <div class="form-group">
                	<label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                	<div class="col-md-6 col-sm-6 col-xs-12">
	                	<button type="submit" class="btn btn-primary" id="updateProfile">
	                    	<i class="fa fa-bath" aria-hidden="true"></i> Create Chore
	                    </button>
                    	<span></span>
                    	<a class="btn btn-default" href="{{ URL::to('/profile/student') }}">Cancel</a>
                	</div>
                </div> 
	        </form>
		</div>
	</div>
@endsection