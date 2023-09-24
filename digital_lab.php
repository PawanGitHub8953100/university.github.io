<style>

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
			top:0px;
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
		
.img-dig-div{
width:1515px;
height:auto;
background-color:rgba(0,0,0,0.1);
color:#770000;
}
.p1{
font-style:italic;
}
.throuth-div .throu-div{
display:inline-table;

}
#throu-div{
width:1300px;
height:200px;
background:white;
border-top:2px solid #880000;
border-left:1px solid #880000;
border-right:1px solid #880000;
box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
position:relative;
top:-130px;
}
#throu-div b{
 width:200px;
 height:40px;
 font-size:2em;
 background-color:rgba(170,8,8,0.909);
box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;

 border-radius:3%;
 color:white;
 position:relative;
 top:-15px;
 left:50px;
}

#throu-div .p1{
 padding:20px;
 color:white;
}

#img-thro{
width:200px;
height:150px;
}

.efi-div .efic-div #efi-img{
width:200px;
height:130px;
}
.efi-div #efic_div{
width:1300px;
height:200px;
background:white;
border-top:2px solid #880000;
border-left:1px solid #880000;
border-right:1px solid #880000;
box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
position:relative;
top:-130px;
left:200px;
}

.efi-div #efic_div b{
 width:200px;
 height:40px;
 font-size:2em;
 background-color:rgba(170,8,8,0.909);
 box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
 border-radius:3%;
 color:white;
 position:relative;
 top:-15px;
 left:50px;
	
}

.efi-div #efic_div .p1{
 padding:20px;
 color:white;
}

.conn-div .con-div #con-img{
width:200px;
height:130px;
}
.conn-div #con-div{
width:1300px;
height:200px;
background:white;
border-top:2px solid #880000;
border-left:1px solid #880000;
border-right:1px solid #880000;
box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
position:relative;
top:-130px;
left:200px;
}

.conn-div #con-div b{
 width:200px;
 height:40px;
 font-size:2em;
 background-color:rgba(170,8,8,0.909);
 box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
 border-radius:3%;
 color:white;
 position:relative;
 top:-15px;
 left:50px;
	
}

.conn-div #con-div .p1{
 padding:20px;
 color:white;
}



.qual-div .qu-div #qu-img{
width:200px;
height:130px;
}

.qual-div #qu-div{
width:1300px;
height:200px;
background:white;
border-top:2px solid #880000;
border-left:1px solid #880000;
border-right:1px solid #880000;
box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
position:relative;
top:-130px;
left:200px;
}

.qual-div #qu-div b{
 width:200px;
 height:40px;
 font-size:2em;
 background-color:rgba(170,8,8,0.909);
 box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
 border-radius:3%;
 color:white;
 position:relative;
 top:-15px;
 left:50px;
	
}

.qual-div #qu-div .p1{
 padding:20px;
 color:white;
}




.reli-div .rel-div #rel-img{
width:200px;
height:130px;
}
.reli-div #rel-div{
width:1300px;
height:200px;
background:white;
border-top:2px solid #880000;
border-left:1px solid #880000;
border-right:1px solid #880000;
box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
position:relative;
top:-130px;
left:200px;
}

.reli-div #rel-div b{
 width:200px;
 height:40px;
 font-size:2em;
 background-color:rgba(170,8,8,0.909);
 box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
 border-radius:3%;
 color:white;
 position:relative;
 top:-15px;
 left:50px;
	
}

.reli-div #rel-div .p1{
 padding:20px;
 color:white;
}




.sust-div .sus-div #sus-img{
width:200px;
height:130px;
}

.sust-div #sus-div{
width:1300px;
height:200px;
background:white;
border-top:2px solid #880000;
border-left:1px solid #880000;
border-right:1px solid #880000;
box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
position:relative;
top:-130px;
left:200px;
}

.sust-div #sus-div b{
 width:200px;
 height:40px;
 font-size:2em;
 background-color:rgba(170,8,8,0.909);
 box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
 border-radius:3%;
 color:white;
 position:relative;
 top:-15px;
 left:50px;
	
}

.sust-div #sus-div .p1{
 padding:20px;
 color:white;
}


.coll-div .col-div #col-img{
width:200px;
height:130px;
}
.coll-div #col-div{
width:1300px;
height:200px;
background:white;
border-top:2px solid #880000;
border-left:1px solid #880000;
border-right:1px solid #880000;
box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
position:relative;
top:-130px;
left:200px;
}

.coll-div #col-div b{
 width:200px;
 height:40px;
 font-size:2em;
 background-color:rgba(170,8,8,0.909);
 box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
 border-radius:3%;
 color:white;
 position:relative;
 top:-15px;
 left:50px;
	
}

.coll-div #col-div .p1{
 padding:20px;
 color:white;
}



.comp-div .com-div #com-img{
width:200px;
height:130px;
}
.comp-div #com-div{
width:1300px;
height:200px;
background:white;
border-top:2px solid #880000;
border-left:1px solid #880000;
border-right:1px solid #880000;
box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
position:relative;
top:-130px;
left:200px;
}

.comp-div #com-div b{
 width:200px;
 height:40px;
 font-size:2em;
 background-color:rgba(170,8,8,0.909);
 box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
 border-radius:3%;
 color:white;
 position:relative;
 top:-15px;
 left:50px;
	
}

.comp-div #com-div .p1{
 padding:20px;
 color:white;
}



.visual-div .vis-div #vis-img{
width:200px;
height:130px;
}
.visual-div #vis-div{
width:1300px;
height:200px;
background:white;
border-top:2px solid #880000;
border-left:1px solid #880000;
border-right:1px solid #880000;
box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
position:relative;
top:-130px;
left:200px;
}

.visual-div #vis-div b{
 width:200px;
 height:40px;
 font-size:2em;
 background-color:rgba(170,8,8,0.909);
 box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
 border-radius:3%;
 color:white;
 position:relative;
 top:-15px;
 left:50px;
	
}

.visual-div #vis-div .p1{
 padding:20px;
 color:white;
}




.inno-div .in-div #in-img{
width:200px;
height:130px;
}
.inno-div #in-div{
width:1300px;
height:200px;
background:white;
border-top:2px solid #880000;
border-left:1px solid #880000;
border-right:1px solid #880000;
box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
position:relative;
top:-130px;
left:200px;
}

.inno-div #in-div b{
 width:200px;
 height:40px;
 font-size:2em;
 background-color:rgba(170,8,8,0.909);
 box-shadow:01px 80px 100px 0px rgba(0,8,8,0.500)inset,0px 100px 00px 100px rgba(170,8,8,0.500) inset;
 border-radius:3%;
 color:white;
 position:relative;
 top:-15px;
 left:50px;
	
}

.inno-div #in-div .p1{
 padding:20px;
 color:white;
}
#p{
 padding:20px;
 width:1470px;
 height:50px;
 background-color:rgba(170,8,8,0.100);
 color:#770000;
}
h4{
font-size:xx-large;
color:#440000;
padding-left:10px;
}
.topic{
width:200px;
height:150px;
position:relative;
top:-30px;
left:30px;
}
.topic b{
background-color:rgba(0,8,8,0.1);
border-left:1px solid brown;
margin:08px;
}

.image-div{
width:700px;
height:400px;
overflow:hidden;
margin:auto;
}

.img{
width:700;
height:400px;
}
/*#im{
width:700;
height:400px;
animation:slider 5s;
transition:3s;
}

@keyframes slider{
			0%{
			transform:scale(0);
			}
			100%{
			transform:scale(1);
			}
	}


*/
</style>
<div>
<!--&larr;(left arrow code)-->
<button class="btn" onclick="javascript:history.back();">Back</button>
</div>
<div class="img-dig-div">
 <p class="p1" id="p">A Digital Lab allows testers to access real devices and browsers via an automation interface that provides a guaranteed level of uptime and availability of service. It supports Agile development of web and mobile applications with real-time results being verified on the devices and browsers.
 </p>
 
<div class="image-div">
 <a href="images/lab1.jpg"><img src="images/lab1.jpg" class="img" id="im" /> </a>
 <a href="images/lab2.webp"><img src="images/lab2.webp" class="img" id="im" /> </a>
 <a href="images/lab3.jpg"><img src="images/lab3.jpg" class="img" id="im" /> </a>
 <a href="images/lab4.jpg"> <img src="images/lab4.jpg" class="img" id="im" /></a> 
 </div>
<script>  
	    window.onload=function() {
      let imgNo = 0;
	    const sliderImg = document.querySelectorAll(".img");
        
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
	}, 3000);
   }
  
	</script>



<h4>Top 10 Advantages of a Digital Lab Strategy</h4>
<div class="topic">
<p class="p-topic">
<b>1: THROUGHPUT.</b> <br/>
<b>2: EFFICIENCY. ...</b> <br/>
<b>3: CONNECTEDNESS. ...</b> <br/>
<b>4: QUALITY. ...</b> <br/>
<b>5: RELIABILITY. ...</b> <br/>
<b>6: SUSTAINABILITY. ...</b> <br/>
<b>7: COLLABORATION. ...</b> <br/>
<b>8: COMPLIANCE.</b>

</p>
</div>

<div class="throuth-div">
<div class="throu-div">
<img id="img-thro" src="images/throughput.png"/>
</div>
<div class="throu-div" id="throu-div">
<b>1: THROUGHPUT</b> 
<p class="p1">
 Connected, automated, intelligence-infused processes create faster sample throughput and reduced per-sample hands-on time, reducing bottlenecks in research and lab productivity.
 </p>
</div>
</div>

<div class="efi-div">
<div class="efic-div">
<img id="efi-img" src="images/efficiency.png" />
</div>
<div class="efic-div" id="efic_div">
<b>2: EFFICIENCY</b>
<p class="p1">
AI-enhanced solutions can help train staff and guide them through workflows step by step, minimizing errors and repeat testing, saving time and improving the accuracy of results.
</p>
</div>
</div>

<div class="conn-div">
<div class="con-div">
<img id="con-img" src="images/connectedness.png"/>
</div>
<div class="con-div" id="con-div">
<b>3: CONNECTEDNESS</b>
<p class="p1">
Integrations with Agilent and third-party instruments allow remote access/remote work, reduce delays accessing data, eliminate manual data entry, and help you scale up on demand.
</p>
</div>
</div>

<div class="qual-div">
<div class="qu-div">
<img id="qu-img" src="images/quality.png"/>
</div>
<div class="qu-div" id="qu-div">
<b>4: QUALITY</b>
<p class="p1">
Workflow orchestration and lab automation can increase not only yield and throughput but also security and data integrity, creating results that are extremely trustworthy.
</p>
</div>
</div>

<div class="reli-div">
<div class="rel-div">
<img src="images/reliability.png" id="rel-img"/>
</div>
<div class="rel-div" id="rel-div">
<b>5: RELIABILITY</b>
<p class="p1">
Agilent solutions can flag errors and indicate if a retest is needed, saving time. Analysts no longer have to check with the manager or manually review multiple times.
</p>
</div>
</div>

<div class="sust-div">
<div class="sus-div" >
<img src="images/sustainability.png" id="sus-img" />
</div>
<div class="sus-div" id="sus-div">
<b>6: SUSTAINABILITY</b>
<p class="p1">
Automated processes and fast, easy scale-up can reduce everything from sample volumes required to the number of times a study needs to be repeated, making workflows more sustainable from a cost and staffing perspective.
</p>
</div>
</div>

<div class="coll-div">
<div class="col-div">
<img id="col-img" src="images/collaboration.png" />
</div>
<div  class="col-div" id="col-div">
<b>7: COLLABORATION</b>
<p class="p1">
In the digital lab, data is instantly accessible to authorized lab personnel and managers, even remotely, encouraging stronger collaboration among peers in multiple locations.
</p>
</div>
</div>

<div class="comp-div">
<div class="com-div">
<img id="com-img" src="images/compliance.png" />
</div>
<div class="com-div" id="com-div">
<b>8: COMPLIANCE</b>
<p class="p1">
A digital lab can easily manage large volumes of data, access relevant data for each sample, respond quickly, and send data packets to regulatory bodies, saving time and compliance risk.
</p>
</div>
</div>

<div class="visual-div">
<div class="vis-div">
<img id="vis-img" src="images/visualization.png" />
</div>
<div class="vis-div" id="vis-div">
<b>9: VISUALIZATION</b>
<p class="p1">
Using augmented reality/virtual reality (AR/VR) technologies, the lab can create 3D visualizations and allow for simultaneous viewing by multiple collaborators.
</p>
</div>
</div>

<div class="inno-div">
<div class="in-div">
<img src="images/innovation.png" id="in-img" />
</div>
<div class="in-div" id="in-div">
<b>10: INNOVATION</b>
<p class="p1">
When you bring more flow to your workflows, scientists have more time to visualize, analyze, and generate insights from your data—which is a win for everyone.
</p>
</div>
</div>

</div>