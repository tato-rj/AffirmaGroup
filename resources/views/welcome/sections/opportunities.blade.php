<section id="opportunities" class="band">
	<div class="container">
		@header([
		'position' => 'center',
		'subtitle' => 'DISCOVER JOBS', 
		'title' => 'Latest jobs in NYC'])
		<div class="row mb-4">
			@foreach($opportunities as $opportunity)
			@include('components.job', [
				'order' => $loop->iteration,
				'industry' => $opportunity->industry->name, 
				'position' => $opportunity->position])
			@endforeach
		</div>
		<div class="text-center">
			@button([
				'style' => 'primary', 
				'label' => 'Find a job', 
				'icon' => ['position' => 'right', 'name' => 'long-arrow-alt-right', 'animation' => 'move-right']])
		</div>
	</div>
</section>