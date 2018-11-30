<section class="user_info">
	<a href="{{ route('users.show', $user->id) }}">
		<img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar">
	</a>
	<h1>Ares</h1>
</section>