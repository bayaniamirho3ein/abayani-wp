<?php get_header(); ?>
<section class="dark " style="height : 163px ">
        <div class="container">

            <div id="post-path-div">
                <h3 class="mb-3"  id="search-title">جستوجو</h3>
               

               
            </div>
        
            

        </div> <!---end-containr-->
</section>


<section class=" ">
    <div class="container-main">
   
        <div id="post-side" class="row">
            <div id="post-content" class="  col-lg-8  ">
                <div class="row">
            <?php if ( have_posts() ) : ?>
            <?php while(have_posts()) {
                the_post(); ?>
      

      <div class=" col-md-4 mb-2 ">
        <div class="card">
          <div id="overlay" class="overlay">
          <a href="<?php the_permalink() ?>" id="img-top">
        <?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        }  ?>
        </a>
      </div>

          <div class="card-body ">
            <h3 class="card-title "><?php the_title(); ?></h3>
          </div>
          <div class="card-footer  ">
            <a href="<?php the_permalink(); ?>">
            <div id="klc" class="btn btn-danger btn-block">بیشتر بخوانید</div>
            </a>
          </div>
        
        </div>
       
      </div>

   <?php  } ?>
   <?php else : ?>
    <span>موردی یافت نشد!</span>
    <?php endif; ?>

    </div>



            </div>

                    


           
                    

            <div id="side" class="col-lg-4 d-none d-md-block ">
                <div id="left-side" class="">
                    <div class="bg-white  border mb-4 search-side d-f" id="side-search">
                        <div  id=search-mob>
                        <h5 class="widget-title">جستوجو</h5>
                        <form method="get" action="" class="searchly">
                        <span class="screen-reader-text">جستجو برای:</span>
                        <input name="s" class="w-100 " type="search" placeholder="جستوجو...">
                        <button class=" search-submit " id="search-btn">
                            <i class="fal fa-search text-muted "></i>
                        </button>
                        </form>
                        </div>
                    </div>
                    <div class="bg-white  border mb-4 search-side" id="category">
                        <h5 class="widget-title">دسته‌ها</h5>
                        <ul>
                            <li class="">
                                <a href="#">جاوااسکریپت</a>
                            </li>
                            <li>
                                <a href="#">Material UI</a>
                            </li>
                            <li>
                                <a href="#">React JS</a>
                            </li>
                            <li>
                                <a href="#">React Native</a>
                            </li>
                            <li class="">
                                <a href="#">جاوااسکریپت</a>
                            </li>
                            <li>
                                <a href="#">Material UI</a>
                            </li>
                            <li>
                                <a href="#">React JS</a>
                            </li>
                            <li>
                                <a href="#">React Native</a>
                            </li>
                        </ul>
                        
                    </div>
                    <div class="bg-white  border mb-4 search-side" id="category">
                        <h5 class="widget-title">برچسب ها</h5>
                       
                        
                    </div>
                </div>
            </div>
            
    
        </div>  <!---post-side--->

    </div>   <!---end-container-main--->
</section>



<?php
 get_footer();


