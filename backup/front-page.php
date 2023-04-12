<?php
    get_header();
?>

<section class="section section_leading-accent py-3 top-ad" style="<?php echo (is_admin_bar_showing() ? "top: 32px;" : ""); ?>">
    <div class="wrap-container">
        <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row">
            <h1 class="h-font-sora title_primary-accent title_sm title_spacing-none">Plan Individual</h1>
            <a href="#" class="btn btn_sm btn_primary-accent text_weight-bold">¡Prueba 1 mes gratis!</a>
        </div>
    </div>
</section>

<section class="section section_pad-bottom_none section_pad-top_xs">
    <div class="wrap-container-sm">
        <div class="row align-items-center">
            <div class="col-md-6 d-none d-md-block">
                <img src="<?php echo get_theme_file_uri() . "/images/doctor_and_patient_md.png" ?>" alt="" class="d-block">
            </div>
            <div class="col">
                <div class="text-center text-md-start">
                    <h2 class="title_sm title_lg--md title_hero--xl title_primary-accent title_weight-regular title_spacing-md">
                        <span class="title_xxl title_hero--sm title_hero-2--xl title_weight-black d-block">
                            Cuidarte
                        </span>
                        nunca fue tan fácil
                    </h2>
                    <p class="text_primary-accent text_lg text_xl--md text_spacing-none">
                        Todos los <b class="text_weight-black">servicios de salud</b>

                        <span class="d-md-block">
                            <b class="text_primary">para tu familia</b> ¡en una sola app!
                        </span>
                    </p>
                    <p class="text_primary-accent text_lg text_xl--md  text_spacing-none">
                    </p>
                    <div class="mt-4">
                        <a href="#">
                            <img src="<?php echo get_theme_file_uri() ?>/images/playstore.svg" width="150">
                        </a>
                        <a href="#">
                            <img src="<?php echo get_theme_file_uri() ?>/images/applestore.svg" width="135">
                        </a>
                    </div>

                    <div class="d-md-none">
                        <img src="<?php echo get_theme_file_uri() ?>/images/doctor_and_patient_sm.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section_primary-accent">
    <div class="wrap-container">
        <h2 class="title title_light title_lg title_hero-1--md title_hero--xl title_align-center">Beneficios exclusivos</h2>
        <p class="text_light text_md text_lg--sm text_align-center text_spacing-none">
            Conectamos todos los servicios de salud en un solo lugar para <b class="text_weight-black">ahorrarte tiempo y dinero.</b>
        </p>
        <div class="benefits__perks mt-5">
            <article class="benefits__perk-item">
                <img src="<?php echo get_theme_file_uri() ?>/images/emergency-kit.svg" alt="" class="benefits__perk-icon">
                <p class="title_sm title_primary-accent title_spacing-sm mt-2 title_weight-black">
                    Médicos 24/7
                </p>
                <p class="text_primary-accent text_md h-line-height-sm-1">
                    Consultas médicas online ilimitadas 24/7. Al instante, donde sea, cuando sea.
                </p>
            </article>
            <article class="benefits__perk-item">
                <img src="<?php echo get_theme_file_uri() ?>/images/heart.svg" alt="" class="benefits__perk-icon">
                <p class="title_sm title_primary-accent title_spacing-sm mt-2 title_weight-black">
                    Psicología
                </p>
                <p class="text_primary-accent text_md h-line-height-sm-1">
                    Consultas psicológicas ilimitadas por videollamada o chat desde tu celular.
                </p>
            </article>
            <article class="benefits__perk-item">
                <img src="<?php echo get_theme_file_uri() ?>/images/white-cross.svg" alt="" class="benefits__perk-icon">
                <p class="title_sm title_primary-accent title_spacing-sm mt-2 title_weight-black">
                    Farmacia
                </p>
                <p class="text_primary-accent text_md h-line-height-sm-1">
                    Descuentos diarios y delivery en todas las categorías de farmacia.
                </p>
            </article>
            <article class="benefits__perk-item">
                <img src="<?php echo get_theme_file_uri() ?>/images/chemistry.svg" alt="" class="benefits__perk-icon">
                <p class="title_sm title_primary-accent title_spacing-sm mt-2 title_weight-black">
                    Laboratorio
                </p>
                <p class="text_primary-accent text_md h-line-height-sm-1">
                    Descuentos diarios y laboratorio a domicilio. ¡No más filas!
                </p>
            </article>
            <article class="benefits__perk-item">
                <img src="<?php echo get_theme_file_uri() ?>/images/brocoli.svg" alt="" class="benefits__perk-icon">
                <p class="title_sm title_primary-accent title_spacing-sm mt-2 title_weight-black">
                    Nutrición
                </p>
                <p class="text_primary-accent text_md h-line-height-sm-1">
                    Consultas con especialistas en nutrición. ¡Lleva un plan alimenticio personalizado!
                </p>
            </article>
            <article class="benefits__perk-item">
                <img src="<?php echo get_theme_file_uri() ?>/images/tooth.svg" alt="" class="benefits__perk-icon">
                <p class="title_sm title_primary-accent title_spacing-sm mt-2 title_weight-black">
                    Odontología
                </p>
                <p class="text_primary-accent text_md h-line-height-sm-1">
                    Descuentos exclusivos en tratamientos dentales. ¡Cuidamos de tu sonrisa!
                </p>
            </article>
            <article class="benefits__perk-item">
                <img src="<?php echo get_theme_file_uri() ?>/images/lotus.svg" alt="" class="benefits__perk-icon">
                <p class="title_sm title_primary-accent title_spacing-sm mt-2 title_weight-black">
                    Wellness
                </p>
                <p class="text_primary-accent text_md h-line-height-sm-1">
                    Descuentos en spas, tiendas naturistas, yoga, productos fit, cuidados de la piel y más.
                </p>
            </article>
            <article class="benefits__perk-item">
                <img src="<?php echo get_theme_file_uri() ?>/images/glasses-icons.svg" alt="" class="benefits__perk-icon">
                <p class="title_sm title_primary-accent title_spacing-sm mt-2 title_weight-black">
                    Ópticas
                </p>
                <p class="text_primary-accent text_md h-line-height-sm-1">
                    Descuentos en servicios y productos de ópticas.
                </p>
            </article>
            <article class="benefits__perk-item">
                <img src="<?php echo get_theme_file_uri() ?>/images/physiotherapy-icons.svg" alt="" class="benefits__perk-icon">
                <p class="title_sm title_primary-accent title_spacing-sm mt-2 title_weight-black">
                    Fisioterapia
                </p>
                <p class="text_primary-accent text_md h-line-height-sm-1">
                    Descuentos y beneficios en fisioterapia y tratamientos a domicilio.
                </p>
            </article>
            <article class="benefits__perk-item">
                <img src="<?php echo get_theme_file_uri() ?>/images/stethoscope-icons.svg" alt="" class="benefits__perk-icon">
                <p class="title_sm title_primary-accent title_spacing-sm mt-2 title_weight-black">
                    Especialistas
                </p>
                <p class="text_primary-accent text_md h-line-height-sm-1">
                    Descuentos en consultas con nuestra red de médicos especialistas.
                </p>
            </article>
            <article class="benefits__perk-item">
                <img src="<?php echo get_theme_file_uri() ?>/images/emergency-icons.svg" alt="" class="benefits__perk-icon">
                <p class="title_sm title_primary-accent title_spacing-sm mt-2 title_weight-black">
                    Emergencia
                </p>
                <p class="text_primary-accent text_md h-line-height-sm-1">
                    Descuentos en ambulancia, hospitalización, urgencias ¡y más!
                </p>
            </article>
        </div>
    </div>
