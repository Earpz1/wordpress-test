<?php get_header(); ?>

<div class="container-fluid main-page-container px-0" style="background-image: url(<?php echo get_theme_file_uri('images/hero.webp')?>);">
<div class="container headline-page-container">
        <div class="row align-items-end">
          
        </div>
      </div>
</div>


<div class="container sub-content">
      <div class="row justify-content-between">
        <div class="col-8">
          <h3><?php the_title();?></h3>
          <h4 style="font-size: 100%;"><?php echo get_the_date('l jS F Y'); ?></h4>
          <div class="full-divider-branded"></div>
        </div> 

        <div class="col-4 d-flex flex-column justify-content-end align-items-end">
        <h6>News Archive</h6>
        <div class="full-divider-branded"></div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-8">
          <?php the_content(); ?>
        </div>
      </div>
      
      

<?php get_footer(); ?>
