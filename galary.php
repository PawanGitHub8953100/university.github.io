<?php
include("Admin_Includes/AdminPanalheader.php"); 
 global $acon;
 $sql="select * from gallery";
 $rs=mysqli_query($acon,$sql)or die(mysqli_error($con)); 
?>
<link  rel="stylesheet" href="Admin_css/gallery.css" type="text/css" media="screen"/>

<!--<html>
<head>
<script src="plugins/Lightbox/lightbox/js/prototype.js" type="text/javascript"></script>
<script src="plugins/Lightbox/lightbox/js/scriptaculous.js?load=effects" type="text/javascript"></script>
<script src="plugins/Lightbox/lightbox/js/lightbox.js" type="text/javascript"></script>
</head><body>-->

<form method="post" enctype="multipart/form-data" name="img_frm" id="img_frm" action="Admin_lib/imgUpload.php" onsubmit="return valid_gallery(this);">
 
<div class="upload_img_div">
<input type="file" name="upload_img[]" multiple id="upload_img"/>
<input type="submit" name="submitAct" id="submitAct" value="upload" />
</div>
<div class="msg"><?=$_REQUEST['msg']?></div>
<div class="main">
<div id="status"></div>

<div class="image_view_div">
<div><input type="checkbox" class="multi-select" onclick="selectAllGal(this)"/>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:gal_multi_delete()" ><div class="delete-btn"><p>DELETE</p></div></div>
<div>
<?php while($data=mysqli_fetch_assoc($rs)){?>
<a href="uploadsGall/<?=$data[gal_image]?>"><input type="checkbox" name="gal_multi_id[]" id="gal_multi_id[]" class="multi-select" value="<?=$data[gal_id]?>"/>
<img src="uploadsGall/<?=$data[gal_image]?>" width="200" height="180"/></a>
<?php }?>
</div>

</div>
  <input type="hidden" name="act"/>
  <input type="hidden" name="gal_id" value="<?=$data[gal_id]?>"/>

</form>

<!--<center>
<a href="images/lib1.jpeg" rel="lightbox[a]"><img src="images/lib1.jpeg" height=100 width=100></a>
<a href="images/lib2.jpg" rel="lightbox[a]"><img src="images/lib2.jpg" height=100 width=100></a>
<a href="images/pm1.jpg" rel="lightbox[a]"><img src="images/pm1.jpg" height=100 width=100></a>
<a href="images/lib3.jpeg" rel="lightbox[a]"><img src="images/lib3.jpeg" height=100 width=100></a>
<a href="images/gr3.jpeg" rel="lightbox[b]"><img src="images/gr3.jpeg" height=100 width=100></a>
<a href="images/lab1.jpg" rel="lightbox[b]"><img src="images/lab1.jpg" height=100 width=100></a>
<a href="images/IICS.webp" rel="lightbox[b]"><img src="images/IICS.webp" height=100 width=100></a>
</center>-->
<!--</div>
<div class="btn-div">
<button class="btn1" onClick="javascript:history.back();">Back</button>
</div>
</body>
</html>
-->
