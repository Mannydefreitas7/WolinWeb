<nav class="navbar">
    <div class="nav-mobile">
        <a id="nav-toggle" href="#!">
            <span></span>
        </a>
    </div>
    <?php
        wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'menu_class'        => 'nav-list',
            'container'         => 'ul'
            //'before'            =>  '<li>',
            //'after'            =>  '</li>',

        ));
    ?>
</nav>
