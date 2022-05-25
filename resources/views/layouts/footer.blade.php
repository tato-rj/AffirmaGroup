<footer class="container-fluid">
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="" style="max-width: 600px;">
                    @include('components.logo', ['theme' => 'dark'])
                    <p class="text-muted">We are a leading recruitment, contract staffing, and workforce solutions firm throughout the US, specialized in the Greater New York City area. ArcNet recruiters understand your needs, your industry, and your language.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 pt-3">
                <h5 class="accent">Company</h5>
                <a class="text-muted d-block mb-1" href="{{route('about')}}">About us</a>
                <a class="text-muted d-block mb-1" href="{{route('contact')}}">Contact</a>
                <a class="text-muted d-block mb-1" href="{{route('contact')}}">Careers</a>
            </div>
            <div class="col-lg-2 col-md-3 col-6 pt-3">
                <h5 class="accent">Resources</h5>
                <a class="text-muted d-block mb-1" href="{{route('opportunities')}}">For job seekers</a>
                <a class="text-muted d-block mb-1" href="{{route('industries')}}">For employers</a>
            </div>
        </div>
    </div>
    <div class="row border-top py-3">
        <div class="col-12 text-muted text-center">
            <small>Copyright © {{now()->year}} {{config('app.name')}}. All rights reserved.</small>
        </div>
    </div>
</footer>