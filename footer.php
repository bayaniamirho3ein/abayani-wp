<footer  class="" >
  <div class="container">
    <div class="" id="footer-copy-right ">
      <div class="copyright-cell text-white">
        تمامی حقوق برای سایت abayani.ir  محفوظ می باشد.	                        
      </div>
    </div>
  </div>


</footer>


<?php wp_footer(); ?>
    
</body>

<script>
  $(function() {
    $("#menu").click(function (event) {
                if ($("#menu > div > span:nth-child(2)").hasClass("sidebar-open1") ) {
                    $("#menu > div > span:nth-child(2)").removeClass("sidebar-open1");
                    $("#menu > div > span:nth-child(3)").removeClass("sidebar-open2");
                    $("#menu > div > span:nth-child(4)").removeClass("sidebar-open3");
                    $("#mob-menu").css("right" , "-300px");

                    

                } else {
                  $("#menu > div > span:nth-child(2)").addClass("sidebar-open1");
                  $("#menu > div > span:nth-child(3)").addClass("sidebar-open2");
                  $("#menu > div > span:nth-child(4)").addClass("sidebar-open3");
                  $("#mob-menu").css("right" , "0");
                  $("#mob-menu").css("transition", "all .6s ease");



                }
                event.preventDefault();


            });
          



    $("#submit").addClass('btn  btn-lg  d-block w-100').attr("value","ارسال دیدگاه");
    $(" div.reply > a").html('پاسخ دهید').addClass("btn  btn-sm");
    $("#tags > a").addClass("badge ");


  
    $("div.comment-author.vcard > img").attr("width","74").attr("height","74").addClass("rounded-circle");
    if ($("ol li").asClass("depth-2")){
      $(this).css("padding-right","0");
    }else{

    }




   

     
    
   
     
     
      
            


  });
</script>
</html>
    
