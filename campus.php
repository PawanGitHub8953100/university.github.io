<html>
<head><title>BigBackground</title>
<style>
body{
background-color:rgba(0,0,0,0.2);
}

         .btn {
            width: 100px;
            height: 40px;
            cursor: pointer;
            border: none;
            outline: none;
            font-size: 1em;
            color:rgba(170, 8, 8, 0.999);
            position: relative;
			font-family:"Gill Sans Ultra Bold";
			top:20px;
			left:700px;
            background-color: rgba(0,0,0,0.3);
			border-radius:02%;
        }
        
        .btn::after {
            content: '';
            position: absolute;
            top: 0px;
            right: 0px;
            width: 0%;
            height: 1.5px;
            background-color:rgba(170, 8, 8, 0.998) ;
            transition: 1s;
        }
        
        .btn:hover.btn::after {
            width: 100%;
        }
        
        .btn:hover.btn::before {
            width: 100%;
        }
        
        .btn::before {
            content: '';
            position: absolute;
            bottom: 0px;
            left: 0px;
            width: 0%;
            height: 2px;
            background-color:rgba(170, 8, 8, 0.998);
            transition: 1s;
        }

	.btn:hover{
		background-color:rgba(170,8,8,0.500);
		color:white;
		}
		.bg-ground{
		background-color:white;
		width:700px;
		font-weight:bolder;
		font-size:xx-large;
		color:#550000;
		font-family:"Bradley Hand ITC";
		position:relative;
		top:30px;
		
		}
.heading{
 width:90em;
 height:200px;
 background:rgba(170, 8, 8, 0.998);
 font-family:"Bradley Hand ITC";
 font-weight:bolder;
 box-shadow:80px 100px 100px 0px rgba(0,0,0,0.5) inset;
 }
 .heading #p{
 position:absolute;
 top:-50px;
 left:200px;
 font-size:100px;
 color:white;
 text-shadow:02px 02px 5px red; 
 }
 .imd-div{
  width:85em;
  height:600px;
  position:relative;
  top:40px;
  left:85px;
 }
 .img{
 width:85em;
 height:600px;
 position:absolute;
 }
 .span-s{
 	width:150px;
	height:50px;
	background:none;
	position:absolute;
	bottom:-200px;
	left:650px;
	
 }
 .sp{
 	width:35px;
	height:35px;
 	border-radius:50%;
	display:inline-block;
	position:relative;
	top:-10;
	left:18px;
	opacity:0.5;
}
</style>
</head>
<body>

<div class="heading"><p id="p">Big Campus Ground</p></div>

<div>
<!--&larr;(left arrow code)-->
<button class="btn" onclick="javascript:history.back();">Back</button>
</div>
<div class="bg-ground">My University in Big Campuse Field Ground .....</div>
<div class="imd-div">
<img class="img" src="images/gr2.jpg" />
<img class="img" src="images/gr3.jpeg" />
<img class="img" src="images/gr1.jpg" />
</div>
<div class="span-s">
<p class="sp"></p>
<p class="sp"></p>
<p class="sp"></p>
</div>
<script>
window.onload=function(){
const image = document.querySelectorAll(".img");
const sp = document.querySelectorAll(".sp");

let imgNo=0;
setInterval(()=>{
 for(let i=0;i<image.length;i++){
 image[i].style.display="none";
 sp[i].style.backgroundColor= "white";
 }
 
 image[imgNo].style.display = "block";
  sp[imgNo].style.backgroundColor= "brown";
 //image[imgNo].style.boxShadow= "0px 0px 20px 0px black";
 imgNo++;
 if(imgNo==3){
 imgNo=0;
 
	 }
	 
  },3000);
}
  
</script>
</body>
</html>