<section id="home" class="mb-6 position-relative page-lead" style="height: 60vh">
	<video autoplay muted loop playsinline>
		<source src="{{asset('videos/'.$video.'.mp4')}}" type="video/mp4">
	</video>
	<div class="bg-primary overlay"></div>
	<div class="container-fluid h-100">
		<div class="content row h-100 align-items-center">
			<div class="col-12 mx-auto pt-6 pl-4" style="z-index: 1">
				<div class="text-white text-center">
					<div class="">
						<h1>{{$title}}</h1>
						<h3 class="opacity-6">{{$subtitle}}</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>