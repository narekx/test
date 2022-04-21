@extends('layouts.app', [
    'pages' => $pages,
    'title' => $page->title ?? null
])

@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('{{ asset('img/bg9.jpg') }}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">{{ $page->heading ?? 'Heading' }}</h1>
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
                {{ $page->content1 ?? 'content1' }}
            </div>
        </section>
        <!-- END Section with four info areas left & one card right with image and waves -->

        <!-- Section with four info areas left & one card right with image and waves -->
        <section class="py-7">
            <div class="container">
                {{ $page->content2 ?? 'content2' }}
            </div>
        </section>
        <!-- END Section with four info areas left & one card right with image and waves -->
        </section>
    </div>
@endsection
