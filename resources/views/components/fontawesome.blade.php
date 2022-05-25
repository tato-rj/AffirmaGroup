<i title="{{$title ?? null}}" 
	name="{{$name ?? null}}"
	class="fa{{$fa_type ?? 's'}} 
		   fa-{{$icon}} 
		   text-{{$color ?? null}} 
		   fa-{{$size ?? null}} 
		   mr-{{$mr ?? 2}} 
		   ml-{{$ml ?? null}} 
		   t-2
		   {{$classes ?? null}}"
	style="vertical-align: inherit; {{isset($if) && ! $if ? 'display: none;' : null}} {{$styles ?? null}}"></i>