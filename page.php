
<?php get_header(); ?>

<section class="mb-4 d-none d-md-block">
    <div id="search-header">
    <div id="" class="overlay">
    <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="جستوجو کنید...">
          <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
        </div>
      </div>
    </div>
   </div>
  </div>
</section>

  <section class="my-4">
  <div class="mb-2">
  <div class="container">
    <div class="vc_separator wpb_content_element vc_sep_dashed vc_sep_pos_align_center ">
      <span class="vc_sep_holder">
        <span class="vc_sep_line"></span>
      </span>
      <h4 id="title-post">نوشته های جدید</h4>
      <span class="vc_sep_holder ">
        <span class="vc_sep_line"></span>
      </span>
    </div>
  </div>
  </div>
  <div class="container">
    <div class="row">


    <?php while(have_posts()) {
      the_post(); ?>
      

      <div class=" col-md-6 col-lg-4 col-xl-3 mb-4">
        <div class="card">
          <a href="<?php the_permalink() ?>" id="img-top">
        <?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        }  ?>
        </a>

          <div class="card-body">
            <h3 class="card-title"><?php the_title(); ?></h3>
          </div>
          <div class="card-footer  ">
            <a href="<?php the_permalink(); ?>">
            <div id="klc" class="btn btn-danger btn-block">بیشتر بخوانید</div>
            </a>
          </div>
        
        </div>
      </div>

   <?php  } ?>

  

    </div>
  </div>
</section>

  

  <?php get_footer(); 
 

