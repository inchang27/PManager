@extends('layouts.app')

@section('content')
<div class = "com-md-8 col-lg-8 col-md-offset-2 col-md-offset-2">
	<div class="panel panel-primary com-center">
		<div class="panel-heading">Companies</div>
		<div class="panel-body">


		
			<ul class="list-group">

				@foreach($companies as $company)
				<li class="list-group-item"> <a href="/companies/{{$company->id }}">{{ $company->name }}</a></li>
				@endforeach
			</ul>



		</div>
	</div>
</div>

@endsection
