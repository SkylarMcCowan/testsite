\f0\fs24 \cf0 <?php get_header(); ?>\
\
<div class="container">\
    <?php if(have_posts()) : ?>\
        <?php while(have_posts()) : the_post(); ?>\
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>\
                <h2><?php the_title(); ?></h2>\
                <?php the_content(); ?>\
            </article>\
        <?php endwhile; ?>\
    <?php else : ?>\
        <p><?php __('No Posts Found'); ?></p>\
    <?php endif; ?>\
</div>\
\
<?php get_footer(); ?>\
}