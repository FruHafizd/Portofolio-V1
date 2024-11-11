<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')

</head>

<body class="bg-[#0A0F1C] flex flex-col min-h-screen">
    @include('partials.navigation')

    @include('partials.hero-banner')

    @include('partials.about')

    @include('partials.skill')

    @include('partials.educations')

    @include('partials.experiences')

    @include('partials.project')

    @include('partials.contact')

    <!-- Footer -->
    @include('partials.footer')
</body>

</html>
