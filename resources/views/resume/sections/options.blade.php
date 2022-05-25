<div class="">
	@foreach($opportunities as $opportunity)
	<div class="d-flex align-items-center mb-3 p-2 rounded-pill" style="background: rgba(0,0,0,0.025);">
		<div class="checkboxes-box cursor-pointer px-2" check-target="opportunity-input-{{$opportunity->id}}">
			<input id="opportunity-input-{{$opportunity->id}}" value="{{$opportunity->longName}}" 
			
			@if(is_checked($opportunity->longName, old('employment_position')) || request('select') == $opportunity->id)
			checked
			@endif

			name="employment_position[]" type="checkbox">
			<span class="check"></span>
		</div>
		
		<label class="px-2 pb-1 m-0 flex-grow cursor-pointer" check-target="opportunity-input-{{$opportunity->id}}">
			<div class="text-muted"><small>{{$opportunity->field->name}}</small></div>
		    <div>{{$opportunity->position}}</div>
		</label>

		<div class="px-2">
		    <div class="btn px-3 btn-sm btn-pill btn-outline-primary" data-toggle="modal" data-target="#opportunity-{{$opportunity->id}}">More info</div>
		</div>
	</div>

	@include('opportunities.show', compact('opportunity'))
	@endforeach
</div>