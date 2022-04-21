<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ $title ?? 'MIA' }} </title>
    @include('partials.includes.head')
</head>
<body class="index-page bg-gray-200">
@include('partials.components.navbar', [
    'pages' => $pages ?? null
])

@yield('content')

@include('partials.components.footer', [
    'pages' => $pages ?? null
])

@include('partials.includes.footer')
</body>
