<?php
    get_header();
    //args
    $arg=array(
        "post_type"=>["post","myexperience","myskills"]
    );
    $query=new  WP_Query($arg);
?>
<div class="row">
  <div class="container">
    <h1 class="text-center postSection"> Our Posts </h1>
    <hr> 
    <div class="row">
    
  
    <?php 
    if($query->have_posts())
    {
      while($query->have_posts()) 
      {
        $query->the_post();
    ?>
    <div class="col-4">
      <div class="card" style="width: 18rem;">
          <?php the_post_thumbnail("medium",["class"=>"card-img-top"]); ?>
          <hr>
          <div class="card-body">
             <a href="<?php the_permalink()?>">
                <h5 class="card-title"><?php the_title(); ?></h5>
            </a> 
            
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
      </div>
     <br>
    </div>
     

  <?php 
        }
      }
  ?>
  
  </div>
  </div> 
</div>

<?php
    get_footer();
?>