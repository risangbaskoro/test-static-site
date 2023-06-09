<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
        <section class="max-w-4xl mx-auto absolute inset-0 flex justify-center items-center">
            @yield('body')
        </section>
    <footer class="mx-auto p-6 absolute bottom-0 inset-x-0">
        <p class="text-center">©{{ date('Y') }} <a href="https://github.com/risangbaskoro" target="_blank">Risang Baskoro</a></p>
    </footer>
    </body>
</html>
