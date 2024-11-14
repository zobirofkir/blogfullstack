<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="icon" href="{{ asset('images/icon/icon.png') }}">
        
        <meta name="description" content="Welcome to {{ config('app.name') }} - A blog sharing insightful articles, tutorials, and news on technology, programming, and web development.">
        <meta name="author" content="Your Name or Company">
        <meta name="keywords" content="blog, programming, technology, tutorials, web development, articles, coding, development, Laravel, JavaScript, PHP">
        
        <meta property="og:title" content="{{ config('app.name') }}">
        <meta property="og:description" content="Explore articles, tips, and tutorials on web development, technology, and more on {{ config('app.name') }}.">
        <meta property="og:image" content="{{ asset('images/icon/icon.png') }}">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:type" content="website">
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ config('app.name') }}">
        <meta name="twitter:description" content="Learn from insightful articles and tutorials on web development and technology at {{ config('app.name') }}.">
        <meta name="twitter:image" content="{{ asset('images/icon/icon.png') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ $title }}</title>
    </head>
<body>

        
    @include('components.header')
    @include('components.bar-categories')
    @include('components.search')
    
    <main>
        {{ $slot }}
    </main>

    @include('components.newsletter')
    @include('components.footer')

    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>