<?php if(!is_front_page()) : ?>
  <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php if(is_active_sidebar('sidebar')): ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div><!-- /.blog-sidebar -->
<?php endif; ?>
  </div><!-- /.row -->

  </div><!-- /.container -->
<footer class="blog-footer">
  <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
<?php wp_footer(); ?>

<script type="text/javascript" src="<?php echo get_bloginfo('template_url') . '/js/scripts.js' ?>"></script>

<?php if ( get_theme_mod('is_parallax') == true) {
  echo'
<script type="text/javascript" src="' . get_bloginfo('template_url') . '/js/scrollax.min.js"></script>';
echo '<script> 
\'use strict\';
$.Scrollax();
</script>';
}
?>
 <script>
      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'post.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });

      });
    </script>
</body>
</html>
