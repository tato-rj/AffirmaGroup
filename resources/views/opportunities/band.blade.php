<section id="opportunities" class="band">
	<div class="container">
		@header([
		'position' => 'center',
		'subtitle' => 'DISCOVER JOBS', 
		'title' => 'Latest jobs in NYC'])
		<div class="row mb-4">
			@foreach($opportunities as $opportunity)
			@include('opportunities.card', [
				'order' => $loop->iteration])
			@endforeach
		</div>
		<div class="text-center">
			@button([
				'style' => 'primary', 
				'url' => route('opportunities'),
				'label' => 'Find a job', 
				'icon' => ['position' => 'right', 'name' => 'long-arrow-alt-right', 'animation' => 'move-right']])
		</div>
	</div>
</section>