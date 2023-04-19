
<footer class="section section_pad-xs section_primary-accent footer">
    <div class="bottom_fixed-widget">
        <a href="https://wa.me/50578726684" target="_blank">
            <img src="<?php echo get_theme_file_uri() . "/images/whatsapp-icon.png" ?>" alt="whatsapp-icon" width="60">
        </a>
    </div>
    <div class=" <?php echo (!isset($GLOBALS["hide_footer_form"]) ? "wrap-container_lg" : "wrap-container_xl") ?> wrap-container_align-center">
        <?php if(!isset($GLOBALS["hide_footer_form"])): ?>
            <div class="footer__content">
                <div class="text-center mt-3">
                    <div class="d-flex mb-4 gap-4 justify-content-center align-items-center flex-column flex-md-row-reverse">
                        <img src="<?php echo get_theme_file_uri() . "/images/logo-light-2.svg" ?>" alt="ease-md-logo" width="120">
                        <h2 class="title_md title_spacing-none title_lg--sm h-line-height-sm-1 title_light">
                            ¡Contáctanos!
                        </h2>
                    </div>

                    <?php echo do_shortcode('[forminator_form id="44"]'); ?>

                    <a href="mailto:ventas@easymd.co" class="btn_link-light text_lg text_weight-bold mt-4 h-font-sora">ventas@easymd.co</a>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="<?php echo (!isset($GLOBALS["hide_footer_form"]) ? "h-spacing-top-xl" : "") ?> ">
        <div class="container text-center text-lg-start">
            <?php if(isset($GLOBALS["hide_footer_form"])): ?>
                <a href="mailto:ventas@easymd.co" class="btn_link-light text_lg text_weight-bold mb-4 h-font-sora h-width-100 justify-content-center">ventas@easymd.co</a>
            <?php endif; ?>
            <div class="d-flex flex-column flex-lg-row justify-content-lg-between align-items-lg-center h-position-relative">
                <p class="text_sm text_light mb-2 m-lg-0">
                    EasyMD LLC EasyMD App. ©
                </p>
                <div class="d-flex gap-2 align-items-center justify-content-center footer__legal flex-column flex-sm-row">
                    <a href="/politica-y-privacidad" class="btn_link-primary text_sm btn_link-hover-light">
                        Pólitica de privacidad
                    </a>
                    <span class="text_primary text_spacing-none d-none d-sm-block">
                        |
                    </span>
                    <a href="/terminos-y-condiciones" class="btn_link-primary text_sm  btn_link-hover-light">
                        Términos y condiciones
                    </a>
                </div>
                <div class="d-flex gap-4 mb-2 justify-content-center m-lg-0">
                    <a href="https://www.instagram.com/easymd.ni/" target="_blank">
                        <img src="<?php echo get_theme_file_uri() . "/images/instagram.svg" ?>" alt="instagram-icon" width="25">
                    </a>
                    <a href="https://www.facebook.com/easymdnic/" target="_blank">
                        <img src="<?php echo get_theme_file_uri() . "/images/facebook.svg" ?>" alt="facebook-icon" width="10">
                    </a>
                    <a href="https://ni.linkedin.com/company/easymd" target="_blank">
                        <img src="<?php echo get_theme_file_uri() . "/images/linkedin.svg" ?>" alt="linkedin-icon" width="20">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(  ); ?>
</body>
</html>
    
    