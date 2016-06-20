@if(Session::has('alert'))
<div class="alert alert-{{ Session::get('alert') }}">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{ Session::get('msg') }}</strong>
</div>

@endif