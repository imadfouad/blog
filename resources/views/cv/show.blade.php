@extends('layouts.app')


@section('content')

<div class="container" id="app">
	<div class="row">
		<div class="col-md-12">
			
			<h1>@{{ message }}</h1>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Experiences</h3></div>
						<div class="col-md-2 text-right">
							<button class="btn btn-success">Ajouter</button>
						</div>
					</div>
					
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item">
							<div class="pull-right">
								<button class="btn btn-warning btn-sm">Editer</button>
							</div>
							<h3>Lorem ipsum dolor sit amet, consectetur.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam voluptate, officia impedit aut repellendus amet? Cum quidem eaque asperiores quae nihil sit dignissimos fugiat inventore reprehenderit officia, ipsum dicta, magni neque culpa, fuga a unde. Quibusdam alias eius quaerat excepturi quam, sapiente temporibus eum qui, officiis, quasi quisquam quia! Ratione.</p>
							<small>12/03/2018 - 16/04/2019</small>
						</li>
						<li class="list-group-item">
							<div class="pull-right">
								<button class="btn btn-warning btn-sm">Editer</button>
							</div>
							<h3>Lorem ipsum dolor sit amet, consectetur.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam voluptate, officia impedit aut repellendus amet? Cum quidem eaque asperiores quae nihil sit dignissimos fugiat inventore reprehenderit officia, ipsum dicta, magni neque culpa, fuga a unde. Quibusdam alias eius quaerat excepturi quam, sapiente temporibus eum qui, officiis, quasi quisquam quia! Ratione.</p>
							<small>12/03/2018 - 16/04/2019</small>
						</li>
						<li class="list-group-item">
							<div class="pull-right">
								<button class="btn btn-warning btn-sm">Editer</button>
							</div>
							<h3>Lorem ipsum dolor sit amet, consectetur.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam voluptate, officia impedit aut repellendus amet? Cum quidem eaque asperiores quae nihil sit dignissimos fugiat inventore reprehenderit officia, ipsum dicta, magni neque culpa, fuga a unde. Quibusdam alias eius quaerat excepturi quam, sapiente temporibus eum qui, officiis, quasi quisquam quia! Ratione.</p>
							<small>12/03/2018 - 16/04/2019</small>
						</li>
					</ul>
				</div>
			</div>
	<hr>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Formations</h3></div>
						<div class="col-md-2 text-right">
							<button class="btn btn-success">Ajouter</button>
						</div>
					</div>
					
				</div>
				<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit alias animi nesciunt similique eius reiciendis, numquam enim nihil, earum expedita molestias quaerat et, tempore cum sed quis dolorem ab odio.
				</div>
			</div>

			<hr>

			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Portefolio</h3></div>
						<div class="col-md-2 text-right">
							<button class="btn btn-success">Ajouter</button>
						</div>
					</div>
					
				</div>
				<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit alias animi nesciunt similique eius reiciendis, numquam enim nihil, earum expedita molestias quaerat et, tempore cum sed quis dolorem ab odio.
				</div>
			</div>
			
			<hr>


			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Compétences</h3></div>
						<div class="col-md-2 text-right">
							<button class="btn btn-success">Ajouter</button>
						</div>
					</div>
					
				</div>
				<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit alias animi nesciunt similique eius reiciendis, numquam enim nihil, earum expedita molestias quaerat et, tempore cum sed quis dolorem ab odio.
				</div>
			</div>

		</div>
	</div>
</div>


@endsection


@section('javascripts')
	
	<script src="{{asset('js/vue.js')}}"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script >
		
		var app = new Vue({
			el: '#app',
			data: {
				message : 'je suis imad eddine fouad'
			}
		});
	</script>


@endsection