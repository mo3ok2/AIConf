<?php
/**
 * Template Name: Be speaker
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

                <div class="offset-lg-1 col-lg-11">
                    <div class="form-div">
                        <script type="text/javascript">var submitted=false;</script>

                        <?php if(get_locale() == "uk") {?>
                        <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='/thank-you/';}"></iframe>
                        <?php }else{ ?>

                        <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='/en/thank-you-en/';}"></iframe>
                        <?php } ?>
                        <form action="https://docs.google.com/forms/d/e/1FAIpQLSdH5FT8pzNTO_m2okk3Gu2_oU65laa1lUC-FpellGeYdnvpFQ/formResponse" method="post" target="hidden_iframe" onsubmit="submitted=true;">

                            <fieldset>
                                <h2 class="mb-5">Speaker Registration AI &amp; Big Data Day 2019<br><small class="pt-3">Надайте, будь ласка, інформаціяю про себе українською і англійською мовами.
                                        Усі запропоновані доповіді розглядаються організаційним комітетом.
                                        Протягом двох днів прийде відповідь чи Ваша доповідь отримала позитивні відгуки.</small></h2>
                            </fieldset>


                            <!-- Field type: "paragraph" id: "1509681821" -->
                            <fieldset>
                                <label>
                                    <legend for="1509681821">Name: </legend>
                                    <div class="form-group">
                                        <textarea id="2030813989" name="entry.2030813989" class="form-control" required></textarea>
                                    </div>
                                </label>
                            </fieldset>


                            <!-- Field type: "short" id: "1739773378" -->
                            <fieldset>
                                <label for="">
                                    <legend for="1739773378">E-mail: </legend>
                                    <div class="form-group">
                                        <input id="1317464526" type="text" name="entry.1317464526" class="form-control" required>
                                    </div>
                                </label>
                            </fieldset>


                            <!-- Field type: "short" id: "49494469" -->
                            <fieldset>
                                <label>
                                    <legend for="49494469">Contact phone number: </legend>
                                    <div class="form-group">
                                        <input id="1811682847" type="text" name="entry.1811682847" class="form-control" required>
                                    </div>
                                </label>
                            </fieldset>


                            <!-- Field type: "short" id: "2067799307" -->
                            <fieldset>
                                <label>
                                    <legend for="2067799307">LinkedIn: </legend>
                                    <div class="form-group">
                                        <input id="1494389614" type="text" name="entry.1494389614" class="form-control" required>
                                    </div>
                                </label>
                            </fieldset>


                            <!-- Field type: "short" id: "352447091" -->
                            <fieldset>
                                <label>
                                    <legend for="352447091">Facebook:</legend>
                                    <div class="form-group">
                                        <input id="973666011" type="text" name="entry.973666011" class="form-control" required>
                                    </div>
                                </label>
                            </fieldset>


                            <!-- Field type: "short" id: "1206747749" -->
                            <fieldset>
                                <label>
                                    <legend for="1206747749">Company and position:</legend>
                                    <div class="form-group">
                                        <input id="1421751746" type="text" name="entry.1421751746" class="form-control" required>
                                    </div>
                                </label>
                            </fieldset>


                            <!-- Field type: "paragraph" id: "999573044" -->
                            <fieldset>
                                <label>
                                    <legend for="999573044">Про спікера/About the speaker: </legend>
                                    <div class="form-group">
                                        <p class="help-block">введіть uk&amp;eng, ~200 символів</p>
                                        <textarea id="690679363" name="entry.690679363" class="form-control" required></textarea>
                                    </div>
                                </label>
                            </fieldset>


                            <!-- Field type: "short" id: "164251411" -->
                            <fieldset>
                                <label>
                                    <legend for="164251411">Тема доповіді/Topic of presentation:</legend>
                                    <div class="form-group">
                                        <p class="help-block">uk&amp;eng</p>
                                        <input id="193071106" type="text" name="entry.193071106" class="form-control" required>
                                    </div>
                                </label>
                            </fieldset>


                            <!-- Field type: "choices" id: "1570329328" -->
                            <fieldset>
                                <label><legend for="1570329328">До якого потоку відноситься тема вашої доповіді ? / Topic of your report related to stream ? </legend></label>
                                <div class="form-group wpcf7-list-item">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="entry.1189021926" value="Nowadays and future of AI" checked="checked">
                                            <span class="wpcf7-list-item-label">Nowadays and future of AI</span>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="entry.1189021926" value="Data Science Practice" >
                                            <span class="wpcf7-list-item-label">Data Science Practice</span>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="entry.1189021926" value="BigData &amp; Data Engineering" >
                                            <span class="wpcf7-list-item-label">BigData &amp; Data Engineering</span>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="entry.1189021926" value="Startups &amp; Business" >
                                            <span class="wpcf7-list-item-label">Startups &amp; Business</span>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="entry.1189021926" value="Workshops" >
                                            <span class="wpcf7-list-item-label">Workshops</span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>


                            <!-- Field type: "paragraph" id: "1276167731" -->
                            <fieldset>
                                <label>
                                    <legend for="1276167731">Тези доповіді/The main points of the presentation:</legend>
                                    <div class="form-group">
                                        <p class="help-block">ukr&amp;eng</p>
                                        <textarea id="264164533" name="entry.264164533" class="form-control" ></textarea>
                                    </div>
                                </label>
                            </fieldset>


                            <!-- Field type: "short" id: "1814574992" -->
                            <fieldset>
                                <label>
                                    <legend for="1814574992">Відео ваших виступів/Video of your performances: </legend>
                                    <div class="form-group">
                                        <input id="3244566" type="text" name="entry.3244566" class="form-control" >
                                    </div>
                                </label>
                            </fieldset>


                            <!-- Field type: "choices" id: "1141650255" -->
                            <fieldset>
                                <label><legend for="1141650255">Рівень доповіді/Level of the report: </legend></label>
                                <div class="form-group wpcf7-list-item">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="entry.1245335093" value="For beginners" checked="checked">
                                            <span class="wpcf7-list-item-label">For beginners</span>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="entry.1245335093" value="Middle" >
                                            <span class="wpcf7-list-item-label">Middle</span>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="entry.1245335093" value="For professionals" >
                                            <span class="wpcf7-list-item-label">For professionals</span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>


                            <!-- Field type: "choices" id: "1506473832" -->
                            <fieldset>
                                <label><legend for="1506473832">Мова виступу / Language of speech </legend></label>
                                <div class="form-group wpcf7-list-item">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="entry.711240071" value="Ukrainian" checked="checked">
                                            <span class="wpcf7-list-item-label">Ukrainian</span>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="entry.711240071" value="Russian" >
                                            <span class="wpcf7-list-item-label">Russian</span>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="entry.711240071" value="English" >
                                            <span class="wpcf7-list-item-label">English</span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>


                            <!-- Field type: "choices" id: "1350153095" -->
                            <fieldset>
                                <label><legend for="1350153095">Menu:</legend></label>
                                <div class="form-group wpcf7-list-item">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="entry.123509217" value="Meat menu" checked="checked">
                                            <span class="wpcf7-list-item-label">Meat menu</span>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="entry.123509217" value="Vegetarian menu" >
                                            <span class="wpcf7-list-item-label">Vegetarian menu</span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>


                            <!-- Field type: "short" id: "687828494" -->
                            <fieldset>
                                <label>
                                    <legend for="687828494">Посилання на ваше фото/Link to your photos:</legend>
                                    <div class="form-group">
                                        <input id="1913917927" type="text" name="entry.1913917927" class="form-control" required>
                                    </div>
                                </label>
                            </fieldset>


                            <!-- Field type: "short" id: "1467929769" -->
                            <fieldset>
                                <label>
                                    <legend for="1467929769">На яких конференціях Ви були спікером / Conferences where you were a speaker?</legend>
                                    <div class="form-group">
                                        <input id="780617830" type="text" name="entry.780617830" class="form-control" required>
                                    </div>
                                </label>
                            </fieldset>

                            <input type="hidden" name="fvv" value="1">
                            <input type="hidden" name="fbzx" value="6366842647284226992">
                            <!--
                                CAVEAT: In multipages (multisection) forms, *pageHistory* field tells to google what sections we've currently completed.
                                This usually starts as "0" for the first page, then "0,1" in the second page... up to "0,1,2..N" in n-th page.
                                Keep this in mind if you plan to change this code to recreate any sort of multipage-feature in your exported form.
                                We're setting this to the total number of pages in this form because we're sending all fields from all the section together.
                            -->
                            <input type="hidden" name="pageHistory" value="0">

                            <input class="btn btn-primary" type="submit" value="Submit">
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </div>


    </div>

<?php get_footer();
