<?php
/**
 * Template Name: Vacansy wall
 *
 */



get_header(); ?>

    <style>
          #first-section {
            background: url('<?php echo get_template_directory_uri();?>/img/vacansy-wall-point1.png') no-repeat top left / auto, url('<?php echo get_template_directory_uri();?>/img/vacansy-wall-point1.png') no-repeat bottom right / auto, linear-gradient(to bottom, #113053 0%,#111029 100%);; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            padding-bottom: 100px !important;
        }
    </style>

    <div class="narrow-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="">
                        <div data-aos="fade-up"  class="title-wrap my-5 pb-4">
                            <h2 class="section-title text-uppercase font-italic smaller white">
                                <?php the_title(); ?>
                            </h2>
                            <div class="sub-title font-italic white">
                                <?php the_title(); ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="offset-lg-1 col-lg-11 text-center text-uppercase font-italic">

                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="title-desc my-5 white">
                                <span class="desc1 pb-3"><?php the_field('перший_опис');?></span>
                                <span class="desc2 mt-2 mb-5"><?php the_field('другий_опис');?></span>
                            </div>

                            <div class="col-lg-12">
                                <div class="column-section-timeline white">

                                    <div class="block-timeline">
                                        <span><?php the_field('форма_поле_1');?></span>
                                    </div>

                                    <div class="block-timeline">
                                        <span><?php the_field('форма_поле_2');?></span>
                                    </div>

                                    <div class="block-timeline">
                                        <span><?php the_field('форма_поле_3');?></span>
                                    </div>

                                    <div class="block-timeline">
                                        <span><?php the_field('форма_поле_4');?></span>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="bottom-block-with-button white">
                                    <h3><?php the_field('важливо');?></h3>
                                    <h4><?php the_field('важливо_опис');?></h4>
                                    <a href="<?php the_field('важливо_кнопка_посилання');?>" class="btn-c" download><?php the_field('важливо_кнопка_текст');?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>


    </div>

<?php get_footer();
