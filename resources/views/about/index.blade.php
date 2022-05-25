@extends('layouts.app', ['name' => 'About us'])

@push('header')
{{-- <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet"> --}}

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

@endpush

@section('content')
    @include('components.lead', [
        'video' => 'office-top',
        'title' => 'Our Company', 
        'subtitle' => 'Grow your business with us'])

    <section class="band">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 mx-auto">
                    <h4 class="text-muted mb-5">Recruiters that understand your needs, your industry, and your language.</h4>

                    <div class="mb-5">
                        <h5 class="accent">PROFESSIONALS AT YOUR SERVICE</h5>
                        <p>Our experienced team provides a unique perspective and approach to difficult talent needs and career advancement challenges within your industry. This means our recruiters will understand your needs, your industry, and your language – saving you time and reducing frustration.</p>
                    </div>
                    <div class="mb-5">
                        <h5 class="accent">SUCCESSFULL TRACK RECORD</h5>
                        <p>Our personal experience in the multiple industries makes ArcNet the perfect recruiting option. We screen each candidate with targeted questions allowing us to find the perfect match for each career opportunity.</p>
                    </div>
                    <div>
                        <h5 class="accent">DEMONSTRABLE RESULTS</h5>
                        <p>Our recent success in placing Project Managers, Superintendents, Estimators, Accounting and Finance team members, is a testimonial to our commitment. We strive to make a positive impact and are able to leverage our industry knowledge to do so.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('welcome.sections.contact')
@endsection

@push('scripts')

<script type="text/javascript">

</script>
@endpush