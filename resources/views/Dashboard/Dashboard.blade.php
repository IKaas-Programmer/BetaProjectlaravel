<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Laravel Kelompok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
        @include('Dashboard.navbar')
        {{-- 
        <div class="container md-4">
            <div class="row">
            <div class="col">
                <h1>Project Laravel Kelompok</h1>
                <p>Selamat datang di project Laravel kelompok kami. Di sini Anda akan menemukan berbagai informasi dan fitur menarik yang kami tawarkan.</p>
            </div>
            </div>
        </div>
        --}}
    </header>

    <main>
        <div class="container-md">
            @yield('main')
        </div>
    </main>

    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
