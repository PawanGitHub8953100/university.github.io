<?php include("Admin_Includes/AdminPanalHeader.php")?>
<form action="_admin/lib/login.php" method="post"  enctype="multipart/form-data">
<div class="contact-header-img"><img class="contact-img" src="images/IICS.webp"/>
<div class="contact-header-div">
	<div class="contact-top-heading"><p id="text-heading">AdminPage</p></div>
</div>
</div>
<div id="msg" ><?=$_REQUEST['msg']?></div>

<p class="univers-elem-p">
         Prayagraj University is an internationally reputed temple of learning, situated in the holy city of Varanasi. This creative and innovative
            university was founded by the great nationalist leader, Pandit Madan Mohan Malaviya, in 1916, through close cooperation with great personalities like
            Dr Annie Besant, who viewed it as the University of India. Banaras Hindu University was established by the Parliamentary legislation-ASU Act 1915.
			<br>
			 A.S.U. Allahabad State University, before 2015 as the Uttar Pradesh Technical University, is a public collegiate university in Prayagraj, Uttar Pradesh, India. It was established as the Uttar Pradesh Technical University through the Government of Uttar Pradesh on 8 May 2000. Wikipedia
			</p>
			
		<div id="counter" ng-init="GetAllCount();"></div>

<!------------------IMage Callender Logo And University Logo----------------->		
            <div class="univers-logo">
                <div class="icon-border">
                    <img src="images/calender.png" alt="">
                </div>
				<div class="univers-logo-elem" data-count="1916">1916</div>
            </div>
			<div class="univers-logo-1">
                <div class="icon-border">
                    <img src="images/univers-logo-1.png" alt="">
                </div>
				<div class="univers-logo-elem" data-count="1916">Branch</div>
            </div>
  
        </div>
<!---------LogIn----Page----Heading----------->	
  <!--	
	<div class="login-div-elem"><img id="login_img" src="images/Admin_login_logo_.png"/>
		<div class="animate_div"><a class="login_a" href="javascript:Userlogin();">Login</a></div>
	</div>-->
	
<!---------LogIn----Page--------------->	
<!--	<div class="login-form">
		<div class="login">
			<input type="text" id="user_name" autocomplete="off" name="user_name" placeholder="username"/>		
			<input type="password" name="user_pass" id="user_pass" placeholder="password"/>
		</div>
		<div class="button">
			<input type="submit" id="button" value="Login"/>
			<input type="reset" id="button" value="Cancel"/>
		</div>
		<div id="msg" ><?=$_REQUEST['msg']?></div>
	<a id="forget" href="#">froget?</a>
	</div>-->
		
<!------------Image-Slider----------------------------->
	<div class="admin-middel-view-div">
		<div class="admin-container">
        <a href="images/book3.jpg"><img src="images/book3.jpg" class="admin-slide"/></a>
        <a href="images/ai3.jpg"><img src="images/ai3.jpg" class="admin-slide"/></a>
        <a href="images/ai2.jpeg"><img src="images/ai2.jpeg" class="admin-slide"/></a>
		<a href="images/book2.webp"><img src="images/book2.webp" class="admin-slide"/></a>
    </div>
	</div>
<!--Image Animation-->
	<script>  
	    window.onload=function() {
      let imgNo = 0;
	    const sliderImg = document.querySelectorAll(".admin-slide");
        
       setInterval(() => {
	    for (let i = 0; i < sliderImg.length; i++) {
            // console.log(sliderImg[i]);
            sliderImg[i].style.display = "none";
           
        }
		
        sliderImg[imgNo].style.display = "block";
       	sliderImg[imgNo].style.boxShadow= "0px 0px 20px 0px black";
        imgNo++;
        if (imgNo===4) {

            imgNo=0;
        }
	}, 5000);
   }
  
	</script>

	<input type="hidden" name="act" id="act" value="sign_in" />
</form>
