<?php
    get_header();
    the_post();
?>
<!-- About Us Section-->
<div class="aboutSection">
  <div class="container">
    <br>
    <h1 class="text-center aboutTitle2"> <?php the_title(); ?> </h1>
    <hr>
    <div class="row">
        <br>
        <br>
        <h3 class="aboutTitle2">
            <?php the_title(); ?>
        </h3>
        <span>
            <?php the_content(); ?>
        </span>  
      </div>
    <br>
  </div>
</div>   
<?php
    get_footer();
?>