<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register an account</title>
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
                                    <h2 class="title is-2 has-text-centered">🐑 Register</h2>
                                    <p class="subtitle is-5 has-text-centered">Register a new account</p>
                                    <form action="#" method="POST">
                                        @csrf
                                        <div class="field">
                                            <label for="name" class="label">Name</label>
                                            <div class="control">
                                                <input type="text" name="name" id="name" class="input" placeholder="John Doe" required>
                                            </div>
                                        </div>
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
                                            <label for="password" class="label">Retype Password</label>
                                            <div class="control">
                                                <input type="password" name="retype_password" id="retype_password" class="input" placeholder="********" required>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="control">
                                                <button type="submit" class="button is-primary is-fullwidth">Register</button>
                                            </div>
                                        </div>
                                        <div class="field has-text-centered">
                                            <a href="{{ url('login') }}">Already have an account?</a>
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