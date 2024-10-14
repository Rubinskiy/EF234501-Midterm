<div style="padding-bottom: 25px;">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <b>🐑 SheepTalk</b>
            </a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbar" class="navbar-menu">
            <div class="navbar-start">
                <a href="{{ route('rants') }}" class="navbar-item">
                    Forum
                </a>

                <a href="{{ route('about') }}" class="navbar-item">
                    About
                </a>
            </div>

            <div class="navbar-end">
                @if (Auth::check())
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a href="#" class="navbar-link">
                            <i class="bi bi-person-circle" style="font-size: 18px;"></i>{{ Auth::user()->name }}
                        </a>

                        <div class="navbar-dropdown is-right">
                            <a href="{{ route('userRants', ['user_id' => Auth::user()->id]) }}" class="navbar-item">
                                My Rants
                            </a>
                            <a href="{{ route('create') }}" class="navbar-item">
                                Make a rant
                            </a>
                            <hr class="navbar-divider">
                            <a href="{{ route('logout') }}" class="navbar-item">
                                Log out
                            </a>
                        </div>
                    </div>
                @else
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="{{ route('register') }}" class="button is-primary">
                                <strong>Sign up</strong>
                            </a>
                            <a href="{{ route('login') }}" class="button is-light">
                                Log in
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </nav>
</div>