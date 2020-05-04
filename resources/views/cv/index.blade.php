@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			@if(session()->has('success'))
			<div class="alert alert-success">
				{{session()->get('success')}}
			</div>
			@endif

			<h1>La liste de mes cv</h1>
			<div class="pull-right">
				<a href="{{ url('cvs/create')}}" class="btn btn-success">Nouveau cv</a>
			</div>
			

			<div class="row">
				@foreach($cvs as $cv)
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="{{ asset('storage/'.$cv->photo) }}" alt="...">
			      <div class="caption">
			        <h3>{{ $cv->titre }}</h3>
			        <p>
			        	
			        </p>
			        <p><a href="{{ url('cvs/'.$cv->id) }}" class="btn btn-primary" role="button">Show</a> 
			        	<a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-default" role="button">Editer</a>
			        	<a href="#" class="btn btn-default" role="button">Supprimer</a>
			        </p>
			      </div>
			    </div>
			  </div>
			  @endforeach
			</div>


		</div>
	</div>
</div>


@endsection