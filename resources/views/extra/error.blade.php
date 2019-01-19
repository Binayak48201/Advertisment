@if($errors->any())
	<div class="border border-danger p-3 mb-0 m-2">
		<ul>
			@foreach($errors->all() as $error)
				<li class="text-danger" style="list-style-type: none;"><strong>{{$error}}</strong></li>
			@endforeach
		</ul> 
	</div>
@endif





