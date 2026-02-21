<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
else :
    echo '<p>' . esc_html__('No content yet.', 'hallo-troutshop') . '</p>';
endif;
?>

<?php get_footer(); ?>
