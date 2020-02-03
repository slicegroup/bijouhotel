<?php $args = array( 'post_type' => 'post_type_bannertwo', 'posts_per_page' => 1 ); ?>
<?php $loop = new WP_Query( $args ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php $args = get_post_custom( $post_id); ?>

    <div class="modal" id="mostrarmodal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><?php the_title(); ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
  <a href="<?php echo $args['link'][0]?>" target="_blank">
            <div class="modal-body">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            </div>
          </div>
        </div>
      </div>
  </a>

  <?php endwhile; ?>