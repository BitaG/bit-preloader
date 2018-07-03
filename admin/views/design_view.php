<?php kill_footer(); ?>
<div class ="bit-body">
  <div class="bit_admin-head mb-3">
    <a class="bit_back" href="?page=bit-preloader"><i class="nc-icon-outline arrows-1_circle-left-38 icon"></i></a>
    <span calss="text-muted">ДИЗАЙН</span>
  </div>  
  <div class="container">
    <form class="row" id="bitform" action="?page=bit-preloader&mode=design" method="post">

      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_01" name="design" value="load-1" <?php checked('load-1',$data);?> >
        <label class="bit-radio" for="control_01">
          <h6>load-1</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/th-1.jpg');?>">
        </label>
      </div> 
     
      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_02" name="design" value="load-2" <?php checked('load-2',$data);?> >
        <label class="bit-radio" for="control_02">
          <h6>load-2</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/th-2.jpg');?>">
        </label>
      </div> 
     
      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_03" name="design" value="load-3" <?php checked('load-3',$data);?> >
        <label class="bit-radio" for="control_03">
          <h6>load-3</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/th-3.jpg');?>">
        </label>
      </div> 
     
      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_04" name="design" value="load-4" <?php checked('load-4',$data);?> >
        <label class="bit-radio" for="control_04">
          <h6>load-4</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/th-4.jpg');?>">
        </label>
      </div> 
     
      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_05" name="design" value="load-5" <?php checked('load-5',$data);?> >
        <label class="bit-radio" for="control_05">
          <h6>load-5</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/th-5.jpg');?>">
        </label>
      </div> 
     
     
      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_06" name="design" value="load-7" <?php checked('load-7',$data);?> >
        <label class="bit-radio" for="control_06">
          <h6>load-7</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/th-7.jpg');?>">
        </label>
      </div> 

         
      <div class ="col-md-4  pt-2 fadeIn animated"> 
        <input type ="radio" id="control_07" name="design" value="load-9" <?php checked('load-9',$data);?> >
        <label class="bit-radio" for="control_07">
          <h6>load-9</h6> 
          <img src="<?php echo plugins_url('bit-preloader/admin/views/assets/img/th-9.jpg');?>">
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
 
    
c01.onclick=c02.onclick=c03.onclick=c04.onclick=c05.onclick=c06.onclick=c07.onclick=function() {
    document.getElementById('bitform').submit();
    document.getElementById('bitloader').setAttribute("style","display:block !important;");
   }
</script>