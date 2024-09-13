<?php get_header(); ?>

<div class="container-fluid main-page-container px-0" style="background-image: url(<?php echo get_theme_file_uri('images/hero.webp')?>);">
<div class="container headline-page-container">
        <div class="row align-items-end">
        </div>
      </div>
</div>


<div class="container sub-content">
      <div class="row justify-content-between">
        <div class="col-4">
          <h3>Market Challenges</h3>
          <div class="mini-divider-branded"></div>
        </div>
        <div class="col-8">
          <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonuimmy nibh <span>euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span></h4>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 d-flex justify-content-end">
          <div class="see-more">See All <i class="bi bi-arrow-right"></i></div>
        </div>
      </div>
      <div class="row mt-4">    
    
      <?php 
while(have_posts()) {
  the_post();
?>

  <div class="col-4 d-flex flex-column">
  <a href="<?php the_permalink(); ?>">
    <img src="<?php echo get_theme_file_uri('images/market-challenges-1.jpg');?>" class="article-image" alt="Sustainability" />
    <h5 class="mt-3"><?php the_title(); ?></h5>
    <p><?php the_excerpt(); ?></p>
    </a>
  </div>
  


        <?php };?>
        
      </div>
    </div>


    

    
      

<?php get_footer(); ?>
