<?php
    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
        header("Location: /");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your account</title>
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
                        @if (session()->has("success"))
                            <div class="notification is-success">
                                {{ session()->get("success") }}
                            </div>
                        @endif
                        @if (session()->has("error"))
                            <div class="notification is-danger">
                                {{ session()->get("error") }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-content">
                                <div class="content">
                                    <h2 class="title is-2 has-text-centered">🐑 Login</h2>
                                    <p class="subtitle is-5 has-text-centered">Login to continue</p>
                                    <form action="{{ route('loginApi') }}" method="POST">
                                        @csrf
                                        <div class="field">
                                            <label for="email" class="label">Email</label>
                                            <div class="control">
                                                <input type="email" name="email" id="email" class="input" placeholder="email@example.com" required>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label for="password" class="label">Password</label>
                                            <div class="control">
                                                <input type="password" name="password" id="password" class="input" placeholder="********" required>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="control">
                                                <button type="submit" class="button is-primary is-fullwidth">Login</button>
                                            </div>
                                        </div>
                                        <div class="field has-text-centered">
                                            <a href="{{ url('register') }}">Don't have an account?</a>
                                        </div>
                                    </form>
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