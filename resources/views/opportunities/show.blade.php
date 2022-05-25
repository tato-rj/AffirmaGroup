<div class="modal fade modal-opportunity" id="opportunity-{{$opportunity->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header d-apart p-4">
        <h4 class="modal-title font-weight-bold m-0" id="exampleModalLabel">@fa(['icon' => 'id-card', 'mr' => 3, 'color' => 'secondary']){{$opportunity->position}}</h4>

        <button type="button" class="close m-0 text-dark p-0" data-dismiss="modal" aria-label="Close">
          @fa(['icon' => 'times', 'mr' => 0])
        </button>
      </div>
      <div class="modal-body p-4">
        <div class="d-apart flex-wrap text-muted p-2">
          <div class="mb-2">@fa(['icon' => 'map-marker-alt']){{$opportunity->location}}</div>
          <div class="mb-2">@fa(['icon' => 'briefcase']){{$opportunity->type}} position</div>
        </div>
        <div class="p-2 mb-5" style="white-space: pre-wrap;">{{$opportunity->description}}</div>

        <div class="mb-5">
          <h5 class="font-weight-bold border-bottom border-1x pb-3 mb-4">Responsibilities include</h5>
          <ul>
            @foreach($opportunity->responsibilities as $responsibility)
            <li class="mb-1">{{$responsibility}}</li>
            @endforeach
          </ul>
        </div>

        <div>
          <h5 class="font-weight-bold border-bottom border-1x pb-3 mb-4">Qualifications include</h5>
          <ul>
            @foreach($opportunity->qualifications as $qualification)
            <li class="mb-1">{{$qualification}}</li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" href="{{route('resume.submit', ['select' => $opportunity->id])}}" class="btn btn-primary btn-wide">@fa(['icon' => 'pen'])Apply for this position</button>
      </div>
    </div>
  </div>
</div>