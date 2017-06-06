<div id="project-render">
	@if(count($posts) > 0)
		@foreach($posts as $value)
		<div class="grid_4">
			<div class="post-item">
				<a href="{{ url($value->slug) }}" class="overlay">
					<img src="{{ url($value->image) }}">
					<div class="post-label">
						<span>{{ $value->name }}</span>
						<p>{{ $value->summary }}</p>
					</div>
				</a>
			</div>
		</div>
		@endforeach
	@endif
</div>