<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a rant</title>
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
                    <h1 class="title is-1 has-text-centered" style="font-size:84px;">🐑 Make a rant, {{ Auth::user()->name }}</h1>
                    <p class="subtitle is-3 has-text-centered">Type out your thoughts below</p>
                    <form action="{{ route('createApi') }}" method="POST">
                        @csrf
                        <div class="field has-text-centered">
                            <div class="control">
                                <input name="content" class="input is-rounded column is-two-thirds" style="margin: auto;" type="text" placeholder="Type your rant here" required>
                            </div>
                        </div>
                        <div class="field has-text-centered">
                            <div class="control">
                                <button type="submit" class="button is-rounded is-primary is-fullwidth column is-two-thirds" style="margin: auto;">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        <x-footer></x-footer>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>