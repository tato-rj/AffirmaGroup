@extends('layouts.app', ['name' => 'Industries'])

@push('header')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

@endpush

@section('content')
    @include('components.lead', [
        'video' => 'factory',
        'title' => 'Industries', 
        'subtitle' => 'Our areas of expertise'])

    <section class="band">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto">
                    <div class="mb-5">
                        <h4 class="text-muted mb-4">ArcNet Innovation provides its clients with a focused and refined process.</h4>

                        <p>Our industry specialists work with you to best map out your needs so we can deliver a custom solution based on the business and key market trends. By taking the time to get to know your company’s unique culture and goals, we are able to develop the right hiring strategy to address your challenges and provide only the best professionals that fit your needs, fully vetting each candidate that walks through the door.</p>
                    </div>

                    <h5 class="accent">INDUSTRIES AT A GLANCE</h5>
                    <ul>
                        @foreach($industries as $industry)
                        <li class="lead mb-1">{{$industry->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('opportunities.band')
    @include('welcome.sections.contact')
@endsection

@push('scripts')

<script type="text/javascript">

</script>
@endpush