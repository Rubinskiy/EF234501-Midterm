<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SheepTalk :: Rant about anything</title>
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
                    <h1 class="title is-1 has-text-centered" style="font-size:84px;">🐑 SheepTalk Forum</h1>
                    <p class="subtitle is-3 has-text-centered">Rant about anything</p>
                    <div class="buttons is-centered">
                        <a href="#" class="button is-primary">
                            <span class="icon">
                                <i class="bi bi-journal-plus"></i>
                            </span>
                            <span>Make a Rant</span>
                        </a>
                        <a href="#" class="button is-info">
                            <span class="icon">
                                <i class="bi bi-journals"></i>
                            </span>
                            <span>View Rants</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="container is-fluid is-segmented">
            <div class="columns is-centered">
                <div class="column is-four-fifths">
                    <h3 class="title is-3" style="text-align: center;">Frequently Asked Questions (FAQ)</h3>
                    <p class="subtitle is-6" style="text-align: center;">
                        Here are some frequently asked questions about the SheepTalk Forum
                    </p>
                    <div style="padding-top: 15px;"></div>
                    <button class="accordion">Is it free?</button>
                    <div class="panel">
                        <br><p>
                            Yes.
                        </p><br>
                    </div>
                    <button class="accordion">What's a rant?</button>
                    <div class="panel">
                        <br><p>
                            A rant is a complaint or criticism about something.
                            It's a way to express your feelings about a particular topic.
                        </p><br>
                    </div>
                    <button class="accordion">What can I rant about?</button>
                    <div class="panel">
                        <br><p>
                            You can rant about anything you want.
                        </p><br>
                    </div>
                </div>
            </div>
        </div>
        
        <x-footer></x-footer>

        <!--<div class="columns is-centered">
            <div class="column is-four-fifths">
                <div class="columns is-centered">
                    <div class="column is-6">
                        <div class="card">
                            <div class="card-content">
                                <div class="content">
                                    <h2 class="title is-2 has-text-centered">CRUD Operations</h2>
                                    <p class="subtitle is-5 has-text-centered">Create, Read, Update and Delete operations</p>
                                    <div class="buttons is-centered">
                                        <a href="#" class="button is-primary">
                                            <span class="icon">
                                                <i class="bi bi-journal-plus"></i>
                                            </span>
                                            <span>Create Post</span>
                                        </a>
                                        <a href="#" class="button is-info">
                                            <span class="icon">
                                                <i class="bi bi-journals"></i>
                                            </span>
                                            <span>View Posts</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-half">
                        <div class="card">
                            <div class="card-content">
                                <div class="content">
                                    <h2 class="title is-2 has-text-centered">Authentication</h2>
                                    <p class="subtitle is-5 has-text-centered">Login and Register</p>
                                    <div class="buttons is-centered">
                                        <a href="#" class="button is-primary">
                                            <span class="icon">
                                                <i class="bi bi-box-arrow-in-right"></i>
                                            </span>
                                            <span>Login</span>
                                        </a>
                                        <a href="#" class="button is-info">
                                            <span class="icon">
                                                <i class="bi bi-person-plus"></i>
                                            </span>
                                            <span>Register</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>