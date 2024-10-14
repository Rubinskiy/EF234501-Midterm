<?php
    session_start();
?>
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
                <?php
                    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
                        echo '<div class="navbar-item has-dropdown is-hoverable">
                            <a href="#" class="navbar-link">
                                <i class="bi bi-person-circle" style="font-size: 18px;"></i>' . $_SESSION["name"] . '
                            </a>

                            <div class="navbar-dropdown is-right">
                                <a href="/rants/' . $_SESSION["user_id"] . '" class="navbar-item">
                                    My Rants
                                </a>
                                <hr class="navbar-divider">
                                <a href="/logout" class="navbar-item">
                                    Log out
                                </a>
                            </div>
                        </div>';
                    } else {
                        echo '<div class="navbar-item">
                            <div class="buttons">
                                <a href="/register" class="button is-primary">
                                    <strong>Sign up</strong>
                                </a>
                                <a href="/login" class="button is-light">
                                    Log in
                                </a>
                            </div>
                        </div>';
                    }
                ?>
            </div>
        </div>
    </nav>
</div>