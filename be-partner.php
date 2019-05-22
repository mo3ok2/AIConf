<?php
/**
 * Template Name: Be partner
 *
 */



get_header(); ?>

    <style>#first-section {
            background: url('<?php echo get_template_directory_uri();?>/img/vacansy-wall-point1.png') no-repeat top left / auto, url('<?php echo get_template_directory_uri();?>/img/vacansy-wall-point1.png') no-repeat bottom right / auto, linear-gradient(to right, #113053 0%,#111029 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
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
                        <div class="col-lg-3">
                            <div class="bottom-block-with-button">
                                <a href="<?php the_field('кнопка_лінк_1');?>" class="w-100 btn-c mt-5 mb-4 btn-first btn-gradient"><?php the_field('кнопка_текст_1');?></a>
                                <a href="<?php the_field('кнопка_лінк_2');?>" class="w-100 btn-c mt-5 mb-4 btn-second btn-gradient"><?php the_field('кнопка_текст_2');?></a>
                                <a href="<?php the_field('кнопка_лінк_3');?>" class="w-100 btn-c mt-5 mb-4 btn-comercial-proposal" download><?php the_field('кнопка_текст_3');?></a>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="diagramm-img">
                                <img src="<?php echo get_template_directory_uri()?>/img/be-partner.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>


    </div>

<?php get_footer();
