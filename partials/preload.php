	<div class="elipse">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-bijou.png" alt="">
  </div>
		<script>
      $(document).ready(function () {
        setTimeout(function () {
          $('.elipse').fadeOut(3000);
        }, 3000)
      });
      </script>

      <style>
        .elipse{
        background: #fff;
        position: fixed;
        z-index: 999;
        height: 100%;
        width: 100%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        </style>