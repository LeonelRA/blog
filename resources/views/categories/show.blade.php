@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h3 class="mb-3">{{ __("Category : {$name}") }}</h3>

			@include('components.posts.list', ['post' => $posts])
		</div>

 		<div class="col-md-4">

 			@include('components.sidebar')

		</div> 
	</div>
</div>
@endsection
