<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{config('app.name')}}</title>
</head>
<body>

    @include('components.header')

    @include('components.slider')
    
    <main>
        {{ $slot }}
    </main>

    @include('components.footer')
    
    
    <script src="{{ asset('js/dropdown.js') }}"></script>
</body>
</html>