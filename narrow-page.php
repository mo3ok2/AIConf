<?php
/**
 * Template Name: Narrow page
 *
 */



get_header(); ?>



    <div class="narrow-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="">
                        <div data-aos="fade-up"  class="title-wrap my-5 pb-5">
                            <h2 class="section-title text-uppercase font-italic smaller white">
                                <?php the_title(); ?>
                            </h2>
                            <div class="sub-title font-italic white">
                                <?php the_title(); ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="offset-lg-1 col-lg-11">


                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        the_content();


                    endwhile; // End of the loop.
                    ?>
                </div>


            </div>
        </div>
    </div>


    </div>

<?php get_footer();
