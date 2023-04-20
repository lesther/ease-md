<?php 
get_header(); 
?>
<section class="section section_leading-accent py-3 sticky-header_breadcrumb">
    <div class="wrap-container">
        <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row">
            <h2 class="h-font-sora title_primary-accent title_sm title_spacing-none">Blog</h2>
            <a href="https://onelink.to/hjqc9u" class="btn btn_sm btn_primary-accent text_weight-bold">¡Prueba 1 mes gratis!</a>
        </div>
    </div>
</section>
<section class="section section_pad section_pad-md--sm section_pad-sm-1--lg section_primary-accent d-flex align-items-center">
    <div class="wrap-container-sm">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        <h1 class="title_xl title_hero-2--sm title_hero-3--lg title_weight-black d-block title_light">
                            Blog
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="color-divider">
    <div class="color-divider__item color-divider__item-stretch color-divider__item-a"></div>
    <div class="color-divider__item color-divider__item-stretch color-divider__item-b"></div>
    <div class="color-divider__item color-divider__item-stretch color-divider__item-c"></div>
    <div class="color-divider__item color-divider__item-stretch color-divider__item-d"></div>
    <div class="color-divider__item color-divider__item-stretch color-divider__item-e"></div>
    <div class="color-divider__item color-divider__item-stretch color-divider__item-f"></div>
    <div class="color-divider__item color-divider__item-stretch color-divider__item-g"></div>
</div>

<section class="section section_pad section_pad-sm--sm">
    <div class="wrap-container-sm">
        <?php the_content(); ?>
    </div>
</section>
<?php 
    get_footer();
?>