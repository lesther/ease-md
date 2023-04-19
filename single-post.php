<?php 
get_header(); 
?>
<section class="section section_leading-accent py-3 sticky-header_breadcrumb">
    <div class="wrap-container">
        <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row">
            <a href="/blog" class="h-font-sora title_sm title_spacing-none btn_link-primary-accent title_weight-bold">Blog</a>
            <a href="https://onelink.to/hjqc9u" class="btn btn_sm btn_primary-accent text_weight-bold">¡Prueba 1 mes gratis!</a>
        </div>
    </div>
</section>
<section class="section section_pad section_pad-md--sm section_pad-sm-1--lg section_primary-accent d-flex align-items-center">
    <div class="wrap-container-xs">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        <h1 class="title_lg title_xl-sm title_xxl--md title_weight-black d-block title_light">
                            <?php echo get_the_title() ?>
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

<section class="section section_pad-sm">
    <div class="wrap-container-xs">
        <p class="d-flex flex-wrap align-items-center gap-3 text_gray">
            <a href="/blog" class="btn_sm btn_outline-primary-accent btn_hover-primary-accent btn_corner-md text_weight-bold">
                Blog
            </a>
            <?php echo get_the_title() ?>
        </p>
    </div>
</section>

<section class="section section_pad-top_none section_pad-bottom_sm--sm section_pad-bottom_md--sm">
    <div class="wrap-container-xs">
        <div class="content-post_image">
            <div>
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="mt-4 mb-5">
                <p class="btn_lighter text_dark btn_sm btn--hover-none text_weight-bold">
                    <?php echo get_the_date( 'Y-m-d' ); ?>
                </p>
            </div>
        </div>
        <div class="content-post">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php 
    get_footer();
?>