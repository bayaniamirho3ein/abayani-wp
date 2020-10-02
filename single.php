<?php get_header(); ?>
<section class="dark " style="height : 163px ">
<div class="container">

    <div id="post-path-div">
        <h3 class="mb-3">وبلاگ</h3>
        <?php while(have_posts()) {
    the_post(); ?>

        <span class="" id="post-path">
            <span><a  class="" href="http://localhost/wp">صفحه اصلی</a></span>
            <i class="fa fa-angle-left edit"></i>
            <span class=""><a  href="http://"><?php echo get_the_category_list(','); ?> </a></span>
            <i class="fa fa-angle-left edit"></i>
            <span class="" id="ft"><?php the_title(); ?></span>





        </span>
        <?php } ?>
    </div>
  
    

</div>

</section>


<section class=" ">
    <div class="container-main">
   
        <div id="post-side" class="row">
                 <?php while(have_posts()) {
                    the_post(); ?>
            <div id="post-content" class="  col-lg-8  ">
                <div class="border mb-3" id="post-content-box">
                    <div>
                        <h1 class="h1"><?php the_title(); ?></h1>
                    </div >
                    <div class="pt-2 mb-3" >
                    <div class="d-inline-block pl-4" id="post-data">
                        <i class="fal fa-clock pl-1 grey-icon"></i>
                        <span class="font-size"><?php the_date('j F Y'); ?></span>
                    </div>
                    <div class="d-inline-block pl-4" id="post-user" >
                        <i class="fal fa-user-alt pl-1 grey-icon"></i>
                        <span class="font-size">ارسال شده توسط <?php the_author_posts_link(); ?> </span>
                    </div>
                    <div class="d-inline-block pl-4" id="post-cat" >
                        <i class="fal fa-folders pl-1 grey-icon"></i>
                        <span class="font-size"><?php echo get_the_category_list(','); ?> </span>
                    </div>
                    <div class="d-inline-block pl-4" id="post-cat" >
                        <i class="fal fa-eye pl-1 grey-icon"></i>
                        <span class="font-size edit-2">
                            <?php
                                if ( function_exists( 'get_post_view_count' ) ) {
                                    echo get_post_view_count( get_the_ID() ) .' بازدید ';
                                }
                            ?>
                        </span>
                    </div>
                    </div>
                    <div class="" id="post-content">
                        <?php the_content() ?>
                   
                   
                    </div>


                </div>


                <div class="border bg-white " id="post-com">
 

                        <div class="comment-section">
                        <?php if(is_singular() && !is_page()) { ?>
                        <div class="clearfix"></div>
                        <?php
                         comments_template();
                        }?>
                        </div>


                        


                
               

                </div>

<!-- end-comment -->































            
            </div>
                    <?php } ?>



 







            <div id="side" class="col-lg-4 d-none d-md-block ">
                <div id="left-side" class="">
                    <div class="bg-white  border mb-4 search-side d-f" id="side-search">
                        <div  id=search-mob>
                        <h5 class="widget-title">جستوجو</h5>
                        <form  method="get" action="<?php echo get_home_url(); ?>" class="searchly">
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
                    <div class="bg-white  border mb-4 search-side" id="tags">
                        <h5 class="widget-title">برچسب ها</h5>
                        <?php echo the_tags(); ?>
                       
                        
                    </div>
                </div>
            </div>
            
    
        </div>

    </div>
</section>



<?php
 get_footer();


