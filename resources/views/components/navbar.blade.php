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
                <a href="#" class="navbar-item">
                    Forum
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a href="#" class="navbar-link">
                        More
                    </a>

                    <div class="navbar-dropdown">
                        <a href="#" class="navbar-item">
                            About
                        </a>
                        <hr class="navbar-divider">
                        <a href="#" class="navbar-item">
                            Report an issue
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="{{ url('register') }}" class="button is-primary">
                            <strong>Sign up</strong>
                        </a>
                        <a href="{{ url('login') }}" class="button is-light">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>