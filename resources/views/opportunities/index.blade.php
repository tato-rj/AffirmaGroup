@extends('layouts.app', ['name' => 'Opportunities'])

@push('header')
@endpush

@section('content')
    @include('components.lead', [
        'video' => 'office-team',
        'title' => 'Opportunities', 
        'subtitle' => 'Apply for your next job here'])

    <section class="band">
        <div class="container">
            <div class="row"> 
                <div class="col-12 text-center text-muted mb-3">
                    We currently have {{$opportunities->count()}} open positions
                </div>
                @foreach($opportunities as $opportunity)
                    @include('opportunities.card', [
                            'industry' => $opportunity->field->industry->name, 
                            'position' => $opportunity->position])
                @endforeach
            </div>
        </div>
    </section>

    @include('welcome.sections.contact')
@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush