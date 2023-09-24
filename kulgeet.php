<style>
 .kulgeet-heading{
 width:1000px;
 height:200px;
 background:rgba(170, 8, 8, 0.998);
 font-family:Geneva, Arial, Helvetica, sans-serif, "Harlow Solid Italic";
 font-size:3.5em;
 font-weight:bolder;
 margin:auto;
 box-shadow:05px 05px 0px 2px rgba(0,0,0,0.2);
 }
 .kulgeet-heading #p{
 position:relative;
 top:70px;
 left:200px;
 color:white;
 text-shadow:02px 02px 5px red; 
 }
 .kulgeet{
 width:400px;
 height:100px; 
 background:rgba(170, 8, 8, 0.999);
 position:absolute;
 top:350px;
 left:550px;
 box-shadow:0px 01px 0px 2px rgba(150,2,3,0.502);
 }
 

         .btn {
            width: 100px;
            height: 50px;
            cursor: pointer;
            border: none;
            outline: none;
            font-size: 1em;
            color:rgba(170, 8, 8, 0.999);
            position: relative;
			top:300px;
			left:700px;
            background-color: rgba(100, 5, 5, 0.108);
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
            height: 1px;
            background-color:rgba(170, 8, 8, 0.998);
            transition: 1s;
        }


</style>
<div class="kulgeet-heading"><p id="p"><b><u>UNIVERSITY KULGEET</u></b></p></div>
<div  class="kulgeet">
<audio src="kulgeet.mp3" preload="auto" autoplay controls style="position:absolute;top:28px;left:48px;"></audio>
</div>
<div>
<button class="btn" onclick="javascript:history.back();">&larr;</button>
</div>