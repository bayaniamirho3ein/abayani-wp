<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    
</head>
<body class="" id="body">

  <header class="bg-white py-3 py-md-0 sticky-top ">
    <div class="container">
     
      
    <div id="main-menu" class="d-md-flex  justify-content-between"> 
       <ul class="menu list-unstyled mr-5 ">
        <li class="item">
          <a href="<?php bloginfo('home') ?>">صفحه اصلی</a>
        </li>
        <li class="item">
          <a href="#">گنو لینوکس</a>
        </li>
        <li class="item"><a href="#">برنامه نویسی</a></li>
        <li class="item" ><a href="#">DevOps</a></li>
        <div class="clear"></div>
      </ul>
    
     
      <div class=" py-3" id="social">
        <div>
          <a href="#" class="text-dark px-2">
            <i class="fab fa-github "></i>
          </a>
          <a href="#" class=" px-2">
            <i class="fab fa-linkedin blue_linkedin "></i>
          </a>
          

        </div>
      </div>
    </div> 
    
      <div class="my-2 d-md-none">

        <a href="#" id="menu" class=" on " >
              <div class="menu-bar">
                  <input type="checkbox"/>
                  <span></span>
                  <span></span>
                  <span></span>
              </div>
        </a>
      </div>
      
    </div>
    <div class=" d-md-none " id="mob-menu">
                        <form method="get" action="<?php echo get_home_url(); ?>" class="searchly-mob">
                        <input name="s" class=" " type="search" placeholder="جستوجو...">
                        <button class=" search-submit " id="search-btn">
                            <i class="fal fa-search text-muted "></i>
                        </button>
                        </form>
                        <div id="side-ul">
      <ul>
        <li><a href="<?php bloginfo('home') ?>">صفحه اصلی</a></li>
        <li><a href="#">برنامه نویسی</a></li>
        <li><a href="#">گنو لینوکس</a></li>
        <li><a href="#">DevOps</a></li>

      </ul>
</div>
<div class=" " id="social-mob">
        <div>
          <a href="#" class="text-white px-2">
            <i class="fab fa-github "></i>
          </a>
          <a href="#" class=" px-2">
            <i class="fab fa-linkedin blue_linkedin "></i>
          </a>
          

        </div>
      </div>


      </div>
    
  </header>
  


 



