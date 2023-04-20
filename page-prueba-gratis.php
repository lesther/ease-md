<?php
    $hide_footer_form = true;
    get_header();
?>


<section class="seection section_pad-bottom_none section_pad-top_sm--sm section_leading-accent d-flex align-items-center h-overflow-hidden">
    <div class="wrap-container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="text-center text-md-start">
                    <p class="text_primary-accent text_lg text_xl--md text_spacing-none text_weight-extra-bold">
                       Bienvenido a Easy MD
                    </p>
                    <h1 class="title_xl title_hero-2--md title_hero-3--lg title_weight-black d-block title_primary-accent">
                        <span class="d-md-block">
                        ¡Comienza
                        </span>
                        tu prueba gratis ahora!
                    </h1>
                </div>
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_theme_file_uri() . "/images/mobile-in-hand-v2@3x.png" ?>" alt="" class="d-block mx-auto h-max-width-sm-1 h-max-width-none--md mt-4 mt-md-0">
            </div>
        </div>
    </div>
</section>

<section class="section section_pad_sm">

    <div class="wrap-container_lg wrap-container_align-center">
        <div class="text-center">
                <div class="d-flex mb-4 gap-4 justify-content-center align-items-center flex-column flex-md-row-reverse">
                    <h2 class="title_md title_spacing-none title_lg--sm h-line-height-sm-1 title_primary-accent">
                        Llena tus datos y crea tu usuario
                    </h2>
                </div>
                <form class="footer__form">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="py-2">
                                <input type="text" name="name" id="name" placeholder="Nombre y apellidos" class="create-account-input" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="py-2">
                                <input type="email" name="correo" id="correo" placeholder="Correo" class="create-account-input" required="">
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="py-2">
                                <input type="text" name="telefono" id="telefono" placeholder="Teléfono" class="create-account-input" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="py-2">
                                <input type="text" name="pais" id="pais" placeholder="País desde donde nos escribes" class="create-account-input" required="">
                            </div>
                        </div>

                        
                        <div class="col-12 col-sm-6">
                            <div class="py-2">
                                <input type="password" name="password" id="password" placeholder="Contraseña" class="create-account-input" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="py-2">
                                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirmar contraseña" class="create-account-input" required="">
                            </div>
                        </div>

                        <div class="checkbox-custom text-start h-spacing-top-sm h-spacing-bottom-sm">
                            <input name="agree" type="checkbox" id="agree_terms" class="checkbox-custom__widget">
                            <label for="agree_terms" id="agreeLabel" class="checkbox-custom__label checkbox-custom__label_rounded">
                                <span class="checkbox-custom__text-label checkbox-custom__text-label_rounded checkbox-custom__text-label_sm">
                                    <span class="checkbox-custom__title checkbox-custom__title_sm text text_primary-accent">
                                        Acepto los términos y condiciones
                                    </span>
                                </span>
                            </label>
                        </div>
                       
                        <div class="col-12">
                            <div class="pt-2">
                                <button type="submit" class="btn_leading-accent btn_hover-secondary btn_block btn_corner-sm h-font-sora text_weight-bold">
                                    Crear cuenta
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>

</section>

<?php
    get_footer();
?>
