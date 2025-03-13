<section style="padding-top: 8rem;" class="bg-white">
    <div class="container-fluid p-0">
        <p class="small opacity-6 text-center mb-1">REVIEWS</p>
        <h2 class="text-center mb-4">WHAT PARENTS ARE SAYING</h2>
        <div class="slider-wrapper py-5">
            <div id="slider-container" class="slider">
                @foreach($testimonials as $testimonial)
                <div class="slide">
                    <div class="review-card pt-5">
                        <div class="quote-icon">
                            @fa(['icon' => 'quote-left', 'mr' => 0])
                        </div>
                        <p>"{{$testimonial['review']}}"</p>
                        <p class="m-0"><strong>{{$testimonial['name']}}</strong></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
