<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About this project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <x-navbar></x-navbar>
        
        <section class="hero is-medium">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title is-1 has-text-centered" style="font-size:84px;">About this project</h1>
                    <p class="subtitle is-4 has-text-centered">
                        Awesome project by Bob and Abhyasa 🐑💯💯<br>
                        Project created for Framework Programming Class<br><br>
                        <a href="https://github.com/Rubinskiy/EF234501-Midterm" target="_blank" class="button is-info is-medium">View on GitHub&nbsp;<i class="bi bi-github"></i></a>
                    </p>
                </div>
            </div>
        </section>
        
        <x-footer></x-footer>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>