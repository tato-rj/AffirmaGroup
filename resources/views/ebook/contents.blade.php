<section style="padding: 8rem 0;">
    <div class="container">
        <p class="small opacity-6 text-center mb-1">DISCOVER</p>
        <h2 class="text-center mb-5">WHAT'S IN THE EBOOK?</h2>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                @include('ebook.item', [
                    'icon' => 'compass',
                    'title' => 'Navigating NYC High Schools',
                    'subtitle' => 'Learn about specialized, screened, and other school types to make informed choices.'
                ])

                @include('ebook.item', [
                    'icon' => 'list-alt',
                    'title' => 'Building a Strong List',
                    'subtitle' => 'Balance dream, target, and safe schools for the best admission chances.'
                ])

                @include('ebook.item', [
                    'icon' => 'edit',
                    'title' => 'SHSAT: What to Know',
                    'subtitle' => 'Understand the test, cutoff scores, and prep tips for specialized schools.'
                ])
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                @include('ebook.item', [
                    'icon' => 'user-check',
                    'title' => 'Screened School Admissions',
                    'subtitle' => 'Learn how grades, lotteries, and assessments impact admission.'
                ])

                @include('ebook.item', [
                    'icon' => 'pen',
                    'title' => 'Writing a Winning Essay',
                    'subtitle' => 'Get expert tips and real examples to craft a standout application.'
                ])

                @include('ebook.item', [
                    'icon' => 'lightbulb',
                    'title' => 'Essential Resources & Tips',
                    'subtitle' => 'Use MySchools, InsideSchools, and expert insights to stay ahead.'
                ])
            </div>
        </div>
    </div>
</section>