</section>

<section class="section section_pad-top_none section_primary-accent">
    <div class="wrap-container-sm">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-5">
                <div class="d-flex align-items-center">
                    <div class="text-center text-lg-start py-lg-4">
                        <h2 class="title_xl title_hero-1--md title_light mt-4">
                            ¡Tú decides!
                        </h2>
                        <h3 class="title_lg h-line-height-sm-1 title_light title_spacing-lg h-max-width-sm-1--lg pe-3">
                            Plan individual o plan familiar
                        </h3>
                        <p class="text_lg text_light h-line-height-sm-1">
                            Con el plan familiar, tú y hasta 3 personas más podrán tener un perfil individual y contar con los beneficios exlcusivos, además agregar a niños menores de 16 años y adultos mayores no generará costo adicional.
                        </p>
                        <a href="#" class="btn_lg h-corner-sm btn_primary btn_hover-secondary mt-3 py-3">
                            <b class="h-font-sora text_primary-accent text_lg-1">
                                ¡Prueba 1 mes gratis!
                            </b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section options options_bg-1 options_bg">
    <div class="wrap-container-sm options__container options__container_grid">
        <div class="text-center mb-5">
            <h2 class="title title_primary-accent title_lg title_hero--md title_hero--xl title_align-center">
                Elige el plan
                <span class="d-block">
                    que más te conviene
                </span>
            </h2>
            <p class="text_primary-accent text_md text_lg--sm text_align-center">
                Cancela cuando quieras, ¡sin compromisos!
            </p>
        </div>

        <div class="h-max-width-xl h-spacing-horizontal-auto">
            <div class="row">
                <div class="col-12 col-md-6">
                    <article class="options__item">
                        <h2>Individual</h2>
                        <h3>$4.95 al mes</h3>
                        <p class="options__number">$54.95 al año</p>
                        <ul class="options__list">
                            <li class="options__list-item"><span>Consultas médicas 24/7</span></li>
                            <li class="options__list-item"><span>Psicología ilimitada</span></li>
                            <li class="options__list-item"> <span>Descuentos en red de especialsitas</span></li>
                            <li class="options__list-item"><span>Descuentos en farmacia</span></li>
                            <li class="options__list-item"><span>Descuentos con nutriólogos</span></li>
                            <!-- last change -->
                            <li class="options__list-item"><span>Descuentos en clínicas dentales</span></li>
                            <li class="options__list-item"><span>Descuentos en ópticas</span></li>
                            <li class="options__list-item"><span>Descuentos en laboratorio</span></li>
                            <li class="options__list-item"><span>Laboratorio a domicilio</span></li>
                            <li class="options__list-item"><span>Descuentos en Fisioterapia</span></li>
                            <li class="options__list-item"><span>Descuentos en Wellness</span></li>
                        </ul>
                        <p class="h-spacing-top-lg">
                            Agregá a niños menores de 16 años y adultos de la tercera edad sin costo por plan individual.*
                        </p>
                        <div class="mt-auto">
                            <div class="divider_primary-accent">
                            </div>
                            <p class="text-center text_spacing-none">
                                <!-- last change -->
                                <a href="" class="btn_lg btn_leading-accent h-corner-sm mt-3 text_weight-bold">
                                    Probá un mes gratis
                                </a>
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-md-6">
                    <article class="options__item">
                        <h2>Familiar</h2>
                        <h3>$7.99 al mes</h3>
                        <p class="options__number">$87.89 al año</p>
                        <ul class="options__list">
                            <li class="options__list-item">Consultas médicas 24/7</li>
                            <li class="options__list-item">Psicología ilimitada</li>
                            <li class="options__list-item">Descuentos en red de especialsitas</li>
                            <li class="options__list-item">Descuentos en farmacia</li>
                            <li class="options__list-item">Descuentos con nutriólogos</li>
                            <li class="options__list-item">Descuentos en clínicas dentales</li>
                            <li class="options__list-item">Descuentos en ópticas</li>
                            <li class="options__list-item">Descuentos en laboratorio</li>
                            <li class="options__list-item">Laboratorio a domicilio</li>
                            <li class="options__list-item">Descuentos en Fisioterapia</li>
                            <li class="options__list-item">Descuentos en Wellness</li>
                        </ul>
                        <h3 class="h-spacing-top-lg">Hasta 4 cuentas</h3>
                        <p class="text_sm">
                            Ahorrás $11.85 al mes.
                            Compartílo con hasta tres personas más.
                        </p>
                        <div class="mt-auto">
                            <div class="divider_primary-accent">
                            </div>
                            <p class="text-center text_spacing-none">
                                <!-- last change -->
                                <a href="" class="btn_lg btn_leading-accent h-corner-sm mt-3 text_weight-bold">
                                    Probá un mes gratis
                                </a>
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section_leading-accent testimonials">
    <div class="swiper" id="swiper-testimonials">
        <div class="swiper-wrapper">
            <div class="swiper-slide testimonals__slide">
                <div class="testimonials__card">
                    <article>
                        <div class="testimonials__summary">
                            <div class="testimonials__user">
                                <div class="testimonials__img" style="background-image: url('<?php echo get_theme_file_uri() ?>/images/image__5.png');"></div>
                                <div class="testimonials__sumtext">
                                    <h1 class="testimonials__heading">
                                        María López
                                    </h1>
                                    <p class="testimonials__job">
                                        Médico General/Madre
                                    </p>
                                </div>
                            </div>
    
                            <p>
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                            </p>
                        </div>

                        <p class="testimonials__quote">
                            “EasyMD App me ha facilitado la vida,  puedo tomarme a mi y a mi familia nuestros Signos Vitales e incluso saber nuestro nivel de estres al instante, ademas me permite brindarle consultas psicologicas a mis hijos de forma ilimitada. ”
                        </p>
                    </article>
                </div>
            </div>

            <div class="swiper-slide testimonals__slide">
                <div class="testimonials__card">
                    <article>
                        <div class="testimonials__summary">
                            <div class="testimonials__user">
                                <div class="testimonials__img" style="background-image: url('<?php echo get_theme_file_uri() ?>/images/image__3.png');"></div>
                                <div class="testimonials__sumtext">
                                    <h1 class="testimonials__heading">
                                        Jesús Salazar
                                    </h1>
                                    <p class="testimonials__job">
                                        Freelancer
                                    </p>
                                </div>
                            </div>
    
                            <p>
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                            </p>
                        </div>


                        <p class="testimonials__quote">
                            “Hice una consulta a media noche por alta fiebre y el proceso fue rápido y fácil. El médico que me atendió obtuvo un diagnostico muy certero y fue muy profesional. Me envió
                            la receta y una toma de muestra a domicilio para descartar COVID, todo desde EasyMD App.”
                        </p>
                    </article>
                </div>
            </div>

            <div class="swiper-slide testimonals__slide">
                <div class="testimonials__card">
                    <article>
                        <div class="testimonials__summary">
                            <div class="testimonials__user">
                                <div class="testimonials__img" style="background-image: url('<?php echo get_theme_file_uri() ?>/images/image__4.png');"></div>
                                <div class="testimonials__sumtext">
                                    <h1 class="testimonials__heading">
                                        Levi Soto
                                    </h1>
                                    <p class="testimonials__job">
                                        Diseñador gráfico
                                    </p>
                                </div>
                            </div>
    
                            <p class="testimonials__star">
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                                <img src="<?php echo get_theme_file_uri() ?>/images/star.svg" alt="" width="20">
                            </p>
                        </div>

                        <p class="testimonials__quote">
                            “EasyMD me ha servido para darme la oportunidad de cuidar mejor de mi salud y ver lo importante que es darle un espacio a mi cuerpo y a mi mente, para mi no hay nada mejor que tener una salud mental estable y con EasyMD App he podido trabajar en ello.”
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section section_pad-bottom_xs section_bg_extend-height_md section_bg_extend">
    <div class="wrap-container">
        <div class="row align-items-center flex-row-reverse text-center text-md-start">
            <div class="col">
                <!-- last change -->
                <h2 class="title title_primary-accent title_lg title_hero--md title_hero-1--xl ">
                    Un nuevo servicio de salud creado para tod@s.
                </h2>
                <a href="#" class="btn_xl h-corner-sm btn_primary-accent mt-3 mb-5">
                    <span class="h-font-sora text_lg text_xxl--md text_weight-bold">
                        Descargá Gratis
                    </span>
                </a>

                <div class="presentation__cta">
                    <p class="text text_lg-1 text_weight-bold h-font-sora text_primary-accent">iPhone | Android | iPad | Tablet</p>
                    <div class="d-flex gap-2 justify-content-center justify-content-md-start">
                        <a href="#">
                            <img src="<?php echo get_theme_file_uri() ?>/images/playstore.svg" width="250">
                        </a>
                        <a href="">
                            <img src="<?php echo get_theme_file_uri() ?>/images/applestore.svg" width="225">
                        </a>
                    </div>
                    <a href="#">
                    </a>
                    <a href="#">
                    </a>
                </div>
            </div>
            <div class="col-md-5 text-start text-md-center">
                <div class="section_bg_extend-column">
                    <img src="<?php echo get_theme_file_uri() ?>/images/smartphone-transparent.png" class="d-md-none" width="400"/>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    get_footer();
?>