<section class="band container">
	<div class="row">
		<div class="col-lg-8 col-md-10 col-12 mx-auto">
			<form method="POST" action="{{route('contact')}}" enctype="multipart/form-data">
				@csrf
				@honeypot
				@formlabel(['label' => 'Basic info'])
				<div class="form-row form-group">
				    <div class="col">
				      <input type="text" value="{{old('first_name')}}" class="form-control" name="first_name" placeholder="First name" required>
				    </div>
				    <div class="col">
				      <input type="text" value="{{old('last_name')}}" class="form-control" name="last_name" placeholder="Last name" required>
				    </div>
				</div>

				<div class="form-row form-group">
				    <div class="col">
				      <input type="text" value="{{old('email')}}" class="form-control" name="email" placeholder="Email" required>
				    </div>
				    <div class="col">
				      <input type="text" value="{{old('phone')}}" class="form-control" name="phone" placeholder="Phone" required>
				    </div>
				</div>

				<div class="form-group">
					<input type="text" value="{{old('company')}}" class="form-control" name="company" placeholder="Company" required>
				</div>

				<div class="form-group">
					@formlabel(['label' => 'Recruitment needs'])
					<div class="d-flex flex-wrap">
						@foreach(['Full-time', 'Contract/Temp'] as $type)
						@checkbox(['name' => 'recruitment_needs', 'option' => $type])
						@endforeach
					</div>
				</div>

				<div class="form-group">
					@formlabel(['label' => 'Message'])
					<textarea class="form-control" name="message" placeholder="How can we help you?" name="message" rows="5" required>{{old('message')}}</textarea>
				</div>

				<div class="text-center mt-5"> 
				@button([
					'icon' => ['position' => 'left', 'name' => 'paper-plane'],
					'type' => 'submit',
					'style' => 'primary', 
					'label' => 'Submit'])
				</div>
			</form>
		</div>
	</div>
</section>