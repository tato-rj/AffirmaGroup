<section>
    <div class="position-relative">
      <nav class="navbar navbar-expand-lg navbar-parked position-fixed w-100" style="top: 0; left: 0; z-index: 10">
        <a class="navbar-brand ml-3" href="{{route('home')}}">
          @include('components.logo')
        </a>
        <button class="hamburger hamburger--slider navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" style="outline: none;">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto menu">
            <li class="nav-item px-3">
              <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link" href="{{route('industries')}}">Industries</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link" href="{{route('opportunities')}}">Opportunities</a>
            </li>
            <li class="nav-item px-3">

              <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{route('resume.submit')}}" class="btn btn-wide btn-outline-white btn-pill-left">Submit resume</a>
                <a href="{{route('contact')}}" class="btn btn-wide btn-white btn-pill-right">Get in touch</a>
              </div>
              {{-- <a class="nav-link" href="#contact">Contact</a> --}}
            </li>
          </ul>
        </div>
      </nav>
    </div>
</section>