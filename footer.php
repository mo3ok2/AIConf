<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<footer id="footer" class="footer-section py-5 font-italic">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="menu-menu-header menu-header text-uppercase mb-4">
                    <?php if(get_locale() == "uk") {echo 'меню';}else {echo 'Menu';}?>

                </div>

                <?php if ( has_nav_menu( 'footer1' ) ) : ?>

                        <?php wp_nav_menu( array(
                            'theme_location' => 'footer1',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         => 'footer1',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s nav">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        ) ); ?>


                <?php endif; ?>

            </div>
            <div class="col-6 col-md-3 offset-md-1">
                <div class="more-menu-header menu-header text-uppercase mb-4">
                    <?php if(get_locale() == "uk") {echo 'Більше Подій';}else {echo 'More Events';}?>
                </div>

                <?php if ( has_nav_menu( 'footer2' ) ) : ?>

                    <?php wp_nav_menu( array(
                        'theme_location' => 'footer2',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'menu_id'         => 'footer2',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s nav">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => ''
                    ) ); ?>


                <?php endif; ?>

            </div>
            <div class="col-12 col-md-5" style="flex-direction: column; display: flex; justify-content: space-between; align-items: flex-end;">
                <div class="logo-wrapper">
                    <?php
                    $logo_img = '';
                    if( $custom_logo_id = get_theme_mod('custom_logo') ){
                        $logo_img = wp_get_attachment_image_url( $custom_logo_id, 'full', false);
                    } ?>

                    <img src="<?php echo $logo_img; ?>" alt="logo" class="img-fluid">
                </div>
                <div class="soc-icons">
                    <div class="row">
                        <div class="col-3 col-md-3">
                            <a href="<?php the_field('інста'); ?>" class="white">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-3 col-md-3">
                            <a href="<?php the_field('фейсбук'); ?>" class="white">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-3 col-md-3">
                            <a href="<?php the_field('ютуб'); ?>" class="white">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-3 col-md-3">
                            <a href="<?php the_field('лінкедін'); ?>" class="white">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="<?php echo get_template_directory_uri()?>/img/close.png" alt="close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-speaker-content-wrap">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="title1 speaker-modal-img">
                                    <img src="" alt="" class="speaker-modal-img">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="title1 speaker-modal-name">

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="title1 speaker-modal-posada">

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="text speaker-modal-dosyagnennya">

                                </div>
                            </div>

                            <div class="col-md-12">
                                <span class="title2"><?php if(get_locale() == "uk") {echo "ТЕМА";}else {echo "TOPIC";}?></span>
                            </div>

                            <div class="col-md-12">
                                <div class="text speaker-modal-topic">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div class="modal-speaker-content-wrap" style="margin-top: -25px;">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="addition_info">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

// проверим возможность
if( !current_user_can('manage_options') ){
//    echo "<style>
//    #themes-section,
//    #what-you-get{
//        display:none;
//    }
//</style>";
}

?>


<?php wp_footer(); ?>

</body>
</html>
