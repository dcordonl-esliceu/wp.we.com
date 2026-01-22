<?php

?>
<?php get_header(); ?>
<div class="container">
    <main class="site-main">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                ?>
                <article class="post">
                    <h2><a href="<?php echo esc_url( the_permalink() ); ?>"><?php echo esc_html( the_title() ); ?></a></h2>
                    <div class="meta">
                        <span><?php echo esc_html( get_the_date() ); ?></span>
                    </div>
                    <div class="excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
                <?php
            }
        } else {
            echo '<p>' . esc_html__( 'No posts found.', 'infobasic' ) . '</p>';
        }
        ?>
    </main>
</div>
<?php get_footer(); ?>