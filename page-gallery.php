
<?php get_header(); ?>
<section class="galeria ">
  <h2 style="color:black;     padding-top: 175px;
    "> Nuestra Galeria</h2>
    <div class=" flex-salon">
    <?php $args = array( 'post_type' => 'galeria'); ?>
    <?php $loop = new WP_Query( $args ); ?> 
<div class="row">
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="col-md-4">
      <div class="gale-div">
        <div class="gale-item">
            <img  src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</div>
</section>
<?php get_footer(); ?>