<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View all rants</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <x-navbar></x-navbar>

        <h1 class="title is-1 has-text-centered" style="font-size:36px;">🐑 View all rants</h1>
        <p class="subtitle is-6 has-text-centered">People can be awful</p>
        <div class="has-text-centered">
            <a href="{{ route('create') }}" class="button is-primary is-rounded" style="margin-bottom: 20px;">You can be too</a>
        </div>

        @if (session()->has("success"))
            <div class="notification is-success">
                {{ session()->get("success") }}
            </div>
        @endif
        @if (session()->has("info"))
            <div class="notification is-info">
                {{ session()->get("info") }}
            </div>
        @endif
        
        <section class="hero is-small">
            <div class="hero-body">
                <div class="container is-fullwidth">
                    <div class="columns is-multiline is-centered">
                        @if(count($posts) == 0)
                            <div class="column is-fullwidth my-6">
                                <p class="subtitle is-4 has-text-centered has-text-grey">No posts found</p>
                            </div>
                        @endif
                        @foreach($posts as $post)
                            <div class="column is-one-third is-fullwidth">
                                <div class="box" style="border: solid 1px #666666; border-radius: 4px; margin-bottom: 20px; width: 100%; padding: 36px 36px;">
                                    <p class="title is-4">“{{ $post->content }}”</p>
                                    <p class="subtitle is-6 mt-4">By <a href="{{ route('userRants', ['user_id' => $post->user_id]) }}">{{ $post->user_name }}</a> on {{ $post->created_at->format('F j, Y g:i A') }}</p>
                                    @if(Auth::id() == $post->user_id)
                                        <form action="{{ route('deleteApi', ['post_id' => $post->id]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="button is-small is-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        
        <x-footer></x-footer>
        
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>