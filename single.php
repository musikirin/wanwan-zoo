<?php get_header(); ?>

    <div id="content">

        <div class="kirin">
            <div class="kirin-inner">
                <div id="inner-content" class="row collapse">

                    <main id="main" class="columns" role="main">


                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <?php get_template_part('parts/loop', 'single'); ?>

                        <?php endwhile;
                        else : ?>

                            <?php get_template_part('parts/content', 'missing'); ?>

                        <?php endif; ?>

                    </main> <!-- end #main -->

                    <?php // get_sidebar(); ?>

                </div> <!-- end #inner-content -->

            </div><!-- end .kirin-inner -->

        </div><!-- end .kirin -->

    </div> <!-- end #content -->


<?php get_footer(); ?>