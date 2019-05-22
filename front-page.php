<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */



get_header(); ?>

    <div class="container first-section-content">
        <div class="row">
            <div class="col-md-12 white font-italic pt-3">
                <h1  data-aos="fade-up" class="mt-0 text-uppercase"><?php the_field('слайд_1_заголовок'); ?></h1>

                <h2 data-aos="fade-up" class="my-4 text-uppercase"><?php the_field('слайд_1_опис'); ?></h2>

                <div class="anchor">
                    <a href="#sixth-section" class="white bg-button py-3 px-5 d-inline-block"><?php the_field('слайд_1_текст_кнопки'); ?></a>
                </div>
            </div>

        </div>
    </div>
    </div>

    <div id="section-line-three-points" class="about-section section py-5">
        <div class="container pt-3">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between line-visible-768">
                    <div class="block-point-with-img">
                        <img src="<?php echo get_template_directory_uri()?>/img/icon-man1.png" alt="icon">
                        <div class="title my-3"><?php the_field('таймлайн_тайтл_1')?></div>
                    </div>

                    <div class="block-point-with-img">
                        <img src="<?php echo get_template_directory_uri()?>/img/icon-man2.png" alt="icon">
                        <div class="title my-3"><?php the_field('таймлайн_тайтл_2')?></div>
                    </div>

                    <div class="block-point-with-img">
                        <img src="<?php echo get_template_directory_uri()?>/img/icon-man3.png" alt="icon">
                        <div class="title my-3"><?php the_field('таймлайн_тайтл_3')?></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="blue-line"></div>
                </div>

            </div>
        </div>
    </div>


    <div id="what-you-get" class="about-section section py-5">
        <div class="container my-5">
            <div class="">
                <div class="title-wrap">
                    <h2 class="section-title text-uppercase font-italic">
                        <?php the_field('що_ви_отримуєте_тайтл')?>
                    </h2>
                    <div data-aos="fade-up" class="sub-title font-italic">
                        <?php the_field('що_ви_отримуєте_тайтл')?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div data-aos="fade-up" class="content-wrapper text-uppercase my-5 font-italic">
                        <div class="row-what-you-get-with-icon">
                            <span><img src="<?php echo get_template_directory_uri()?>/img/what-you-get-icon1.png" alt=""><?php the_field('що_ви_отримуєте_текст_1')?></span>
                        </div>
                        <div class="row-what-you-get-with-icon">
                            <span><img src="<?php echo get_template_directory_uri()?>/img/what-you-get-icon2.png" alt=""><?php the_field('що_ви_отримуєте_текст_2')?></span>
                        </div>
                        <div class="row-what-you-get-with-icon">
                            <span><img src="<?php echo get_template_directory_uri()?>/img/what-you-get-icon3.png" alt=""><?php the_field('що_ви_отримуєте_текст_3')?></span>
                        </div>
                        <div class="row-what-you-get-with-icon">
                            <span><img src="<?php echo get_template_directory_uri()?>/img/what-you-get-icon4.png" alt=""><?php the_field('що_ви_отримуєте_текст_4')?></span>
                        </div>
                        <div class="row-what-you-get-with-icon">
                            <span><img src="<?php echo get_template_directory_uri()?>/img/what-you-get-icon5.png" alt=""><?php the_field('що_ви_отримуєте_текст_5')?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php if( have_rows('теми_колонка_1') or have_rows('теми_колонка_2') or have_rows('теми_колонка_3') ) { ?>
    <div id="themes-section" class="themes-section py-5">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12 mb-3 pb-5 ">
                    <div class="">
                        <div class="title-wrap">
                            <h2 class="section-title text-uppercase font-italic">
                                <?php the_field('теми_тайтл')?>
                            </h2>
                            <div data-aos="fade-up" class="sub-title font-italic white">
                                <?php the_field('теми_тайтл')?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php if( have_rows('теми_колонка_1') ): ?>
                    <div class="col-lg-4">
                        <ul>

                            <?php while( have_rows('теми_колонка_1') ): the_row(); ?>

                                <li><i class="fas fa-check-circle"></i><?php echo get_sub_field('тайтл');?></li>

                            <?php endwhile; ?>

                        </ul>
                    </div>
                <?php endif; ?>


                <?php if( have_rows('теми_колонка_2') ): ?>
                    <div class="col-lg-4">
                        <ul>

                            <?php while( have_rows('теми_колонка_2') ): the_row(); ?>

                                <li><i class="fas fa-check-circle"></i><?php echo get_sub_field('тайтл');?></li>


                            <?php endwhile; ?>

                        </ul>
                    </div>
                <?php endif; ?>


                <?php if( have_rows('теми_колонка_3') ): ?>
                    <div class="col-lg-4">
                        <ul>

                            <?php while( have_rows('теми_колонка_3') ): the_row(); ?>

                                <li><i class="fas fa-check-circle"></i><?php echo get_sub_field('тайтл');?></li>

                            <?php endwhile; ?>

                        </ul>
                    </div>
                <?php endif; ?>


            </div>
        </div>
    </div>
    <?php } ?>


    <div id="second-section" class="about-section section py-5">
        <div class="container my-5">
            <div class="">
                <div class="title-wrap">
                    <h2 class="section-title text-uppercase font-italic">
                        <?php the_field('слайд_2_заголовок'); ?>
                    </h2>
                    <div data-aos="fade-up" class="sub-title font-italic">
                        <?php the_field('слайд_2_заголовок'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div data-aos="fade-up" class="content-wrapper text-uppercase my-5 font-italic">
                        <div>
                            <?php the_field('слайд_2_опис'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 eye-block">

                </div>
            </div>
        </div>
    </div>

    <div id="third-section" class="theme-section section py-5">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-7 offset-md-5">
                    <div data-aos="fade-up"  class="title-wrap my-5">
                        <h2 class="section-title text-uppercase font-italic text-right">
                            <?php the_field('слайд_3_заголовок'); ?>
                        </h2>
                        <div class="sub-title font-italic sub-title-right">
                            <?php the_field('слайд_3_заголовок'); ?>
                        </div>
                    </div>
                    <div class="content-wrap text-uppercase">
                        <ul class="nav">

                            <?php if( have_rows('блок_з_кубом') ): ?>

                                <?php while( have_rows('блок_з_кубом') ): the_row(); ?>

                                    <?php if(get_sub_field('тайтл') and (get_sub_field('опис'))) {?>

                                        <li data-aos="fade-up"  class="mt-5">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-12 col-md-5">
                                                    <div class="left-part pl-4">
                                                        <span>
                                                            <?php the_sub_field('тайтл'); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-7 hover-visible" style="display: none;">
                                                    <div class="right-part ml-3 pl-5 py-1 pr-3">
                                                        <?php the_sub_field('опис'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    <?php } ?>

                                    <?php if(get_sub_field('тайтл2') and (get_sub_field('опис2'))) {?>

                                        <li data-aos="fade-up"  class="mt-5">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-12 col-md-5">
                                                    <div class="left-part pl-4">
                                                        <span>
                                                            <?php the_sub_field('тайтл2'); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-7 hover-visible" style="display: none;">
                                                    <div class="right-part ml-3 pl-5 py-1 pr-3">
                                                        <?php the_sub_field('опис2'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    <?php } ?>

                                    <?php if(get_sub_field('тайтл3') and (get_sub_field('опис3'))) {?>

                                        <li data-aos="fade-up"  class="mt-5">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-12 col-md-5">
                                                    <div class="left-part pl-4">
                                                        <span>
                                                            <?php the_sub_field('тайтл3'); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-7 hover-visible" style="display: none;">
                                                    <div class="right-part ml-3 pl-5 py-1 pr-3">
                                                        <?php the_sub_field('опис3'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    <?php } ?>

                                    <?php if(get_sub_field('тайтл4') and (get_sub_field('опис4'))) {?>

                                        <li data-aos="fade-up"  class="mt-5">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-12 col-md-5">
                                                    <div class="left-part pl-4">
                                                        <span>
                                                            <?php the_sub_field('тайтл4'); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-7 hover-visible" style="display: none;">
                                                    <div class="right-part ml-3 pl-5 py-1 pr-3">
                                                        <?php the_sub_field('опис4'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    <?php } ?>

                                    <?php if(get_sub_field('тайтл5') and (get_sub_field('опис5'))) {?>

                                        <li data-aos="fade-up"  class="mt-5">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-12 col-md-5">
                                                    <div class="left-part pl-4">
                                            <span>
                                                <?php the_sub_field('тайтл5'); ?>
                                            </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-7 hover-visible" style="display: none;">
                                                    <div class="right-part ml-3 pl-5 py-1 pr-3">
                                                        <?php the_sub_field('опис5'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    <?php } ?>


                                <?php endwhile; ?>

                            <?php endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fourth-section" class="program-section section pt-5 ">
        <div class="container-fluid my-5">
            <div class="">
                <div data-aos="fade-up"  class="title-wrap my-5">
                    <h2 class="section-title text-uppercase font-italic text-right">
                        <?php the_field('слайд_4_заголовок'); ?>
                    </h2>
                    <div class="sub-title font-italic sub-title-right">
                        <?php the_field('слайд_4_заголовок'); ?>
                    </div>
                </div>
            </div>





            <div class="row py-5 font-italic">

                <?php if(get_field('кнопка_скачати_программа_тайтл')) { ?>

                <div class="col-md-12 text-right">
                    <div class="bottom-block-with-button pb-5">
                        <a href="<?php the_field('кнопка_скачати_программа_файл')?>" class="w-100 btn-c mt-5 mb-4 btn-comercial-proposal" style="max-width: 230px;" download=""><?php the_field('кнопка_скачати_программа_тайтл')?></a>
                    </div>
                </div>

                <?php }?>

            <?php for($i = 1; $i < 6; $i++){ ?>


                <?php if( have_rows('слайд_5_контент_' . $i . '_повторитель') ):

                    while( have_rows('слайд_5_контент_' . $i . '_повторитель') ): the_row(); ?>

                    <?php if($i == 1) {?>
                            <div class="col-md-2 offset-md-1">
                        <?php }else { ?>
                                <div class="col-md-2">
                        <?php }?>

                            <div data-aos="fade-up"  class="text-center column-header mb-3">
                                <?php the_sub_field('тайтл'); ?>
                            </div>
                            <ul data-aos="fade-up"  class="nav">
                                <li class="mb-5">
                                    <div class="column-title">
                                        <?php if(get_locale() == "uk") {echo "Відкриття";}else {echo "Opening";}?>
                                    </div>
                                    <div class="line"></div>
                                </li>


                                <?php if(!empty(get_sub_field('время')) && !empty(get_sub_field('описание')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время'); ?>
                                        </div>
                                        <div class="time-descript">
                                                <?php the_sub_field('описание'); ?>
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>


                                <?php if(!empty(get_sub_field('время2')) && !empty(get_sub_field('описание2')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время2'); ?>
                                        </div>
                                        <div class="time-descript">
                                                <?php the_sub_field('описание2'); ?>
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>


                                <?php if(!empty(get_sub_field('время3')) && !empty(get_sub_field('описание3')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время3'); ?>
                                        </div>
                                        <div class="time-descript">
                                                <?php the_sub_field('описание3'); ?>
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>


                                <?php if(!empty(get_sub_field('время4')) && !empty(get_sub_field('описание4')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время4'); ?>
                                        </div>
                                        <div class="time-descript">
                                                <?php the_sub_field('описание4'); ?>
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>


                                <?php if(!empty(get_sub_field('время5')) && !empty(get_sub_field('описание5')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время5'); ?>
                                        </div>
                                        <div class="time-descript">
                                                <?php the_sub_field('описание5'); ?>
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>


                                <?php if(!empty(get_sub_field('время6')) && !empty(get_sub_field('описание6')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время6'); ?>
                                        </div>
                                        <div class="time-descript">
                                                <?php the_sub_field('описание6'); ?>
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>


                                <?php if(!empty(get_sub_field('время7')) && !empty(get_sub_field('описание7')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время7'); ?>
                                        </div>
                                        <div class="time-descript">
                                                <?php the_sub_field('описание7'); ?>
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>


                                <?php if(!empty(get_sub_field('время8')) && !empty(get_sub_field('описание8')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время8'); ?>
                                        </div>
                                        <div class="time-descript">
                                                <?php the_sub_field('описание8'); ?>
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>


                                <?php if(!empty(get_sub_field('время9')) && !empty(get_sub_field('описание9')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время9'); ?>
                                        </div>
                                        <div class="time-descript">
                                                <?php the_sub_field('описание9'); ?>
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>


                                <?php if(!empty(get_sub_field('время10')) && !empty(get_sub_field('описание10')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время10'); ?>
                                        </div>
                                        <div class="time-descript">
                                                <?php the_sub_field('описание10'); ?>
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>


                                <?php if(!empty(get_sub_field('время11')) && !empty(get_sub_field('описание11')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время11'); ?>
                                        </div>
                                        <div class="time-descript">
                                                <?php the_sub_field('описание11'); ?>
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>

                                <?php if(!empty(get_sub_field('время12')) && !empty(get_sub_field('описание12')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время12'); ?>
                                        </div>
                                        <div class="time-descript">
                                                <?php the_sub_field('описание12'); ?>
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>

                                <?php if(!empty(get_sub_field('время13')) && !empty(get_sub_field('описание13')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время13'); ?>
                                        </div>
                                        <div class="time-descript">
                                                <?php the_sub_field('описание13'); ?>
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>


                                <?php if(!empty(get_sub_field('время14')) && !empty(get_sub_field('описание14')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время14'); ?>
                                        </div>
                                        <div class="time-descript">
                                                <?php the_sub_field('описание14'); ?>
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>

                                <?php if(!empty(get_sub_field('время15')) && !empty(get_sub_field('описание15')) ) {?>
                                    <li class="pb-3 pr-3">
                                        <div class="time-line">
                                            <?php the_sub_field('время15'); ?>
                                        </div>
                                        <div class="time-descript">
                                            <?php the_sub_field('описание15'); ?> 
                                            <div class="line"></div>
                                        </div>
                                    </li>
                                <?php }?>
                            </ul>
                            <div class="wrap">

                            </div>
                        </div>

                    <?php endwhile;
                endif;
            } ?>

            </div>
        </div>
    </div>

    <div id="fifth-section" class="slider-section section py-5">
        <div class="container title-wrap mt-5">
            <div data-aos="fade-up"  class="title-wrap">
                <h2 class="section-title text-uppercase font-italic text-right">
                    <?php if(get_locale() == "uk") {echo "Спікери конференції";}else {echo "Speakers of the conference";}?>
                </h2>
                <div class="sub-title font-italic sub-title-right">
                    <?php if(get_locale() == "uk") {echo "Спікери конференції";}else {echo "Speakers of the conference";}?>
                </div>
            </div>
        </div>


        <div class="container-fluid my-5">
            <div class="row">
                <div class="wrapper text-center">








                    <h4 class="py-5 text-uppercase font-italic">
                        <?php the_field('слайд_6_9_заголовок'); ?>
                    </h4>




                        <?php

                        $args = array(
                            'post_type' 		=> 'speakers',
                            'category_name'     => 'keynote-speaker',
                            'post_status'       => 'publish',
                            'order' 			=> 'DESC',
                        );


                        $query = new WP_Query( $args );

                        ?>

                        <div class="container">



                            <div class="row text-uppercase font-italic">

                                <?php
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {

                                        $query->the_post();

                                        $metaData = get_post_meta(get_the_ID()); ?>

                                        <div class="col-md-12">
                                            <div class="speaker-item-wrapper special-speaker-center" data-toggle="modal" data-target="#exampleModalCenter">
                                                <div class="img-cont">
                                                    <div class="img-wrapper">
                                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="" class="img-fluid speaker-face">
                                                    </div>
                                                    <img class="logo-img-spk-left" src="<?php the_field('logo_kompany'); ?>" alt="">
                                                    <img class="logo-img-spk-right" src="<?php the_field('країна'); ?>" alt="">
                                                </div>


                                                <div class="foto-name">
                                                    <?php the_field('імя'); ?>
                                                </div>

                                                <div class="foto-description">
                                                    <?php the_field('кампанія'); ?>
                                                </div>

                                                <div class="speaker-dosyagnennya" style="display: none;">
                                                    <?php the_field('досягнення'); ?>
                                                </div>

                                                <div class="speaker-topic" style="display: none;">
                                                    <?php the_field('тема_доповіді'); ?>
                                                </div>

                                            </div>
                                        </div>

                                    <?php } }wp_reset_postdata(); ?>


                            </div>

                        </div>















                    <h4 class="py-5 text-uppercase font-italic">
                        <?php the_field('слайд_6_1_заголовок'); ?>
                    </h4>

                    <div class="slider-wrapper">



                        <?php

                        $args = array(
                            'post_type' 		=> 'speakers',
                            'category_name'     => 'спікери',
                            'post_status'       => 'publish',
                            'order' 			=> 'DESC',
                        );


                        $query = new WP_Query( $args );

                        ?>

                        <div class="row text-uppercase font-italic">
                            <div class="owl-carousel speaker-carousel1">

                                <?php
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {

                                        $query->the_post();

                                        $metaData = get_post_meta(get_the_ID());?>

                                        <div class="col-md-12">
                                            <div class="speaker-item-wrapper" data-toggle="modal" data-target="#exampleModalCenter">
                                                <div class="img-cont">
                                                    <div class="img-wrapper">
                                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="" class="img-fluid speaker-face">
                                                    </div>
                                                    <img class="logo-img-spk-left" src="<?php the_field('logo_kompany'); ?>" alt="">
                                                    <img class="logo-img-spk-right" src="<?php the_field('країна'); ?>" alt="">
                                                </div>


                                                <div class="foto-name">
                                                    <?php the_field('імя'); ?>
                                                </div>

                                                <div class="foto-description">
                                                    <?php the_field('кампанія'); ?>
                                                </div>

                                                <div class="speaker-dosyagnennya" style="display: none;">
                                                    <?php the_field('досягнення'); ?>
                                                </div>

                                                <div class="speaker-topic" style="display: none;">
                                                    <?php the_field('тема_доповіді'); ?>
                                                </div>

                                            </div>
                                        </div>

                                    <?php } }wp_reset_postdata(); ?>

                            </div>
                        </div>

                    </div>

                    <h4 class="py-5 text-uppercase font-italic">
                        <?php the_field('слайд_6_2_заголовок'); ?>
                    </h4>

                    <div class="slider-wrapper">

                        <?php

                        $args = array(
                            'post_type' 		=> 'speakers',
                            'category_name'     => 'спікери2',
                            'post_status'       => 'publish',
                            'order' 			=> 'DESC',
                        );


                        $query = new WP_Query( $args ); ?>

                        <div class="row text-uppercase font-italic">
                            <div class="owl-carousel speaker-carousel2">

                                <?php
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {

                                        $query->the_post();

                                        $metaData = get_post_meta(get_the_ID());?>

                                        <div class="col-md-12">
                                            <div class="speaker-item-wrapper" data-toggle="modal" data-target="#exampleModalCenter">
                                                <div class="img-cont">
                                                    <div class="img-wrapper">
                                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="" class="img-fluid speaker-face">
                                                    </div>
                                                    <img class="logo-img-spk-left" src="<?php the_field('logo_kompany'); ?>" alt="">
                                                    <img class="logo-img-spk-right" src="<?php the_field('країна'); ?>" alt="">
                                                </div>


                                                <div class="foto-name">
                                                    <?php the_field('імя'); ?>
                                                </div>

                                                <div class="foto-description">
                                                    <?php the_field('кампанія'); ?>
                                                </div>

                                                <div class="speaker-dosyagnennya" style="display: none;">
                                                    <?php the_field('досягнення'); ?>
                                                </div>

                                                <div class="speaker-topic" style="display: none;">
                                                    <?php the_field('тема_доповіді'); ?>
                                                </div>

                                            </div>
                                        </div>

                                    <?php } }wp_reset_postdata(); ?>

                            </div>
                        </div>
                    </div>


                    <h4 class="py-5 text-uppercase font-italic">
                        <?php the_field('слайд_6_3_заголовок'); ?>
                    </h4>


                    <div class="slider-wrapper">

                        <?php

                        $args = array(
                            'post_type' 		=> 'speakers',
                            'category_name'     => 'спікери3',
                            'post_status'       => 'publish',
                            'order' 			=> 'DESC',
                        );


                        $query = new WP_Query( $args );

                        ?>

                        <div class="row text-uppercase font-italic">
                            <div class="owl-carousel speaker-carousel3">

                                <?php
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {

                                        $query->the_post();

                                        $metaData = get_post_meta(get_the_ID());?>

                                        <div class="col-md-12">
                                            <div class="speaker-item-wrapper" data-toggle="modal" data-target="#exampleModalCenter">
                                                <div class="img-cont">
                                                    <div class="img-wrapper">
                                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="" class="img-fluid speaker-face">
                                                    </div>
                                                    <img class="logo-img-spk-left" src="<?php the_field('logo_kompany'); ?>" alt="">
                                                    <img class="logo-img-spk-right" src="<?php the_field('країна'); ?>" alt="">
                                                </div>


                                                <div class="foto-name">
                                                    <?php the_field('імя'); ?>
                                                </div>

                                                <div class="foto-description">
                                                    <?php the_field('кампанія'); ?>
                                                </div>

                                                <div class="speaker-dosyagnennya" style="display: none;">
                                                    <?php the_field('досягнення'); ?>
                                                </div>

                                                <div class="speaker-topic" style="display: none;">
                                                    <?php the_field('тема_доповіді'); ?>
                                                </div>

                                            </div>
                                        </div>

                                    <?php } }wp_reset_postdata(); ?>

                            </div>
                        </div>

                    </div>


                    <h4 class="py-5 text-uppercase font-italic">
                        <?php the_field('слайд_6_4_заголовок'); ?>
                    </h4>


                    <div class="slider-wrapper">

                        <?php

                        $args = array(
                            'post_type' 		=> 'speakers',
                            'category_name'     => 'спікери4',
                            'post_status'       => 'publish',
                            'order' 			=> 'DESC',
                        );


                        $query = new WP_Query( $args ); ?>

                        <div class="row text-uppercase font-italic">
                            <div class="owl-carousel speaker-carousel4">

                                <?php
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {

                                        $query->the_post();

                                        $metaData = get_post_meta(get_the_ID());?>

                                        <div class="col-md-12">
                                            <div class="speaker-item-wrapper" data-toggle="modal" data-target="#exampleModalCenter">
                                                <div class="img-cont">
                                                    <div class="img-wrapper">
                                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="" class="img-fluid speaker-face">
                                                    </div>
                                                    <img class="logo-img-spk-left" src="<?php the_field('logo_kompany'); ?>" alt="">
                                                    <img class="logo-img-spk-right" src="<?php the_field('країна'); ?>" alt="">
                                                </div>


                                                <div class="foto-name">
                                                    <?php the_field('імя'); ?>
                                                </div>

                                                <div class="foto-description">
                                                    <?php the_field('кампанія'); ?>
                                                </div>

                                                <div class="speaker-dosyagnennya" style="display: none;">
                                                    <?php the_field('досягнення'); ?>
                                                </div>

                                                <div class="speaker-topic" style="display: none;">
                                                    <?php the_field('тема_доповіді'); ?>
                                                </div>

                                            </div>
                                        </div>

                                    <?php } }wp_reset_postdata(); ?>

                            </div>
                        </div>

                    </div>


                    <h4 class="py-5 text-uppercase font-italic">
                        <?php the_field('слайд_6_5_заголовок'); ?>
                    </h4>


                    <div class="slider-wrapper">

                        <?php

                        $args = array(
                            'post_type' 		=> 'speakers',
                            'category_name'     => 'спікери5',
                            'post_status'       => 'publish',
                            'order' 			=> 'DESC',
                        );


                        $query = new WP_Query( $args ); ?>

                        <div class="row text-uppercase font-italic">
                            <div class="owl-carousel speaker-carousel5">

                                <?php
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {

                                        $query->the_post();

                                        $metaData = get_post_meta(get_the_ID());?>

                                        <div class="col-md-12">
                                            <div class="speaker-item-wrapper" data-toggle="modal" data-target="#exampleModalCenter">
                                                <div class="img-cont">
                                                    <div class="img-wrapper">
                                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="" class="img-fluid speaker-face">
                                                    </div>
                                                    <img class="logo-img-spk-left" src="<?php the_field('logo_kompany'); ?>" alt="">
                                                    <img class="logo-img-spk-right" src="<?php the_field('країна'); ?>" alt="">
                                                </div>


                                                <div class="foto-name">
                                                    <?php the_field('імя'); ?>
                                                </div>

                                                <div class="foto-description">
                                                    <?php the_field('кампанія'); ?>
                                                </div>

                                                <div class="speaker-dosyagnennya" style="display: none;">
                                                    <?php the_field('досягнення'); ?>
                                                </div>

                                                <div class="speaker-topic" style="display: none;">
                                                    <?php the_field('тема_доповіді'); ?>
                                                </div>

                                            </div>
                                        </div>

                                    <?php } }wp_reset_postdata(); ?>

                            </div>
                        </div>

                    </div>

                    <?php if(!empty(get_field('слайд_6_6_заголовок'))) {?>

                    <h4 class="py-5 text-uppercase font-italic">
                        <?php the_field('слайд_6_6_заголовок'); ?>
                    </h4>


                    <div class="slider-wrapper">

                        <?php

                        $args = array(
                            'post_type' 		=> 'speakers',
                            'category_name'     => 'модератори',
                            'post_status'       => 'publish',
                            'order' 			=> 'DESC',
                        );


                        $query = new WP_Query( $args ); ?>

                        <div class="row text-uppercase font-italic">
                            <div class="owl-carousel speaker-carousel5">

                                <?php
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {

                                        $query->the_post();

                                        $metaData = get_post_meta(get_the_ID());?>

                                        <div class="col-md-12">
                                            <div class="speaker-item-wrapper" data-toggle="modal" data-target="#exampleModalCenter">
                                                <div class="img-cont">
                                                    <div class="img-wrapper">
                                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="" class="img-fluid speaker-face">
                                                    </div>
                                                    <img class="logo-img-spk-left" src="<?php the_field('logo_kompany'); ?>" alt="">
                                                    <img class="logo-img-spk-right" src="<?php the_field('країна'); ?>" alt="">
                                                </div>


                                                <div class="foto-name">
                                                    <?php the_field('імя'); ?>
                                                </div>

                                                <div class="foto-description">
                                                    <?php the_field('кампанія'); ?>
                                                </div>

                                                <div class="speaker-dosyagnennya" style="display: none;">
                                                    <?php the_field('досягнення'); ?>
                                                </div>

                                                <div class="speaker-topic" style="display: none;">
                                                    <?php the_field('тема_доповіді'); ?>
                                                </div>

                                            </div>
                                        </div>

                                    <?php } }wp_reset_postdata(); ?>

                            </div>
                        </div>

                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>

    <div id="sixth-section" class="buy-section section py-5">
        <div class="my-5">
            <div class="container my-5 pb-5">
                <div class="title-wrap">
                    <h2 class="section-title text-uppercase font-italic text-right">
                        <?php the_field('секція_квиток_заголовок'); ?>
                    </h2>
                    <div class="sub-title font-italic sub-title-right white">
                        <?php the_field('секція_квиток_заголовок'); ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5 text-uppercase font-italic first white gold">
                    <div data-aos="fade-up"  class="type-wrapper col-md-3">
                        <div class="pl-4 py-2">
                            <div class="type">
                                Premium
                            </div>
                            <div class="bonus my-2">
                                <?php if(get_locale() == "uk") {echo 'Всі опції пакету "STANDARD"';}else {echo '"STANDARD" package options ';}?>

                                 <br>
                            </div>
                            <div class="descript pl-3 mb-1">
                                <span class="ticket_info_button" data-toggle="modal" data-target="#exampleModalCenter2">Options +
                                    <div class="ticket_info" style="display: none"><?php the_field('gold_опис'); ?></div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up"  class="item-info col-md-9">
                        <div class="row date-wrap py-4">
                            <div class="col-8 col-md-6 date">
                                <?php if(get_locale() == "uk") {echo 'до 27 червня';}else {echo 'till June, 27';}?>

                            </div>
                            <div class="col-4 col-md-2 price">
                                <?php the_field('gold_1_вересня13_жовтня_ціна'); ?>
                            </div>
                            <div class="col-12 col-md-4 align-self-center">
                                <a href="<?php the_field('gold_1_вересня_-_13_жовтня_лінк'); ?>" class="btn-reg p-3">
                                    <?php if(get_locale() == "uk") {echo 'Зареєструватись';}else {echo 'Sign up';}?>
                                </a>
                            </div>
                        </div>
                        <div class="row reg-wrap py-4">
                            <div class="col-8 col-md-6 title">
                                <?php if(get_locale() == "uk") {echo 'ГРУПОВА РЕЄСТРАЦІЯ (-10%)';}else {echo 'GROUP REGISTRATION (-10%)';}?>
                            </div>
                            <div class="col-4 col-md-2 price">
                                <?php the_field('gold_групова_реєстрація31'); ?>
                            </div>
                            <div class="col-12 col-md-4 align-self-center">
                                <a href="<?php the_field('gold_групова_реєстрація31_лінк'); ?>" class="btn-reg p-3 btn-group">
                                    <?php if(get_locale() == "uk") {echo 'Зареєструватись';}else {echo 'Sign up';}?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-4 text-uppercase font-italic second white standart">
                    <div data-aos="fade-up"  class="type-wrapper col-md-3">
                        <div class="py-4">
                            <div class="type">
                                Standard
                            </div>
                            <div class="descript pl-3 mt-2">
                                <span class="ticket_info_button" data-toggle="modal" data-target="#exampleModalCenter2">Options +
                                    <div class="ticket_info" style="display: none"><?php the_field('standart_опиc'); ?></div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up"  class="item-info col-md-9">
                        <div class="row date-wrap py-4">
                            <div class="col-8 col-md-6 date">
                                <?php if(get_locale() == "uk") {echo 'до 27 червня';}else {echo 'till June, 27';}?>
                            </div>
                            <div class="col-4 col-md-2 price">
                                <?php the_field('standart_1_вересня_-_13_жовтня_цінa'); ?>
                            </div>
                            <div class="col-12 col-md-4 align-self-center">
                                <a href="<?php the_field('standart_1_вересня_-_13_жовтня_лінк'); ?>" class="btn-reg p-3">
                                    <?php if(get_locale() == "uk") {echo 'Зареєструватись';}else {echo 'Sign up';}?>
                                </a>
                            </div>
                        </div>
                        <div class="row reg-wrap py-4">
                            <div class="col-8 col-md-6 title">
                                <?php if(get_locale() == "uk") {echo 'ГРУПОВА РЕЄСТРАЦІЯ (-10%)';}else {echo 'GROUP REGISTRATION (-10%)';}?>
                            </div>
                            <div class="col-4 col-md-2 price">
                                <?php the_field('standart_групова_реєстрація31_цінa'); ?>
                            </div>
                            <div class="col-12 col-md-4 align-self-center">
                                <!--                                standart_групова_реєстрація3+1_лінк    -->
                                <a href="<?php the_field('standart_групова_реєстрація3+1_лінк'); ?>" class="btn-reg p-3 btn-group">
                                    <?php if(get_locale() == "uk") {echo 'Зареєструватись';}else {echo 'Sign up';}?>
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>


                <div class="row mb-5 text-uppercase font-italic third white student">
                    <div data-aos="fade-up"  class="type-wrapper col-md-3">
                        <div class="py-5">
                            <div class="type">
                                student
                            </div>
                            <div class="descript pl-3 mt-2">
                                <span class="ticket_info_button" data-toggle="modal" data-target="#exampleModalCenter2">Options +
                                    <div class="ticket_info" style="display: none"><?php the_field('student_опиc'); ?></div>
                                </span>

                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up"  class="item-info col-md-9">
                        <div class="row reg-wrap py-4">
                            <div class="col-8 col-md-6 title">
                                <!--ГРУПОВА РЕЄСТРАЦІЯ(5+1)-->
                            </div>
                            <div class="col-4 col-md-2 price">
                                <?php the_field('student_групова_реєстрація31_цінa'); ?>
                            </div>
                            <div class="col-12 col-md-4 align-self-center">
                                <a href="<?php the_field('student_групова_реєстрація3+1_лінк'); ?>" class="btn-reg p-3 btn-group btn-stud">
                                    <?php if(get_locale() == "uk") {echo 'Зареєструватись';}else {echo 'Sign up';}?>
                                </a>
                            </div>
                        </div>
                        <div class="row date-wrap py-4">
                            <div class="col-8 col-md-6 date">
                                <?php if(get_locale() == "uk") {echo 'до 27 червня';}else {echo 'till June, 27';}?>
                            </div>
                            <div class="col-4 col-md-2 price">
                                <?php the_field('student_1_вересня_-_13_жовтня_цінa'); ?>
                            </div>
                            <div class="col-12 col-md-4 align-self-center">
                                <a href="<?php the_field('student_1_вересня_-_13_жовтня_лінк'); ?>" class="btn-reg p-3">
                                    <?php if(get_locale() == "uk") {echo 'Зареєструватись';}else {echo 'Sign up';}?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div> 
        </div>
    </div>


    <div id="seventh-section" class="last-year-section section py-5">
        <div class="my-5">
            <div class="container my-5">
                <div class="">
                    <div data-aos="fade-up"  class="title-wrap mt-5">
                        <h2 class="section-title text-uppercase font-italic smaller">
                            <?php if(get_locale() == "uk") {echo 'Як було минулого разу';}else {echo 'As it was last time';}?>
                        </h2>
                        <div class="sub-title font-italic">
                            <?php if(get_locale() == "uk") {echo 'Як було минулого разу';}else {echo 'As it was last time';}?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div data-aos="fade-up"  class="wrapper">
                    <?php echo do_shortcode("[FinalTilesGallery id='1']")?>
                </div>
            </div>
        </div>
    </div>


    <div id="eighth-section" class="section partners-section pt-5">
        <div class="mt-5">
            <div data-aos="fade-up"  class="container my-5">
                <div class="">
                    <div class="title-wrap mt-5">
                        <h2 class="section-title text-uppercase font-italic">
                            <?php if(get_locale() == "uk") {echo 'партнери';}else {echo 'partners';}?>
                        </h2>
                        <div class="sub-title font-italic">
                            <?php if(get_locale() == "uk") {echo 'партнери';}else {echo 'partners';}?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="wrapper">
                    <img src="<?php echo get_template_directory_uri()?>/img/planet.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>







    <div id="join" class="section-join section py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="title-wrap mt-5">
                        <h2 class="section-title text-uppercase font-italic smaller">
                            <?php the_field('join_title'); ?>
                        </h2>
                        <div class="sub-title font-italic white">
                            <?php the_field('join_title'); ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <h3><?php the_field('join_sub_title'); ?></h3>
                </div>


                <?php if( have_rows('join_контент_1_повторитель') ):

                    while( have_rows('join_контент_1_повторитель') ): the_row(); ?>

                        <div class="col-md-4">
                            <div class="join-block">
                                <div class="title-j"><?php the_sub_field('тайтл'); ?></div>
                                <div class="desc-j"><?php the_sub_field('описание'); ?></div>
                                <div class="button-j">
                                    <div class="">
                                        <a target="_blank" href="<?php the_sub_field('ссилка'); ?>" class="white bg-button py-3 px-5 d-inline-block"><?php the_sub_field('текст_ссилки'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="join-block">
                                <div class="title-j"><?php the_sub_field('тайтл2'); ?></div>
                                <div class="desc-j"><?php the_sub_field('описание2'); ?></div>
                                <div class="button-j">
                                    <div class="">
                                        <a target="_blank" href="<?php the_sub_field('ссилка2'); ?>" class="white bg-button py-3 px-5 d-inline-block"><?php the_sub_field('текст_ссилки2'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="join-block">
                                <div class="title-j"><?php the_sub_field('тайтл3'); ?></div>
                                <div class="desc-j"><?php the_sub_field('описание3'); ?></div>
                                <div class="button-j">
                                    <div class="">
                                        <a target="_blank" href="<?php the_sub_field('ссилка3'); ?>" class="white bg-button py-3 px-5 d-inline-block"><?php the_sub_field('текст_ссилки3'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile;

                endif; ?>


            </div>
        </div>
    </div>





    <?php if( get_field('партнери_тайтл_секції') ): ?>
    <div id="partner" class="section-partner section pt-5 pb-5">
        <div class="container need-last-child">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-wrap my-5">
                        <h2 class="section-title text-uppercase font-italic smaller">
                            <?php the_field('партнери_тайтл_секції');?>
                        </h2>
                        <div class="sub-title font-italic">
                            <?php the_field('партнери_тайтл_секції');?>
                        </div>
                    </div>
                </div>
            </div>


            <?php if( get_field('генеральний_партнер_тайтл') ): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row-title-with-logo-partner">
                        <div class="row py-4">
                            <div class="col-lg-4">
                                <h3><?php the_field('генеральний_партнер_тайтл');?></h3>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-8">
                                <a href="<?php the_field('генеральний_партнер_лінк');?>"><img src="<?php the_field('генеральний_партнер_лого');?>" alt=" Лого"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>


            <?php if( get_field('золотий_партнер_тайтл') ): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row-title-with-logo-partner">
                        <div class="row py-4">
                            <div class="col-lg-4">
                                <h4><?php the_field('золотий_партнер_тайтл');?></h4>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-8">

                                <?php while ( have_rows('золоті_партнери_лого') ) : the_row(); ?>

                                    <a href="<?php the_sub_field('посилання'); ?>"><img src="<?php the_sub_field('лого'); ?>" alt=" Лого"></a>

                                <?php endwhile; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>


            <?php if( get_field('срібний_партнер_тайтл') ): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row-title-with-logo-partner">
                        <div class="row py-4">
                            <div class="col-lg-4">
                                <h4><?php the_field('срібний_партнер_тайтл');?></h4>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-8">

                                <?php while ( have_rows('срібні_партнери_лого') ) : the_row(); ?>

                                    <a href="<?php the_sub_field('посилання'); ?>"><img src="<?php the_sub_field('лого'); ?>" alt=" Лого"></a>

                                <?php endwhile; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>


            <?php if( get_field('мережевий_партнер_тайтл') ): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row-title-with-logo-partner">
                        <div class="row py-4">
                            <div class="col-lg-4">
                                <h4><?php the_field('мережевий_партнер_тайтл');?></h4>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-8">

                                <?php while ( have_rows('мережеві_партнери_лого') ) : the_row(); ?>

                                    <a href="<?php the_sub_field('посилання'); ?>"><img src="<?php the_sub_field('лого'); ?>" alt=" Лого"></a>

                                <?php endwhile; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>


            <?php if( get_field('партнери_тайтл') ): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row-title-with-logo-partner">
                        <div class="row pt-4">
                            <div class="col-lg-4">
                                    <h4><?php the_field('партнери_тайтл');?></h4>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-8">

                                <?php while ( have_rows('партнери_лого') ) : the_row(); ?>

                                    <a href="<?php the_sub_field('посилання'); ?>"><img src="<?php the_sub_field('лого'); ?>" alt=" Лого"></a>

                                <?php endwhile; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>


        </div>
    </div>
    <?php endif; ?>



    <div id="ninth-section" class="info-partners-section section py-5">
        <div class="container">
            <div class="title-wrap mt-5">
                <h2 class="section-title text-uppercase font-italic text-right smaller">
                    <?php if(get_locale() == "uk") {echo 'інформаційні партнери';}else {echo 'information partners';}?>
                </h2>
                <div class="sub-title font-italic sub-title-right white">
                    <?php if(get_locale() == "uk") {echo 'інформаційні партнери';}else {echo 'information partners';}?>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row align-items-center owl-carousel logo-carousel">
                <?php

                $args = array(
                    'post_type' 		=> 'logo',
                    'category_name'     => 'інформаційні-партнери',
                    'post_status'       => 'publish',
                    'order' 			=> 'DESC',
                );


                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post(); ?>

                        <div data-aos="fade-up"  class="col-md-12">
                            <a target="_blank" href="<?php the_field('посилання_на_сайт_компанії')?>"><img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="" class="img-fluid"></a>
                        </div>

                    <?php }
                }

                wp_reset_postdata(); ?>

            </div>
        </div>
    </div>



    <div id="tenth-section" class="company-member-section section pt-5">
        <div class="container">
            <div class="">
                <div class="title-wrap mt-5">
                    <h2 class="section-title text-uppercase font-italic text-right smaller">
                        <?php if(get_locale() == "uk") {echo 'Компанії-учасники';}else {echo 'Participating companies';}?>
                    </h2>
                    <div class="sub-title font-italic sub-title-right">
                        <?php if(get_locale() == "uk") {echo 'Компанії-учасники';}else {echo 'Participating companies';}?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="slider-wrapper">
                <div class="row">
                    <div class="align-items-center owl-carousel logo-carousel">
                        <?php

                        $args = array(
                            'post_type' 		=> 'logo',
                            'category_name'     => 'компанії-учасники',
                            'post_status'       => 'publish',
                            'order' 			=> 'DESC',
                        );


                        $query = new WP_Query( $args );

                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post(); ?>

                                <div data-aos="fade-up"  class="col-md-12">
                                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="" class="img-fluid">
                                </div>

                            <?php }
                        }

                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Begin Show Case    -->
    <div id="second-section1" class="about-section section">
        <div class="container ">
            <div class="">
                <div class="title-wrap">
                    <h2 class="section-title text-uppercase font-italic">
                        <?php the_field('showcasetitle'); ?>
                    </h2>
                    <div data-aos="fade-up" class="sub-title font-italic">
                        <?php the_field('showcasetitle'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div data-aos="fade-up" class="content-wrapper text-uppercase mt-5 font-italic">
                        <div>
                            <?php the_field('showcasedescription'); ?>
                            <div class="link-showcase">
                                <a class="mb-0 mt-4" href="<?php the_field('посилання_на_кнопці'); ?>"><?php if(get_locale() == "uk") {echo 'Дізнатися більше';}else {echo 'Learn more';}?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri();?>/img/terminator.png" class="termin" alt="terminator">
                </div>
            </div>
        </div>
    </div>
<!-- End Show Case    -->


    <div id="eleventh-section" class="map-section section py-5">
        <div class="container">
            <div class="title-wrap mt-5">
                <h2 class="section-title text-uppercase font-italic smaller">
                    <?php if(get_locale() == "uk") {echo 'Місце проведення';}else {echo 'Location';}?>
                </h2>
                <div class="sub-title font-italic">
                    <?php if(get_locale() == "uk") {echo 'Місце проведення';}else {echo 'Location';}?>
                </div>
            </div>
        </div>
        <div data-aos="fade-up"  class="mt-5 pt-5 position-relative">

            <a href="https://www.google.com.ua/maps/place/%D0%90%D1%80%D0%B5%D0%BD%D0%B0+%D0%9B%D1%8C%D0%B2%D1%96%D0%B2/@49.7748575,24.0255164,17z/data=!3m1!4b1!4m5!3m4!1s0x473ae7c45ad648ef:0xf15582fcd2b48f5b!8m2!3d49.7748575!4d24.0277051/?fbclid=IwAR21jRxCrRqx1JupB0cSaZRTJhO_C4OgwrqMxa8U0kLIk5Ta5FywPuoeWdg">
                <img src="<?php echo get_template_directory_uri()?>/img/map1.jpg" alt="map" class="img-fluid map-img">
            </a>

            <div class="arena-wrapper position-absolute font-italic text-uppercase">
                <div class="arena-title position-absolute">
                    <?php the_field('будівля_на_карті'); ?>
                </div>
                <div class="arena-city position-absolute">
                    <?php the_field('місто'); ?>
                </div>
                <div class="arena-street position-absolute">
                    <?php the_field('адреса'); ?>
                </div>
                <img src="<?php echo get_template_directory_uri()?>/img/arena-icon.png" alt="arena" class="img-fluid">
            </div>
        </div>
    </div>

    <div id="twelvth-section" class="orginizer-section py-5 mb-5 text-uppercase font-italic white text-center">
        <div class="container">
            <div class="title-wrap mt-5">
                <h2 class="section-title text-uppercase font-italic text-right smaller">
                    <?php if(get_locale() == "uk") {echo 'Організатори конференції';}else {echo 'Conference organizers';}?>
                </h2>
                <div class="sub-title font-italic sub-title-right">
                    <?php if(get_locale() == "uk") {echo 'Організатори конференції';}else {echo 'Conference organizers';}?>
                </div>
            </div>
        </div>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="owl-carousel organiz-carousel">
                <?php

                $args = array(
                    'post_type' 		=> 'speakers',
                    'category_name'     => 'організатори',
                    'post_status'       => 'publish',
                    'order' 			=> 'DESC',
                );


                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();

                        $metaData = get_post_meta(get_the_ID());?>


                            <div data-aos="fade-up"  class="col-md-12">
                                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );?>" alt="person" class="img-fluid">
                                <div class="first-person person-info-wrapper py-2 mx-2 position-absolute">
                                    <div class="name">
                                        <?php the_field('імя'); ?>
                                    </div>
                                    <div class="position">
                                        <?php the_field('посада'); ?>
                                    </div>
                                    <div class="position">
                                        <?php the_field('обовязки_організаторів'); ?>
                                    </div>
                                    <div class="soc-icons">
                                        <div class="row">
                                            <div class="col-4 col-md-4">
                                                <a href="<?php the_field('посилання_на_фейсбук'); ?>" class="white btn">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="col-4 col-md-4">
                                                <a href="tel:<?php the_field('посилання_на_твіттер'); ?>" tabindex="0" class="btn btn-warning popover-dismissible white" role="button" data-toggle="popover" title="Phone" data-content="<?php the_field('посилання_на_твіттер'); ?>">
<!--                                                <a href="tel:--><?php //the_field('посилання_на_твіттер'); ?><!--" class="white">-->
                                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="col-4 col-md-4">
                                                <a href="tel:<?php the_field('посилання_на_телеграм'); ?>" tabindex="0" class="btn btn-warning popover-dismissible white" role="button" data-toggle="popover" title="Email" data-content="<?php the_field('посилання_на_телеграм'); ?>">
                                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <?php }
                    }
                    wp_reset_postdata();
                    ?>  

                </div>
            </div>
        </div>
    </div>

<?php get_footer();




