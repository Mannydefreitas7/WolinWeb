<section class="blog padding-lg">
 <div class="container">
   <div class="heading-block center">
           <h2>Last Articles</h2>
           <span class="divcenter">High Quality Articles On Web Design & Marketing</span>
  </div>

   <div class="blogWrapper">
     <?php
require($_SERVER['DOCUMENT_ROOT']."/blog/wp-blog-header.php");

?>
<?php
// Get the last 3 posts.
global $post;
$args = array( 'posts_per_page' => 5 );
$myposts = get_posts( $args );

foreach( $myposts as $post ) :	setup_postdata($post); ?>
<div class="post">
  <?php if ( has_post_thumbnail() ) : ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail(); ?>
      </a>
  <?php endif; ?>
  <div class="entry-content">


  <h4><?php the_title(); ?></h4>
  <p><?php the_excerpt(); ?></p>
  <a class="post-link" href="<?php the_permalink(); ?>">Read More</a>
</div>
</div>
<?php endforeach;
?>

  </div>
 </div>
 <svg id="blog" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
     <path d="M0 100 C 20 0 50 0 100 100 Z" />
 </svg>
<div class="padding-lg"></div>
</section>
