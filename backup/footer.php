
<footer class="section footer">
    <div class="container h-inner-spacing-horizontal-none">
        <div class="footer__content">
            <div>
                <img src="<?php echo get_theme_file_uri() ?>/images/logo-light.svg" alt="" width="80">

                <h2 class="h-spacing-top-xxl title_md">¿Cómo podemos ayudarte?</h2>
        
                <form class="footer__form">
                    <div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div>
                                    <label for="name" class="footer__label">Nombre</label>
                                    <input type="text" name="name" id="name" placeholder="Tu nombre y apellido" class="footer__input" required>    
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div>
                                    <label for="departamento" class="footer__label">Ciudad</label>
                                    <input type="text" name="departamento" id="departamento" placeholder="¿Cuál es tu departamento?" class="footer__input" required>    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <label for="email" class="footer__label">Email</label>
                                    <input type="text" name="email" id="email" placeholder="Tu email" class="footer__input" required>    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <label for="mensaje" class="footer__label">Mensaje</label>
                                    <textarea name="mensaje" id="mensaje" class="footer__input footer__textarea" placeholder="Mensaje" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="footer__submit">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="footer__links mt-md-5">
                <div>
                    <h2 class="footer__headline mb-3">Descubrír</h2>
                    <ul class="footer__list text_lg--md">
                        <li class="mb-md-3"><a href="/vos-y-tu-familia">Para vos y tu familia</a></li>
                        <li class="mb-md-3"><a href="/plan-empresarial">Para empresas</a></li>
                        <li class="mb-md-3"><a href="/comunidad">Comunidad</a></li>
                        <li class="mb-md-3"><a href="/especialistas">Especialistas</a></li>
                        <li class="mb-md-3"><a href="/blog">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="footer__headline mb-3">Acerca de EasyMD</h2>
                    <ul class="footer__list text_lg--md">
                        <li class="mb-md-3"><a href="/politica-de-privacidad">Política de privacidad</a></li>
                        <li class="mb-md-3"><a href="/terminos-y-condiciones">Términos y condiciones</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="footer__headline mb-3">Cuenta</h2>
                    <ul class="footer__list text_lg--md">
                        <li class="mb-md-3"><a href="#">Iniciar sesión</a></li>
                        <li class="mb-md-3"><a href="#">Crear cuenta</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="h-spacing-top-xl">
        <div class="container h-spacing-top-xxl h-inner-spacing-horizontal-none">
            <div class="d-flex flex-column flex-lg-row justify-content-lg-between align-items-center align-items-md-start align-items-lg-center justify-content-center">
                <p class="text-center text-md-start footer__legal">MICROSALUD S.A. EasyMD App. Derechos Reservados.</p>
        
                <div class="footer__social">
                    <a href="#">
                        <img src="<?php echo get_theme_file_uri() ?>/images/instagram.svg" alt="instagram-icon" width="30">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_theme_file_uri() ?>/images/facebook.svg" alt="facebook-icon" width="15">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_theme_file_uri() ?>/images/twitter.svg" alt="twitter-icon" width="30">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_theme_file_uri() ?>/images/linkedin.svg" alt="fb-icon" width="25">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_theme_file_uri() ?>/images/youtube.svg" alt="youtube-icon" width="35">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(  ); ?>
</body>
</html>
    
    