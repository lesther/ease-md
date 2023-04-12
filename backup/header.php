<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name' ); ?> | <?php the_title() ?></title>
    <?php
        wp_head();
    ?>
</head>
<body>
    <nav>
        <div class="nav" id="mainNav" style="<?php echo (is_admin_bar_showing() ? "top: 32px;" : ""); ?>">
            <div class="nav__bgtrigger" id="navtriggerbg"></div>
                <div class="wrap-container nav__container">
                    <div>
                        <a href="/">
                            <img src="<?php echo get_theme_file_uri() . "/images/logo.svg" ?>" alt="ease-md-logo" width="120">
                        </a>
                    </div>
                
                    <button for="close-menu" class="nav__close-label h-hide--xl" id="menuCloseLabel">
                        <img src="<?php echo get_theme_file_uri() . "/images/list.svg" ?>" width="30" alt="menu-icon">
                    </button>
                
                    <div class="nav__links" id="navLinks">
                        <div class="nav__main-links">
                            <a href="/vos-y-tu-familia" class="nav__main-link">Para vos y tu familia</a>
                            <a href="/plan-empresarial" class="nav__main-link">Para Empresas</a>
                            <a href="/signos-vitales" class="nav__main-link">Signos Vitales</a>
                            <a href="/comunidad" class="nav__main-link">Comunidad</a>
                            <a href="/especialistas" class="nav__main-link">Especialistas</a>
                            <a href="/blog" class="nav__main-link">Blog</a>
                        </div>
            
                        <div class="nav__user-links">
                            <a href="#" class="nav__user-btn">
                                Iniciar sesión
                            </a>
                            <a href="#" class="nav__user-btn">
                                Crear cuenta
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>