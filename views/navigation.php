<header>
    <nav>
    	<div id="nav-in">
            <ul>
                <a href="#home" id="nav-home"><li>Home</li></a>
                <a href="#about" id="nav-about"><li>About me</li></a>
                <a href="#contact" id="nav-contact"><li>Contact</li></a>
                <?php if (Session::get('loggedIn') == true) : ?>
                    <?php if (Session::get('type') == 2 or Session::get('type') == 1) { ?>
                        <a href="/admin" id="nav-admin"><li>Administracja</li></a>
                    <?php } ?>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>