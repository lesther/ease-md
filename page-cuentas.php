<?php
    $hide_footer_form = true;
    get_header();
?>


<section class="section section_pad section_pad-md--sm section_pad-lg--lg section_primary-accent d-flex align-items-center options_bg img_extend-right_hand img_extend-right_hand-center">
    <div class="wrap-container-sm">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-6">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="text-center text-lg-start py-lg-4">
                        <h1 class="title_xl title_hero-2--sm title_hero-3--lg title_weight-black d-block title_light">
                            ¡Ya tienes tu<span class="text_leading-accent">cuenta</span> !
                        </h1>
                        <p class="text_lg-1 text_light">¡Descarga EasyMD app ahora!</p>
                        <div class="mt-4">
                            <a href="https://play.google.com/store/apps/details?id=com.easymdv2.android" target="_blank">
                                <img src="<?php echo get_theme_file_uri() . "/images/playstore.svg" ?>" width="150">
                            </a>
                            <a href="https://apps.apple.com/es/app/easymd/id1579924481" target="_blank">
                                <img src="<?php echo get_theme_file_uri() . "/images/applestore.svg" ?>" width="135">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-lg-none mt-5">
                    <img src="<?php echo get_theme_file_uri() . "/images/mobile-in-hand@3x.png" ?>" class="block h-spacing-offset-left-xxl--md h-spacing-offset-left-lg-1">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="color-divider">
    <div class="color-divider__item color-divider__item-a"></div>
    <div class="color-divider__item color-divider__item-b"></div>
    <div class="color-divider__item color-divider__item-c"></div>
    <div class="color-divider__item color-divider__item-d"></div>
    <div class="color-divider__item color-divider__item-e"></div>
    <div class="color-divider__item color-divider__item-f"></div>
    <div class="color-divider__item color-divider__item-g"></div>
</div>

<?php
    get_footer();
?>