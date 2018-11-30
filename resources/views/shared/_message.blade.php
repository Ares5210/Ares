@foreach(['danger', 'warning', 'info', 'success'] as $msg)
<div class="flash-message">
	@if(session()->has($msg))
	<p class="alert alert-{{ $msg }}">
		{{ session()->get($msg) }}
	</p>
	@endif
</div>
@endforeach