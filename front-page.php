<?php
    get_header();
?>
<div class="row mainDiv">
  <div class="container">
    <h3 class="mainHeader">Welcome To My First Website.</h3>
  </div>
</div>
<!--end slider-->
<!-- About Us Section-->
<div class="aboutSection">
  <div class="container">
    <br>
    <h1 class="text-center aboutTitle2"> About Me </h1>
    <hr>
    <div class="row">
      <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-6  col-xl-6">
        <img class="img-fluid" 
          src="/wp-content/themes/first theme/assets/images/rsz_2rsz_1linkedin_profile_picture_tips.png">
      </div>
      <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-6  col-xl-6 ">
        <br>
        <br>
        <h3 class="aboutTitle2">
          About Me
        </h3>
        <span>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              It has survived not only five centuries, but also the leap into electronic typesetting, 
              remaining essentially unchanged.
              It was popularised in the 19120s with the release of Letraset sheets containing Lorem Ipsum passages,
              and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </span>  
      </div>
    </div>
    <br>
  </div>
</div>   
<br> 
<!--end About us section-->
<div class="row">
  <div class="container">
    <h1 class="text-center postSection"> Our Posts </h1>
    <hr> 
    <div class="row">
    
  
    <?php 
    if(have_posts())
    {
      for($i=1;$i<4;$i++)
      {
        if(have_posts())
        {
          the_post();
        }
        
    ?>
    <div class="col-4">
      <div class="card" style="width: 18rem;">
          <?php the_post_thumbnail("medium",["class"=>"card-img-top"]); ?>
          <hr>
          <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
      </div>

    </div>
     

  <?php 
        }
      }
  ?>
  
  </div>
  </div> 
</div>
<br>
<!--end posts section-->
<!--skill set-->
<div class="row aboutSection">
  <div class="container">
  <br>
    <h1 class="text-center aboutTitle2"> My Skills </h1>
    <hr>
    <span class="entypo-graduation-cap"></span>
          <dl>
            <dt>Skill Set</dt>
            <dd>Html</dd>
            <dd>Css</dd>
            <dd>JS</dd>
            <dd>JQuery</dd>
            <dd>Angular</dd>
            <dd>PHP</dd>
            <dd>Laravel</dd>
            <dd>Node JS</dd>
            <dd>Python</dd>
            <dd>Django</dd>
            <dd>Ruby</dd>
          </dl>    
  </div>
</div>

<?php
    get_footer();
?>