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
      <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-6  col-xl-6">
        <img class="img-fluid" 
          src="/wp-content/themes/first theme/assets/images/rsz_2rsz_1linkedin_profile_picture_tips.png">
      </div>
      <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-6  col-xl-6 ">
        <br>
        <br>
        <h3 class="aboutTitle2">
            <?php the_title(); ?>
        </h3>
        <span>
            <?php the_content(); ?>
        </span>  
      </div>
    </div>
    <br>
  </div>
</div>   
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