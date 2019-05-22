<?php
/**
 * Template Name: ShowCase
 *
 */



get_header(); ?>

    <style>
        #first-section {
            padding-top: 25px !important;
            padding-bottom: 25px !important;
            padding-left: 60px;
            padding-right: 60px;
            min-height: auto;
            box-shadow: 0 0 60px black;
            background: url(<?php echo get_template_directory_uri();?>/assets/images/page-head-bgi.jpg) no-repeat top left / cover;
        }
    </style>
</div>


<div class="showcase-wrapper">

    <!-- Begin Show Case    -->
    <div id="second-section1" class="about-section section py-5">
        <div class="container my-5">

            <div class="">
                <div class="title-wrap">
                    <h2 class="section-title text-uppercase font-italic">
                        <?php the_field('заголовок_першої_секції'); ?>
                    </h2>

                    <div data-aos="fade-up" class="sub-title font-italic">
                        <?php the_field('заголовок_першої_секції'); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div data-aos="fade-up" class="content-wrapper text-uppercase my-5 font-italic">
                        <div>
                            <?php the_field('опис_першої_секції'); ?>
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



    <!--    ShowCase-Bottom-->
    <section class="showcase-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sub-h2"><?php the_field('підзаголовок_другої_секції'); ?></h2>
                </div>

                <div class="col-md-12">
                    <div class="show-bottom-content">
                        <?php the_field('опис_другої_секції'); ?>
                    </div>
                    <div class="link-showcase">
                        <a href="<?php the_field('посилання_на_кнопці'); ?>"><?php if(get_locale() == "uk") { echo "Зареєструватись"; } else { echo "Sing up"; }?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    End ShowCase-Bottom-->

</div>



<?php get_footer();
