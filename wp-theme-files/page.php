<?php get_header(); ?>
    <section class="row">
        <?php while (have_posts()) : the_post(); ?>
            <?php if (get_field("page-image")) : ?>
                <div class="col-5 page-image">
                    <img src="<?php print_r(get_field("page-image")) ?>" alt=""/>
                </div>
            <?php endif ?>
            <article class="col-7" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="page-title"><?php the_title() ?></h2>
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            </article>

        <?php

        endwhile; // End of the loop.
        ?>
    </section>

<?php
get_footer();
