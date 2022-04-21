@extends('layouts.app', [
    'pages' => $pages
])

@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('{{ asset('img/bg9.jpg') }}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">Work with an amazing design</h1>
                        <p class="lead mb-4 text-white opacity-8">We’re constantly trying to express ourselves and actualize our dreams. If you have the opportunity to play this game</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->

    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <!-- Section with four info areas left & one card right with image and waves -->
        <section class="py-7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="row justify-content-start">
                            <div class="col-md-6">
                                <div class="info">
                                    <i class="material-icons text-3xl text-gradient text-info mb-3">public</i>
                                    <h5>Fully integrated</h5>
                                    <p>We get insulted by others, lose trust for those We get back freezes</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                    <i class="material-icons text-3xl text-gradient text-info mb-3">payments</i>
                                    <h5>Payments functionality</h5>
                                    <p>We get insulted by others, lose trust for those We get back freezes</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-start mt-4">
                            <div class="col-md-6">
                                <div class="info">
                                    <i class="material-icons text-3xl text-gradient text-info mb-3">apps</i>
                                    <h5>Prebuilt components</h5>
                                    <p>We get insulted by others, lose trust for those We get back freezes</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                    <i class="material-icons text-3xl text-gradient text-info mb-3">3p</i>
                                    <h5>Improved platform</h5>
                                    <p>We get insulted by others, lose trust for those We get back freezes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="d-block blur-shadow-image">
                                    <img src="https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="font-weight-normal">
                                    <a href="javascript:;">Get insights on Search</a>
                                </h5>
                                <p class="mb-0">
                                    Website visitors today demand a frictionless user expericence — especially when using search. Because of the hight standards.
                                </p>
                                <button type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3">Find out more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Section with four info areas left & one card right with image and waves -->
        <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
        <section class="pb-5 position-relative bg-gradient-dark mx-n3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-start mb-5 mt-5">
                        <h3 class="text-white z-index-1 position-relative">The Executive Team</h3>
                        <p class="text-white opacity-8 mb-0">There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s my skill.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="card card-profile mt-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                    <a href="javascript:;">
                                        <div class="p-3 pe-md-0">
                                            <img class="w-100 border-radius-md shadow-lg" src="{{ asset('img/team-5.jpg') }}" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-6 col-12 my-auto">
                                    <div class="card-body ps-lg-0">
                                        <h5 class="mb-0">Emma Roberts</h5>
                                        <h6 class="text-info">UI Designer</h6>
                                        <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="card card-profile mt-lg-4 mt-5">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                    <a href="javascript:;">
                                        <div class="p-3 pe-md-0">
                                            <img class="w-100 border-radius-md shadow-lg" src="{{ asset('img/bruce-mars.jpg') }}" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-6 col-12 my-auto">
                                    <div class="card-body ps-lg-0">
                                        <h5 class="mb-0">William Pearce</h5>
                                        <h6 class="text-info">Boss</h6>
                                        <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6 col-12">
                        <div class="card card-profile mt-4 z-index-2">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                    <a href="javascript:;">
                                        <div class="p-3 pe-md-0">
                                            <img class="w-100 border-radius-md shadow-lg" src="{{ asset('img/ivana-squares.jpg') }}" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-6 col-12 my-auto">
                                    <div class="card-body ps-lg-0">
                                        <h5 class="mb-0">Ivana Flow</h5>
                                        <h6 class="text-info">Athlete</h6>
                                        <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="card card-profile mt-lg-4 mt-5 z-index-2">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                    <a href="javascript:;">
                                        <div class="p-3 pe-md-0">
                                            <img class="w-100 border-radius-md shadow-lg" src="{{ asset('img/ivana-square.jpg') }}" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-6 col-12 my-auto">
                                    <div class="card-body ps-lg-0">
                                        <h5 class="mb-0">Marquez Garcia</h5>
                                        <h6 class="text-info">JS Developer</h6>
                                        <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
        <section class="pt-4 pb-6" id="count-stats">
            <div class="container">
                <div class="row mb-7">
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img class="w-100 opacity-7" src="{{ asset('img/logos/gray-logos/logo-coinbase.svg') }}" alt="logo">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img class="w-100 opacity-7" src="{{ asset('img/logos/gray-logos/logo-nasa.svg') }}" alt="logo">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img class="w-100 opacity-7" src="{{ asset('img/logos/gray-logos/logo-netflix.svg') }}" alt="logo">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img class="w-100 opacity-7" src="{{ asset('img/logos/gray-logos/logo-pinterest.svg') }}" alt="logo">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img class="w-100 opacity-7" src="{{ asset('img/logos/gray-logos/logo-spotify.svg') }}" alt="logo">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                        <img class="w-100 opacity-7" src="{{ asset('img/logos/gray-logos/logo-vodafone.svg') }}" alt="logo">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
