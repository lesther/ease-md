
<footer class="section section_pad-xs section_primary-accent footer">
    <div class="bottom_fixed-widget">
        <a href="#">
            <img src="<?php echo get_theme_file_uri() . "/images/whatsapp-icon.png" ?>" alt="whatsapp-icon" width="60">
        </a>
    </div>
    <div class="wrap-container_lg wrap-container_align-center">
        <div class="footer__content">
            <div class="text-center mt-3">
                <div class="d-flex mb-4 gap-4 justify-content-center align-items-center flex-column flex-md-row-reverse">
                    <img src="<?php echo get_theme_file_uri() . "/images/logo-light-2.svg" ?>" alt="ease-md-logo" width="120">
                    <h2 class="title_md title_spacing-none title_lg--sm h-line-height-sm-1 title_light">
                        ¡Contáctanos!
                    </h2>
                </div>
                <form class="footer__form">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="py-2">
                                <input type="text" name="name" id="name" placeholder="Nombre y apellidos" class="footer__input" required>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="py-2">
                                <input type="text" name="departamento" id="departamento" placeholder="Ciudad" class="footer__input" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-2">
                                <input type="text" name="email" id="email" placeholder="Ciudad" class="footer__input" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-2">
                                <textarea name="mensaje" id="mensaje" class="footer__input" placeholder="Mensaje" rows="4" required></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-2">
                                <button type="submit" class="btn_leading-accent btn_hover-secondary btn_block btn_corner-sm h-font-sora text_weight-bold">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                <a href="mailto:ventas@easymd.co" class="btn_link-light text_lg text_weight-bold mt-4 h-font-sora">ventas@easymd.co</a>
            </div>
        </div>
    </div>
    <div class="h-spacing-top-xl">
        <div class="container text-center text-lg-start">
            <div class="d-flex flex-column flex-lg-row justify-content-lg-between align-items-lg-center h-position-relative">
                <p class="text_sm text_light mb-2 m-lg-0">
                    MICROSALUD S.A. EasyMD App. ©
                </p>
                <div class="d-flex gap-2 align-items-center justify-content-center footer__legal flex-column flex-sm-row">
                    <a href="" class="btn_link-primary text_sm">
                        Pólitica de privacidad
                    </a>
                    <span class="text_primary text_spacing-none d-none d-sm-block">
                        |
                    </span>
                    <a href="" class="btn_link-primary text_sm">
                        Términos y condiciones
                    </a>
                </div>
                <div class="d-flex gap-4 mb-2 justify-content-center m-lg-0">
                    <a href="#">
                        <img src="<?php echo get_theme_file_uri() . "/images/instagram.svg" ?>" alt="instagram-icon" width="25">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_theme_file_uri() . "/images/facebook.svg" ?>" alt="facebook-icon" width="10">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_theme_file_uri() . "/images/linkedin.svg" ?>" alt="fb-icon" width="20">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(  ); ?>
</body>
</html>
    
    