
<?php kill_footer(); ?>
<div class ="bit-body">
  <div class="bit_admin-head mb-3">
    <a class="bit_back" href="?page=bit-preloader"><i class="nc-icon-outline arrows-1_circle-left-38 icon"></i></a>
    <span calss="text-muted">ПОЗИЦИЯ</span>
  </div>  
  <div class="container">
    <form class="row" id="bitform" action="?page=bit-preloader&mode=position" method="post">

      <div class ="col-md-4  pt-2 fadeIn animated">
        <input type ="radio" id="control_01" name="position" value="shortcode" <?php checked('shortcode',$data);?>>
        <label class="bit-radio" for="control_01">
          <h6>Через shortcode</h6> 
          <p><pre><?php echo htmlspecialchars("<?php echo do_shortcode('[bitpreloader]');?>");?> </pre></p> 
        </label>
      </div>

      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_02" name="position" value="frontpage" <?php checked('frontpage',$data);?> >
        <label class="bit-radio" for="control_02">
          <h6>главная (домашняя)</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/frontpage.png');?>">
        </label>
      </div> 

 
      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_03" name="position" value="homepage" <?php checked('homepage',$data);?> >
        <label class="bit-radio" for="control_03">
          <h6>последние посты</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/homepage.png');?>">
        </label>
      </div> 

 
      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_04" name="position" value="attachment" <?php checked('attachment',$data);?> >
        <label class="bit-radio" for="control_04">
          <h6>страница вложения</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/attachment.png');?>">
        </label>
      </div> 

 
      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_05" name="position" value="post" <?php checked('post',$data);?> >
        <label class="bit-radio" for="control_05">
          <h6>страница записи</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/post.png');?>">
        </label>
      </div> 

 
      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_06" name="position" value="page" <?php checked('page',$data);?> >
        <label class="bit-radio" for="control_06">
          <h6>постоянная страница</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/page.png');?>">
        </label>
      </div> 

 
      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_07" name="position" value="cat" <?php checked('cat',$data);?> >
        <label class="bit-radio" for="control_07">
          <h6>страница категории</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/cat.png');?>">
        </label>
      </div> 

 
      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_08" name="position" value="tag" <?php checked('tag',$data);?> >
        <label class="bit-radio" for="control_08">
          <h6>архив по меткам</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/tag.png');?>">
        </label>
      </div> 


      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_09" name="position" value="404error" <?php checked('404error',$data);?> >
        <label class="bit-radio" for="control_09">
          <h6>страница 404</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/404error.png');?>">
        </label>
      </div> 


      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_10" name="position" value="all" <?php checked('all',$data);?> >
        <label class="bit-radio" for="control_10">
          <h6>Все страницы</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/all.png');?>">
        </label>
      </div> 

      <input type="hidden" name="bitsc" value="bit"/>
    </form>
  </div>
</div>
<?php save_block();?>
<script>
 var c01 = document.getElementById('control_01');
 var c02 = document.getElementById('control_02');
 var c03 = document.getElementById('control_03');
 var c04 = document.getElementById('control_04');
 var c05 = document.getElementById('control_05');
 var c06 = document.getElementById('control_06');
 var c07 = document.getElementById('control_07');
 var c08 = document.getElementById('control_08');
 var c09 = document.getElementById('control_09');
 var c10 = document.getElementById('control_10');

c01.onclick=c02.onclick=c03.onclick=c04.onclick=c05.onclick=c06.onclick=c07.onclick=c08.onclick=c09.onclick=c10.onclick=function() {
    document.getElementById('bitform').submit();
    document.getElementById('bitloader').setAttribute("style","display:block !important;");
   }
</script>