<?php get_header(); ?>

    <div id="content">

        <div class="kirin">

            <div class="kirin-inner">

                <div id="inner-content">

                    <div class="row">

                        <main id="main" class="columns small-12 large-8 xlarge-9" role="main">

                            <article id="content-not-found">

                                <header class="article-header">
                                    <h1><?php _e('Epic 404 - Article Not Found', 'jointswp'); ?></h1>
                                </header> <!-- end article header -->

                                <section class="entry-content">
                                    <p><?php _e('The article you were looking for was not found, but maybe try looking again!', 'jointswp'); ?></p>
                                </section> <!-- end article section -->

                                <section class="search">
                                    <p><?php get_search_form(); ?></p>
                                </section> <!-- end search section -->

                            </article> <!-- end article -->

                        </main> <!-- end #main -->

                    </div><!-- end .row -->

                </div> <!-- end #inner-content -->

            </div><!-- end .kirin-inner -->

        </div><!-- end .kirin -->

    </div> <!-- end #content -->

<?php get_footer(); ?>