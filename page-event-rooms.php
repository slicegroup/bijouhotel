
<?php get_header(); ?>
<section class="salones">
  <h2 style="color:black; padding-bottom:50px;"> Nuestros Salones</h2>
  <div class="flex-salon">
    <?php $args = array( 'post_type' => 'salones', 'posts_per_page' => 9); ?>
    <?php $loop = new WP_Query( $args ); ?> 
    <div class="row">
      <div class="col-md-4">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="salon ">
          <div class="img-sal ">
            <img  src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
          <div class = "parrafo">
            <h2><?php the_title(); ?></h2>
          </div>
        </div>
    <?php endwhile; ?>
  </div>
</section>
<?php get_footer(); ?>