<section id="highlight" class="band">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-12 py-2">
				<div class="img-container" data-aos="fade-right">
					<img src="{{asset('images/office.jpg')}}">
				</div>
			</div>
			<div class="col-lg-4 col-md-5 col-12 d-flex align-items-center py-2">
				<div>
					@header(['position' => 'left', 'subtitle' => 'About us', 'title' => 'Solutions that grow your business'])
					<h5 class="text-muted mb-4">Professionals at your service, with successful track record and demonstrable results.</h5>
					@button(['url' => route('about'), 'style' => 'primary','label' => 'Learn more'])
				</div>
			</div>
		</div>
	</div>
</section>