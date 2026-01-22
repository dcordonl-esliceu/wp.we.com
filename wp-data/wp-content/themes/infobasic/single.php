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
                <article class="post single-post">
                    <h1><?php echo esc_html( the_title() ); ?></h1>
                    <div class="meta">
                        <span class="date"><?php echo esc_html( get_the_date() ); ?></span>
                        <span class="author">Autor: <?php echo esc_html( get_the_author() ); ?></span>
                    </div>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            }
        } else {
            echo '<p>' . esc_html__( 'Post not found.', 'infobasic' ) . '</p>';
        }
        ?>
    </main>
</div>
<?php get_footer(); ?>