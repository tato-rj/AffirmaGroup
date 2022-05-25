<div class="mr-3 mb-3">
	<div class="checkboxes-box cursor-pointer">
		<input id="{{str_slug($option)}}" {{is_checked($option, old($name))}} value="{{$option}}" name="{{$name}}[]" type="checkbox">
		<span class="check" check-target="{{str_slug($option)}}"></span>
			
		<label class="px-2 m-0" check-target="{{str_slug($option)}}">
		    <div>{{$option}}</div>
		</label>
	</div>
</div>