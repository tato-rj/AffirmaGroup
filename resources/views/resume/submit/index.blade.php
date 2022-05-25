@extends('layouts.app', ['name' => 'Submit my resume'])

@push('header')

@endpush

@section('content')
    @include('components.lead', [
        'video' => 'resume',
        'title' => 'Submit my resume', 
        'subtitle' => 'Just fill out the form below and we\'ll be in touch'])
    @include('resume.sections.form')
    @include('welcome.sections.contact')
@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush