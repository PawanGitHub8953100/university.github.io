<html>
<head>
<title>Library</title>
<style>
body{
background-color:rgba(0,0,0,0.2);
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
			top:10px;
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
.heading{
 width:1505px;
 height:200px;
 background:rgba(170, 8, 8, 0.998);
 font-family:"Bradley Hand ITC";
 font-weight:bolder;
 box-shadow:80px 100px 100px 0px rgba(0,0,0,0.5) inset;
 }
 .heading #p{
 position:absolute;
 top:-50px;
 left:500px;
 font-size:100px;
 color:white;
 text-shadow:02px 02px 5px red; 
 }
.main-div{
width:94em;
height:230px;
background-color:white;
margin:auto;
}
#top-para{
color:#550000;
font-family:"Bradley Hand ITC";
font-weight:bolder;
font-size:x-large;
padding:20px;
text-align:justify;
}
.image-div-lib{
width:1150px;
height:500px;
position:relative;
top:-11px;
left:350px;
overflow:hidden;
}
.img-lib{
width:50em;
height:400px;
position:absolute;
}
.bottom-div-lib{
width:94em;
height:230px;
background-color:white;
margin:auto;
position:absolute;
top:912px;
}
#para{
color:#550000;
font-family:"Bradley Hand ITC";
font-style:italic;
font-weight:bolder;
font-size:large;
padding:20px;
text-align:justify;

}

</style>
</head>
<body>
<div class="heading"><p id="p">Library</p></div>

<div>
<button class="btn" onClick="javascript:history.back();">Back</button>
</div>
<div class="main-div">
<p id="top-para">
A library is a collection of books, and possibly other materials and media, that is accessible for use by its members and members of allied institutions. Libraries provide physical (hard copies) or digital access (soft copies) materials, and may be a physical location or a virtual space, or both. A library's collection normally includes printed materials which can be borrowed, and a reference section of publications which are not permitted to leave the library and can only be viewed inside the premises. There may be other physical resources in many formats, such as commercial releases of films, television programmes, other video recordings, radio, music and audio recordings on DVD, Blu-ray, CD and cassette, besides access to information, music or other content held on bibliographic databases.
</p>
<div class="image-div-lib">
<img src="images/lab1.jpg"  class="img-lib"/>
<img src="images/lib2.jpg"  class="img-lib"/>
<img src="images/lib4.jpg"  class="img-lib"/>
</div>
<div class="bottom-div-lib">
<p id="para">
Libraries can vary widely in size and may be organised and maintained by a public body such as a government, an institution such as a school or museum, a corporation, or a private individual. In addition to providing materials, libraries also provide the services of librarians who are trained experts in finding, selecting, circulating and organising information, and in interpreting information needs, navigating and analysing very large amounts of information with a variety of resources.

Library buildings often provide quiet areas for studying, as well as common areas for group study and collaboration, and may provide public facilities for access to their electronic resources, such as computers and access to the Internet. The library's clientele and services offered vary depending on its type: users of a public library have different needs from those of a special library or academic library, for example. Libraries may also be community hubs, where programmes are made available and people engage in lifelong learning. Modern libraries extend their services beyond the physical walls of the building by providing material accessible by electronic means, including from home via the Internet.

The services that libraries offer are variously described as library services, information services, or the combination "library and information services", although different institutions and sources define such terminology differently.
</p>
</div>
</div>
</body>
<script>
window.onload=function(){
const img= document.querySelectorAll(".img-lib");
let co=0;

setInterval(()=>{
for(let i=0;i<img.length;i++){
img[i].style.display="none";
}
img[co].style.display="block";
co++;
if(co==3){
co=0;
}
},2000);
}


</script>

</html>