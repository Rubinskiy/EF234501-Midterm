<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>An error occurred</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <section class="hero is-medium">
            <div class="hero-body">
                <div class="columns is-centered">
                    <div class="column is-one-third">
                        <div class="card">
                            <div class="card-content">
                                <div class="content">
                                    <h2 class="title is-2 has-text-centered">Error</h2>
                                    @if (session()->has("error"))
                                        <p class="subtitle is-5 has-text-centered">
                                            {{ session()->get("error") }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="field has-text-centered">
                            <a href="{{ url('/') }}">
                                <i class="bi bi-arrow-left"></i> Back Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>