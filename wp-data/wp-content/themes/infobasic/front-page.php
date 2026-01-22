<?php
?>
<?php get_header(); ?>
<div class="container">
    <main class="site-main">
        <section class="hero">
            <h1><?php bloginfo( 'name' ); ?></h1>
            <p><?php bloginfo( 'description' ); ?></p>
            <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="btn btn-primary">Ir al Blog</a>
        </section>
    </main>
</div>
<?php get_footer(); ?>