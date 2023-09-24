<html>
<head>
<title>Offline Time</title>
<style>

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
            content:'';
            position: absolute;
            bottom: 0px;
            left: 0px;
            width: 0%;
            height: 1px;
            background-color:rgba(170, 8, 8, 0.998);
            transition: 1s;
			}
			
 .heading{
 width:94em;
 height:200px;
 background:rgba(170, 8, 8, 0.998);
 font-family:"Bradley Hand ITC";
 font-weight:bolder;
 box-shadow:80px 100px 100px 0px rgba(0,0,0,0.5) inset;
 
 }
 
 .heading #p{
 position:absolute;
 top:-50px;
 left:450px;
 font-size:100px;
 color:white;
 text-shadow:02px 02px 5px red; 

 }

.main-offline-dive{
width:76.3em;
height:auto;
background-color:rgba(170,8,8,0.700);
box-shadow:80px 100px 100px 0px rgba(0,0,0,0.5) inset;
color:white;
font-size:1.2em;
overflow:hidden;
text-align:justify;
padding:20px;
margin-top:20px;		
}
h3{
font-size:2.3em;
background-color:rgba(170,8,8,0.900);
box-shadow:80px 100px 100px 0px rgba(0,0,0,0.5) inset;
text-align:center;
width:250px;
}
.b{
font-size:1.5em;
background-color:rgba(0,0,0,0.5);
width:450px;
}
elem-of-div {
background-color:rgba(170,8,8,0.500);
box-shadow:80px 100px 100px 0px rgba(0,0,0,0.5) inset;
font-style:italic;
}
</style>
</head>

<body>
<div class="heading"><p id="p">Ofline Class</p></div>
<div>
<button class="btn" onclick="javascript:history.back();">Back</button>
</div>
<div class="main-offline-dive">
<p>
Offline Classes: Brief Introduction. Offline learning is commonly known as the Traditional way of learning which is still relevant since ancient times. It is a face-to-face interaction between a student and teacher in a particular physical place.
</p>
<p>
While online learning has its benefits, offline classes provide students with the opportunity for face-to-face interaction, hands-on learning, reduced distractions, networking opportunities, better assessment, and improved time management.
</p>
<div>
<h3>Advantage</h3>
<p class="b">1:Enhanced Learning Experience.</p>
<p class="b">2:Better Focus and Concentration</p>
<p class="b">3:Improved Social Skills</p>
<p class="b">4:Access to Resources</p>

</div>
<div class="elem-of-div">
Enhanced Learning Experience – In offline classes, students get to interact with their teachers and classmates in person, allowing for a more enriched learning experience. Teachers can provide personalized attention to each student, clear their doubts, and create a collaborative environment, which enhances the learning process.
Better Focus and Concentration – Offline classes offer fewer distractions as students are away from their gadgets and social media. This enables them to concentrate better and actively participate in class discussions, leading to better comprehension and retention of the concepts.
Improved Social Skills – In offline classes, students learn essential social skills such as effective communication, team collaboration, and problem-solving, which are crucial for personal and professional growth. These skills help students build stronger relationships and contribute positively to their communities.
Access to Resources – Offline classes provide students access to various educational resources such as textbooks, library books, and other study materials, which may not be available online. This enhances their learning experience and helps them to broaden their knowledge.</div>
<div>
</div>
</body>