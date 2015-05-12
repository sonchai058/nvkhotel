<script>
$(document).ready(function(){

 

  $('.menu_small').hide();
});
  $("#bt_slide").click(function(){
      $('.menu_small').slideToggle("fast");
  });
  
<?php
	if(uri_seg(2)=='package_info' && uri_seg(3)==''){?>
    $('#package_info').dataTable();
<?php	
	}
?>
  
</script>