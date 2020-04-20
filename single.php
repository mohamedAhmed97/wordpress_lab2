<?php
    get_header();
    if(have_posts())
    {
        the_post();
    }
       
?>
<!-- About Us Section-->
<div class="aboutSection">
  <div class="container">
    <?php the_post_thumbnail("medium",["class"=>"ml-5 blogPic"]); ?>  
    <br>
    <h1 class="text-center aboutTitle2"> <?php the_title(); ?> </h1>
    <hr>
    <div class="row">
      <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-6  col-xl-6 ">
        <br>
        <br>
        <h3 class="aboutTitle2">
            <?php the_title(); ?>
        </h3>
        <span>
            <?php the_content(); ?>
        </span>  
        <span> <?php the_category();?> </span>
      </div>
    </div>
    <br>
  </div>
</div>   
<?php
    get_footer();
?>