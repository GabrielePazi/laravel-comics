@extends('layouts.public')

@section('title', 'HomePage')

@section('content')
    <section>
        <div class="container-fluid vw-100 homepage-container p-0">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="position-relative">
                        <button class="button-primary btn-top position-absolute top-0">CURRENT SERIES</button>
                    </div>
                    <div class="card-container d-flex justify-content-center flex-wrap gap-4 py-5">
                        @foreach ($comics as $comic)
                            <a href="/" class="text-decoration-none">
                                <div class="card rounded-0 bg-transparent border-0" style="width: 8rem;">
                                    <img src="{{ $comic['thumb'] }}" class="card-img-top rounded-0" alt="card">
                                    <div class="card-body px-0">
                                        <h6 class="text-white">{{ $comic['title'] }}</h6>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        <button class="button-primary fw-semibold">LOAD MORE</button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary">
        <div class="container-fluid p-0 vw-100">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="shop d-flex justify-content-evenly gap-5">
                        <div class="d-flex align-items-center gap-3">
                            <img class="shop-icon" src="imgs/buy-comics-digital-comics.png" alt="">
                            <div class="text-white">DIGITAL COMICS</div>
                        </div>

                        <div class="d-flex align-items-center gap-3">
                            <img class="shop-icon" src="imgs/buy-comics-merchandise.png" alt="">
                            <div class="text-white">DC MERCHANDISE</div>
                        </div>

                        <div class="d-flex align-items-center gap-3">
                            <img class="shop-icon" src="imgs/buy-comics-subscriptions.png" alt="">
                            <div class="text-white">SUBSCRIPTION</div>
                        </div>

                        <div class="d-flex align-items-center gap-3">
                            <img class="shop-icon" src="imgs/buy-comics-shop-locator.png" alt=""
                                style="width: 20px;">
                            <div class="text-white">COMIC SHOP LOCATOR</div>
                        </div>

                        <div class="d-flex align-items-center gap-3">
                            <img class="shop-icon" src="imgs/buy-dc-power-visa.svg" alt="">
                            <div class="text-white">DC POWER VISA</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
