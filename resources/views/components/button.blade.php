@if(isset($type) && $type == 'submit')
<button type="submit" class="btn btn-wide btn-pill btn-{{$style}}">
@isset($icon)
	@if($icon['position'] == 'left')
	@fa(['icon' => $icon['name'], 'classes' => $icon['animation'] ?? null])
	@endif
@endisset

{{$label}}

@isset($icon)
	@if($icon['position'] == 'right')
	@fa(['icon' => $icon['name'], 'mr' => 0, 'ml' => 2, 'classes' => $icon['animation'] ?? null])
	@endif
@endisset
</button>

@elseif(isset($modal))

<button data-toggle="modal" data-target="#{{$modal}}" class="btn btn-wide btn-pill btn-{{$style}}">
@isset($icon)
	@if($icon['position'] == 'left')
	@fa(['icon' => $icon['name'], 'classes' => $icon['animation'] ?? null])
	@endif
@endisset

{{$label}}

@isset($icon)
	@if($icon['position'] == 'right')
	@fa(['icon' => $icon['name'], 'mr' => 0, 'ml' => 2, 'classes' => $icon['animation'] ?? null])
	@endif
@endisset
</button>

@else

<a href="{{$url ?? null}}" class="btn btn-wide btn-pill btn-{{$style}}">
@isset($icon)
	@if($icon['position'] == 'left')
	@fa(['icon' => $icon['name'], 'classes' => $icon['animation'] ?? null])
	@endif
@endisset

{{$label}}

@isset($icon)
	@if($icon['position'] == 'right')
	@fa(['icon' => $icon['name'], 'mr' => 0, 'ml' => 2, 'classes' => $icon['animation'] ?? null])
	@endif
@endisset
</a>
@endif