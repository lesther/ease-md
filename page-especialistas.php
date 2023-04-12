<?php
    get_header();
?>

<section class="section section_leading-accent section_pad-xxs top-ad" style="<?php echo (is_admin_bar_showing() ? "top: 32px;" : ""); ?>">
        <div class="wrap-container">
            <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row">
                <h2 class="h-font-sora title_primary-accent title_sm title_spacing-none">Plan Signos Vitales</h2>
                <!-- 14/12/2022 -->
                <a href="#" class="try-button">Proba gratis un mes</a>
            </div>
        </div>
    </section>

    <!-- 17/12/2022 -->
    <section class="section section_leading-light section_pad-top_xs">
        <div class="wrap-container-md">
            <div
                class="section section_pad-bottom_none section_pad-top_xs--md card_theme-1 bg_danger-light">
                <div class="row card_theme-1_container align-items-center">
                    <div class="col-md-6 d-none d-lg-block text-center">
                        <img src="<?php echo get_theme_file_uri() ?>/images/european.png" alt="" width="500">
                    </div>
                    <div class="col">
                        <div class="text-center text-lg-start">
                            <img src="<?php echo get_theme_file_uri() ?>/images/logo.svg" alt="" width="180">
                            <div class="h-spacing-top-xxl">
                                <h1 class="title_lg title_hero--md title_hero-1--xl title_light title_weight-regular">
                                    <span class="text_weight-black">
                                        La única App que mide tus Signos
                                        Vitales.
                                    </span>
                                </h1>
                            </div>
                            <!-- 10/12/22 -->
                            <div class="mt-5">
                                <a href="#">
                                    <img src="<?php echo get_theme_file_uri() ?>/images/playstore.svg" width="150">
                                </a>
                                <a href="#">
                                    <img src="<?php echo get_theme_file_uri() ?>/images/applestore.svg" width="135">
                                </a>
                            </div>
                            <div class="d-lg-none mt-5">
                                <img src="<?php echo get_theme_file_uri() ?>/images/european_mobile.png" alt="" width="400">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section section_lighter section_pad-bottom_none section_pad-md--md section_bg_extend-height_md section_bg_extend section_bg_extend-theme_2">
        <div class="wrap-container-sm">
            <div class="row align-items-center text-center text-md-start">
                <div class="col">
                    <div class="row align-items-center justify-content-center justify-content-md-start mb-4">
                        <div class="col-12 col-md-auto">
                            <img src="<?php echo get_theme_file_uri() ?>/images/plan-signos-vitales--color-icon.png" alt="" width="50">
                        </div>
                        <div class="col-auto">
                            <p class="text text_lg text_xl--md text_primary-accent">
                                Plan Signos Vitales
                            </p>
                        </div>
                    </div>
                    <h2 class="title title_primary-accent title_lg title_hero--md title_hero-1--xl mb-5">
                        Monitorea tu
                        bienestar general
                        día y noche.
                    </h2>
                    <p class="ttext_lg text_xl--md text_primary-accent h-font-sora h-line-height-sm-1">
                        La oxigenación en la sangre dice mucho de nuestro bienestar general. Medí tus Signos Vitales
                        desde la App, registrá y lleva un control de tus resultados en todo momento.
                    </p>
                </div>
                <div class="col-md-5">
                    <div class="section_bg_extend-column text-center">
                        <img src="<?php echo get_theme_file_uri() ?>/images/phone-man-mobile-transparent.png" class="d-md-none phone-man-mobile" width="375">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- last change -->
    <section class="section">
        <div class="wrap-container-sm">
            <div class="h-max-width-lg-1">
                <h2 class="title title_primary-accent title_lg title_hero--md title_hero--xl title_spacing-xl">
                    A tu servicio en todo momento.
                </h2>
                <p class="text_lg text_xl--md text_primary-accent h-font-sora">
                    Las funciones más básicas del cuerpo se miden con los Signos Vitales, los que en una persona sana
                    debieran ser constantes. Pero, cuando hay alguna enfermedad, infección o alteración, las cifras se
                    modifican y varían ampliamente.
                </p>
                <!-- last change -->
                <p class="text_lg text_xl--md text_primary-accent h-font-sora h-font-sora_bold">
                    Medí desde tu dispositivo:
                </p>
            </div>
            <!-- last change -->
            <!-- new metric -->
            <div class="metrics-card h-spacing-top-xxl">
                <div class="metrics-card__item-1 metrics-card_align-end">
                    <div class="metrics-card_container">
                        <h3 class="mb-4">
                            Ritmo cardiaco
                        </h3>
                        <img src="<?php echo get_theme_file_uri() ?>/images/redlines.png" class="metrics-card__img"/>
                    </div>
                </div>
                <div class="metrics-card__item-2 metrics-card_align-end">
                    <div class="metrics-card_container h-height-100">
                        <h3 class="mb-4">
                            Presión sanguínea
                        </h3>
                        <img src="<?php echo get_theme_file_uri() ?>/images/meterpulse.png"  class="metrics-card__img"/>
                    </div>
                </div>
                <div class="metrics-card__item-3 metrics-card_align-end">
                    <div class="metrics-card_container h-height-100">
                        <h3 class="mb-4">
                            Frecuencia respiratoria
                        </h3>
                        <img src="<?php echo get_theme_file_uri() ?>/images/curveline.png"  class="metrics-card__img"/>
                    </div>
                </div>
                <div class="metrics-card__item-4 metrics-card_align-end">
                    <div class="metrics-card_container pb-0">
                        <h3 class="mb-4">
                            Oxigenación
                        </h3>
                        <img src="<?php echo get_theme_file_uri() ?>/images/oxygenation.png"  class="metrics-card__img-md"/>
                    </div>
                </div>
                <div class="metrics-card__item-5 metrics-card_align-end">
                    <div class="metrics-card_container pb-0 h-min-width-md--lg h-height-100">
                        <h3 class="mb-4 mt-lg-4">
                            Nivel de estrés
                        </h3>
                        <img src="<?php echo get_theme_file_uri() ?>/images/stress.png"  class="metrics-card__img-md"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section try section_pad-bottom_none">
        <div class="wrap-container-xs">
            <div class="try__grid">
                <div>
                    <img src="<?php echo get_theme_file_uri() ?>/images/heartfire.png" alt="heartfire-icon" width="100">
                </div>

                <div>
                    <h2 class="title title_lg title_hero--md title_hero--xl title_spacing-xl">
                        Una innovación
                        que registra tus datos
                        más importantes.
                    </h2>
                    <p class="text_lg text_xl--md h-font-sora h-spacing-bottom-none">
                        Cuanta más información tengas sobre tu salud, mejor será tu capacidad para tomar decisiones
                        acertadas. Ponemos en tus manos un mundo de datos relevantes para tu bienestar.
                    </p>
                    <a href="#" class="btn_xl h-corner-sm btn_primary-accent mt-5">
                        <span class="h-font-sora text_lg text_xxl--md text_weight-bold">
                            Probá gratis 1 mes
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container try__container">
            <div class="h-inner-spacing-vertical-xxl">
                <div class="h-inner-spacing-vertical-xxl">
                    <div class="h-inner-spacing-vertical-xxl">
                        <div class="swiper" id="swiper-testimonials-sm">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide try__slide">
                                    <div class="try__card">
                                        <div class="try__image" style="background-image: url('<?php echo get_theme_file_uri() ?>/images/person_1.jpg');">
                                        </div>
                                        <div class="try__content">
                                            <p class="h-spacing-bottom-none">
                                                Me ayuda a controlar
                                                mi rendimiento
                                                durante mi rutina
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide try__slide">
                                    <div class="try__card">
                                        <div class="try__image" style="background-image: url('<?php echo get_theme_file_uri() ?>/images/person_2.jpg');">
                                        </div>
                                        <div class="try__content">
                                            <p>
                                                Llevamos un registro
                                                de nuestro bienestar
                                                general en las noches
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide try__slide">
                                    <div class="try__card">
                                        <div class="try__image" style="background-image: url('<?php echo get_theme_file_uri() ?>/images/person_3.jpg');">
                                        </div>
                                        <div class="try__content">
                                            <p>
                                                Me ayuda a saber que
                                                todo va bien durante
                                                mi embarazo
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide try__slide">
                                    <div class="try__card">
                                        <div class="try__image" style="background-image: url('<?php echo get_theme_file_uri() ?>/images/person_4.jpg');">
                                        </div>
                                        <div class="try__content">
                                            <p>
                                                Revisar mi nivel de
                                                estrés ayuda a revisar
                                                para mi día a día
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide try__slide">
                                    <div class="try__card">
                                        <div class="try__image" style="background-image: url('<?php echo get_theme_file_uri() ?>/images/person_5.jpg');">
                                        </div>
                                        <div class="try__content">
                                            <p>
                                                Me ayuda a tener
                                                mayor control en
                                                mis tratamientos
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section_black">
        <div class="wrap-container-sm">
            <div class="row align-items-center flex-row-reverse text-center text-md-start">
                <div class="col-md-7 col-12">
                    <p class="coming__badge">
                        Próximamente
                    </p>
                    <h2 class="title title_light title_lg title_hero--md title_hero-1--xl mb-5 ">
                        Registra tu temperatura.
                    </h2>
                    <!-- last change -->
                    <p class="text_lg text_light text_xl--md h-font-sora h-spacing-bottom-none h-line-height-md">
                       <span class="h-font-sora h-font-sora_bold"> Revisa tu temperatura a cualquier hora. </span> La App toma el registro de tus datos biométricos para obtener los cambios de temperatura de tu cuerpo en tiempo real desde la cámara de tu dispositivo.
                    </p>
                </div>
                <div class="co-12 col-md">
                    <img src="<?php echo get_theme_file_uri() ?>/images/temperatura.jpg" alt="temperatura">
                </div>
            </div>
        </div>
    </section>

    <section class="section options options_bg-1 options_bg">
        <div class="wrap-container-sm options__container options__container_grid">
            <div class="text-center h-max-width-xl h-spacing-horizontal-auto">
                <img src="images/logo.svg" alt="" class="options__logo">
                <h2 class="options__heading">Plan Signos Vitales.</h2>
                <p class="options__copy">
                    Cuida tu bienestar general día y noche.
                    Donde sea y cuando sea.
                </p>
            </div>
    
            <div class="h-max-width-xl h-spacing-horizontal-auto">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <article class="options__item">
                            <h2 class="options__underline">Individual</h2>
                            <h3>$1.5 al mes</h3>
                            <p class="options__number">$18 al año</p>
                            <ul class="options__list">
                                <li class="options__list-item"><span>Nivel de estrés</span></li>
                                <li class="options__list-item"><span>Oxigenación</span></li>
                                <li class="options__list-item"> <span>Presión sanguínea</span></li>
                                <li class="options__list-item"><span>Presión sanguínea</span></li>
                                <li class="options__list-item"><span>Frecuencia respiratorias</span></li>
                                <li class="options__list-item"><span>Ritmo cardiaco</span></li>
                                <li class="options__list-item"><span>Temperatura</span></li>
                            </ul>
                            <p class="h-spacing-top-lg">
                                Además lleva un control de tu estado desde la App.
                            </p>
                            <p class="text-center">
                                <!-- last change -->
                                <a href="" class="btn_lg btn_leading-accent h-corner-sm mt-3 text_weight-bold">
                                    Probá gratis 1 mes
                                </a>
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section_lighter section_pad-bottom_xs section_bg_extend-height_md section_bg_extend">
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
                        <img src="<?php echo get_theme_file_uri() ?>/images/smartphone-transparent.png" class="d-md-none" width="400">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    get_footer();
?>