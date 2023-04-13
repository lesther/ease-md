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

    <section class="sticky-header">
        <div class="nav" id="mainNav">
            <div class="nav__bgtrigger" id="navtriggerbg">
            </div>
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
                        <a href="/" class="nav__main-link">Plan familiar</a>
                        <a href="/plan-empresarial" class="nav__main-link">Plan empresarial</a>
                        <a href="/signos-vitales" class="nav__main-link">Signos Vitales</a>
                        <a href="https://www.easymd.co/md/encuentra/especialistas" class="nav__main-link">Especialistas</a>
                        <a href="/blog" class="nav__main-link">Blog</a>
                    </div>
        
                    <div class="d-flex flex-column flex-xl-row p-3 p-xl-0 gap-2 text-center">
                        <a href="https://onelink.to/hjqc9u" class="btn_corner-sm btn_primary btn btn_sm px-4 text_weight-bold justify-content-center">
                            Crear Cuenta
                        </a>
                        <a href="https://www.easymd.co/md/auth/login" class="btn_corner-sm btn_outline-primary btn btn_sm px-4 text_weight-bold justify-content-center">
                            Iniciar sesión
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>