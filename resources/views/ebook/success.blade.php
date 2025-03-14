@extends('layouts.app', ['name' => 'eBook - Choosing a High School in NYC', 'raw' => true])

@push('header')
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

h1, h2, h3 {
    font-weight: 700;
}

h4, p, button, div {
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
</style>
@endpush

@section('content')
<section class="secondary-bg h-100vh">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-center px-4">
            <h1 class="text-green">@fa(['icon' => 'check-circle', 'mr' => 0])</h1>
            <h1 class="m-0">Thank you!</h1>
            <h3 class="mb-4">Your purchase was successful</h3>
            <p>Please choose below which format you prefer:</p>
            <div class="d-flex justify-content-center">
                <div><a href="{{route('ebook.download')}}" class="btn btn-outline-primary mx-2">PDF</a></div>
                <div><a href="{{route('ebook.download')}}" class="btn btn-outline-primary mx-2">EPUB</a></div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
@endpush