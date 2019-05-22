<?php
/**
 * Template Name: Thank You Page
 *
 */



get_header(); ?>


<div class="section-thank-you">
    <div class="contaner">
        <div class="row">
            <div class="col-md-12">
                <div class="text-wrapp">
                    <div class="text-center">
                        <h2 class="text-white"><?php the_title(); ?></h2>
                        <span  class="text-white"><?php
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();

                                the_content();


                            endwhile; // End of the loop.
                            ?></span>
                        <div class="text-center">
                            <a class="m-5 btn btn-primary btn-lg active bgc-green button-link" href="<?php echo get_home_url(); ?>"><?php if(get_locale() == "uk") {echo "На головну";}else {echo "Go Home";};?></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


</div>

<?php get_footer();
