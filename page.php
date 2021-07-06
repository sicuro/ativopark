<?php get_header(); ?>
<style>

.bg-header-clear, header {
  background: #1a4df0 !important;
  background: none;
  transition: 1s;
}
body {
  opacity: 1 !important;
}
</style>

  <div class="container">
    <div class="row">
      <div id="content" class="col-sm-12" role="main">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h2><?php the_title(); ?></h2>

            <?php the_post_thumbnail('single-post-thumbnail', array('class' => 'img-fluid')); ?>
              <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

              <div class="entry">
                  <?php the_content(); ?>
              </div>

          </div>
          <?php endwhile; endif; ?>

      </div><!-- #content -->

    </div>
  </div>
<?php get_footer(); ?>
