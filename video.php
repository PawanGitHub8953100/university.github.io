<html>
<head>
<title></title>
<style>
.vid-heading{
 width:1520px;
 height:200px;
 background:rgba(170, 8, 8, 0.998);
 font-family:"Bradley Hand ITC";
 font-weight:bolder;
 box-shadow:80px 100px 100px 0px rgba(0,0,0,0.5) inset;
 }
 .vid-heading #p{
 position:absolute;
 top:-50px;
 left:200px;
 font-size:100px;
 color:white;
 text-shadow:02px 02px 5px red; 
 }
 .vid{
 position:absolute;
 top:250px;
 left:-40px;
 width:500px;
 height:700px;
 }
 

         .btnV {
            width: 100px;
            height: 50px;
            cursor: pointer;
            border: none;
            outline: none;
            font-size: 1em;
            color:rgba(170, 8, 8, 0.999);
            position: relative;
			top:-440px;
			left:300px;
            background-color: rgba(100, 5, 5, 0.108);
			border-radius:02%;
			cursor:pointer;
		
        }
        
        .btnV::after {
            content: '';
            position: absolute;
            top: 0px;
            right: 0px;
            width: 0%;
            height: 1.5px;
            background-color:rgba(170, 8, 8, 0.998) ;
            transition: 1s;
        }
        
        .btnV:hover.btnV::after {
            width: 100%;
        }
        
        .btnV:hover.btnV::before {
            width: 100%;
        }
        
        .btnV::before {
            content: '';
            position: absolute;
            bottom: 0px;
            left: 0px;
            width: 0%;
            height: 1px;
            background-color:rgba(170, 8, 8, 0.998);
            transition: 1s;
        }

.videos{
width:700px;
box-shadow:08px 10px 5px 1px brown;
position:relative;
top:50px;
left:50px;

}
.v1{
 position:absolute;
 top:-10px;
 left:500px;
 width:400px;
 height:auto;
 }
 

.videos1{
width:400px;
box-shadow:08px 10px 5px 1px brown;
position:relative;
top:280px;
left:500px;

}
</style>
</head>
<body>
<div class="vid-heading"><p id="p"><b>UNIVERSITY VIDEOS</b></p></div>
 
<div  class="vid">
 <video class="videos" src="video1.mp4" preload="auto"  controls >
 </video>
 </div>
 <div class="v1">
  <video class="videos1" src="video2.mp4" preload="auto" controls>
 </video>
<div>
<button class="btnV" onClick="javascript:history.back();">&larr;</button>
</div>

</body>
</html>