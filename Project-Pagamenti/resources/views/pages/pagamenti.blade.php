@extends('layouts.main-layout')

@section('content')
	@foreach ($pagamenti as $pagamento)
		<ul>
			@if ($loop -> even)
				<li class="green">
			@else 
				<li class="red">
			@endif
				id: {{$pagamento['id']}} |
				status: {{$pagamento['status']}} |
				price: {{$pagamento['price']}}
			</li>
		</ul>
	@endforeach
@endsection