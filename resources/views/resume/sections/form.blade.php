<section class="band container">
	<div class="row">
		<div class="col-lg-8 col-md-10 col-12 mx-auto">
			<form method="POST" disable-on-submit action="{{route('resume.store')}}" enctype="multipart/form-data">
				@csrf
				@honeypot
				@formlabel(['label' => 'Basic info'])
				<div class="form-row form-group">
				    <div class="col">
				      <input type="text" value="{{old('first_name')}}" name="first_name" class="form-control" placeholder="First name" required>
				    </div>
				    <div class="col">
				      <input type="text" value="{{old('last_name')}}" name="last_name" class="form-control" placeholder="Last name" required>
				    </div>
				</div>

				<div class="form-group">
					<input type="text" value="{{old('email')}}" name="email" class="form-control" placeholder="Email" required>
				</div>

				<div class="form-group">
					@formlabel(['label' => 'Desired Employment'])
					<div class="d-flex flex-wrap">
						@foreach($job_types as $type)
						@checkbox(['name' => 'employment_type', 'option' => $type])
						@endforeach
					</div>
				</div>

				<div class="form-group">
					@formlabel(['label' => 'Opportunities'])
					@include('resume.sections.options')
				</div>

				<div class="form-group">
					@formlabel(['label' => 'Upload resume'])
					<div class="custom-file">
						<input name="resume" type="file" class="custom-file-input" id="resume-input">
						<label class="custom-file-label" for="resume-input">Select file</label>
					</div>
				</div>

				<div class="form-group">
					@formlabel(['label' => 'Additional info'])
					<textarea class="form-control" placeholder="Write your message here" name="additional_info" rows="5">{{old('additional_info')}}</textarea>
				</div>

				<div class="text-center mt-5"> 
				@button([
					'icon' => ['position' => 'left', 'name' => 'envelope'],
					'type' => 'submit',
					'style' => 'primary', 
					'label' => 'Submit resume'])
				</div>
			</form>
		</div>
	</div>
</section>