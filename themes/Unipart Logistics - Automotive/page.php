<?php get_header();
while(have_posts()) {
    the_post();
?>


<div class="container-fluid main-page-container px-0" style="background-image: url(<?php  the_post_thumbnail('full', array('class' => 'featured-image'));?>);">
<div class="container headline-page-container">
        <div class="row align-items-end">

        </div>
      </div>
</div>

<?php 
$parentID = wp_get_post_parent_id(get_the_ID());
if($parentID) { ?>
    <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href=<?php echo get_permalink($parentID); ?>)><?php echo get_the_title($parentID); ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
  </ol>
</nav>
    </div>    
</div>
</div>

<?php }
?>



<div class="container sub-content" style="padding-top: 30px">
      <div class="row justify-content-between mb-5">
        <div class="col-5">
          <h3><?php the_title();?></h3>
          <div class="mini-divider-branded"></div>
        </div>
       
      </div>
   <div class="row">
    <div class="col-12">
     <?php the_content(); ?>
</div>
     </div>
    </div>

  

          

<?php }
 get_footer(); ?>
