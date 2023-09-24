<html>
<head>
<title>Canteen</title>
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
 left:600px;
 font-size:100px;
 color:white;
 text-shadow:02px 02px 5px red; 

 }

.main-can-div{
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
</style>
</head>

<body>
<div class="heading"><p id="p">Canteen</p></div>

<div>
<button class="btn" onclick="javascript:history.back();">Back</button>
</div>
<div class="main-can-div">
<p>
To provide fresh and packaged food, there are five Canteens in the Old Campus and three in the Second Campus. They provide a variety of nutritious and low priced food items to the students, teachers, employees and visitors to the University.
To ensure that the canteens remain easily accessible from all parts of the sprawling Main Campus, they have been strategically located at:
</p>
<p>Canteen nestled between the Psychology and Commerce, and adjacent to the Teachers Staff Club (for students and staff of the Arts Faculty).
Science Canteen, located near the Office of the Dean (Science Faculty).
Canteen near the Parking at Gate No. 4.
Canteen near the Administrative Block at Gate No 1.
Nescafe Kiosk located opposite the Faculty of Education (serves tea, coffee, Maggi and pasta).
</p>
<p>
In the Second Campus of the University one is located near the Administrative Block and Law Faculty, the others two, Nescafe Point and Parag Dairy, are in the process of activation.
For administrative and any other relevant issues related to the canteens, the following officers may be contacted:
</p>
<p>Dean Student’s Welfare        :   7991200508
Proctor                                         :   7991200510
Registrar                                      :   7991200503
</p>
</div>
</body>
</html>