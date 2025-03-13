@extends('layouts.app', ['name' => 'eBook - Choosing a High School in NYC', 'raw' => true])

@push('header')
<meta property="og:title" content="eBook - Choosing a High School in NYC">
<meta property="og:description" content="Your ultimate guide to finding the best high school in the five boroughs of New York City.">
<meta property="og:image" content="{{ asset('images/ebook/cover.jpg') }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Benne&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
<style>
h1 {
  font-family: "Benne", serif;
  font-weight: 700;
  font-style: normal;
  font-size: 4rem;
  letter-spacing: 0;
}

h2, h3, h4, p, button, div {
  font-family: "Nunito", sans-serif;
  font-optical-sizing: auto;
  font-style: normal;
}

h1, h2 {
    font-weight: 700;
}

h3, h4, p, button, div {
    font-weight: 200;
}

.primary-bg {
    background: #1b2939;
}

.secondary-bg {
    background: #e4e2dd;
}

p, .btn {
    font-size: 1.2rem;
}




/* Slider Wrapper */
.slider-wrapper {
    overflow: hidden;
    width: 100%;
    position: relative;
}

/* Slider */
.slider {
    display: flex;
    width: max-content;
    gap: 30px;
    animation: slide 120s linear infinite;
}

/* Slide */
.slide {
    flex: 0 0 auto;
    width: 400px;
}

/* Review Card */
.review-card {
    width: 100%;
    border-radius: 20px;
    background: #fff2d1;
    padding: 2rem;
    text-align: center;
    position: relative;
}

/* Quote Icon */
.quote-icon {
    position: absolute;
    top: -28px;
    width: 56px;
    height: 56px;
    background: #d95e2d;
    color: #fff2d1;
    left: 50%;
    transform: translateX(-50%);
    font-size: 1.6rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Keyframes for Infinite Scroll */
@keyframes slide {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}


#tablet {
/*    transform: translateY(100px);*/
}

#page {
    position: absolute;
    top: 10.2%;
    left: 7.2%;
    width: 85%;
    height: 79.1%;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.menu-item {
    border-top: 3px dotted grey;
}

.menu-item:last-of-type {
    border-bottom: 3px dotted grey;
}

.menu-item:hover {
    background: rgba(253,242,212,0.3);
}

.menu-item[selected] {
    background: rgba(253,242,212,0.8);
}
</style>
@endpush

@section('content')
    @include('ebook.hero')
    @include('ebook.contents')
    @include('ebook.testimonials')

    @include('ebook.previews')

    <footer class="py-4 text-center">
        <small class="opacity-6">Copyright © {{now()->year}}. All rights reserved.</small>
    </footer>

    <div id="floating-buybtn" style="display: none">
        <div class="position-fixed text-center" style="bottom: 40px; left: 50%; transform: translateX(-50%);">
            <p class="small text-red mb-2">60% DISCOUNT ON EARLY PURCHASE</p>
            @include('ebook.buybtn')
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll(".slide");

    // Clone slides to create infinite effect
    slides.forEach(slide => {
        const clone = slide.cloneNode(true);
        slider.appendChild(clone);
    });
});
</script>

<script>
$('#previews-menu .menu-item').click(function() {
    $('#page').css('background-image', 'url('+$(this).data('url')+')');
    $('#previews-menu .menu-item').attr('selected', false);
    $(this).attr('selected', true);
});
</script>

<script type="text/javascript">
let heroHeight = $('#hero').height();
$(window).scroll(function() {
    let scrollTop = $(this).scrollTop();
    
    if (scrollTop > heroHeight) {
        $('#floating-buybtn').fadeIn('fast');
    } else {
        $('#floating-buybtn').hide();
    }
});
</script>
@endpush