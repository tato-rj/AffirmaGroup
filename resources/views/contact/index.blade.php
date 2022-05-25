@extends('layouts.app', ['name' => 'Contact us'])

@push('header')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

@endpush

@section('content')
    @include('components.lead', [
        'video' => 'contact',
        'title' => 'Contact us', 
        'subtitle' => 'Grow your business with us'])

    @include('contact.sections.form')
@endsection

@push('scripts')

<script type="text/javascript">

</script>
@endpush