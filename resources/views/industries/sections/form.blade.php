<section class="band container">
	<div class="row">
		<div class="col-lg-8 col-md-10 col-12 mx-auto">
			<form method="POST" action="{{route('resume.store')}}" enctype="multipart/form-data">
				<div class="form-row form-group">
				    <div class="col">
				      <input type="text" class="form-control" placeholder="First name" required>
				    </div>
				    <div class="col">
				      <input type="text" class="form-control" placeholder="Last name" required>
				    </div>
				</div>

				<div class="form-group">
					<input type="text" class="form-control" placeholder="Email" required>
				</div>

				<div class="form-group">
					@formlabel(['label' => 'Desired Employment'])
					<div class="d-flex flex-wrap">
						<div class="custom-control custom-checkbox mr-4">
							<input type="checkbox" class="custom-control-input" id="temporary">
							<label class="custom-control-label" for="temporary">Temporary</label>
						</div>
						<div class="custom-control custom-checkbox mr-4">
							<input type="checkbox" class="custom-control-input" id="part-time">
							<label class="custom-control-label" for="part-time">Part-time</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="full-time">
							<label class="custom-control-label" for="full-time">Full-time</label>
						</div>
					</div>
				</div>

				<div class="form-group">
					@formlabel(['label' => 'Opportunities'])
					<input type="text" class="form-control" placeholder="Click to select" required>
				</div>

				<div class="form-group">
					@formlabel(['label' => 'Upload resume'])
					<div action="test" class="dropzone form-group" id="my-dropzone">
					</div>
				</div>

				<div class="form-group">
					@formlabel(['label' => 'Additional info'])
					<textarea class="form-control" placeholder="Write your message here" name="info" rows="5"></textarea>
				</div>

				<div class="text-center mt-5"> 
				@button([
					'type' => 'submit',
					'style' => 'primary', 
					'label' => 'Submit resume'])
				</div>
			</form>
		</div>
	</div>
</section>