<div class="col-lg-3 col-md-4 col-sm-6 col-12 p-3">
	<div class="h-100" 
{{-- 		@isset($order)
		data-aos="fade-up" data-aos-delay="{{$order}}00"
		@endisset --}}
		>
		<div class="border bg-white p-4 d-flex flex-column justify-content-between h-100">
			<div class="mb-3 position-relative pt-2">
				<div style="width: 21.4px; top: -28px; height: 21.4px; " class="bg-secondary position-absolute"></div>
				<h5 class="font-weight-bold mb-2">{{$opportunity->position}}</h5>
				<p class="text-muted m-0">{{$opportunity->field->name}}</p>
				<p class="text-muted">{{$opportunity->field->industry->name}}</p>
			</div>
			<div>
				@button(['modal' => 'opportunity-'.$opportunity->id, 'style' => 'outline-primary', 'label' => 'View job'])
			</div>
		</div>
	</div>
</div>

@include('opportunities.show', compact('opportunity'))