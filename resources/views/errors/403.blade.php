@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center"></div>
		<h2>Cette page est non autorisée</h2>
		<a href="{{ url('cvs') }}">Retour</a>
	</div>
</div>

@endsection