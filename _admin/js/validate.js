	function valid_student(frm) {
	//////Name Validation/////////////////////
	var name = frm.st_name.value;
    var status = document.getElementById("s-name");

    if (name.trim() == "") {

        status.innerHTML = "Enter Name";
        status.style.color = "red";
        status.style.fontSize = "1.1em";
        frm.st_name.focus();
        return false;
    }
    ///Father name validation ///////////////   
    var fstatus = document.getElementById("s-father");
    if (frm.st_father.value == "") {
        fstatus.innerHTML = "Enter father name";
        fstatus.style.color = "red";
        fstatus.style.fontSize = "1.1em";
        frm.st_father.value.split(" ");
        frm.st_father.focus();
        return false;
    }
    /////////Phone validation//////////////////////
    var phstatus = document.getElementById("s-phone");
    if (frm.st_phone.value == "") {
        phstatus.innerHTML = "Enter phone number";
        frm.st_phone.focus();
        phstatus.style.color = "red";
        phstatus.style.fontSize = "0.9em";
        frm.st_phone.value.split(" ");
        //frm.name.style.Color="red";
        return false;
    }
    if (frm.st_phone.value.length < 10) {
        phstatus.innerHTML = "10 digit phone number";
        phstatus.style.color = "red";
        phstatus.style.fontSize = "0.9em";
        //frm.name.style.Color="red";
        frm.st_phone.focus();
        return false;
    }
    ////////////Email Validation//////////
    var email = frm.st_email.value;
    var estatus = document.getElementById('s-email');
    if (email == "") {
        frm.st_email.focus();
        estatus.innerHTML = "Plz Enter Email";
        estatus.style.color = "red";
        estatus.style.fontSize = "0.9em";
        return false;
    }

    if (email.indexOf('@') == -1) {
        frm.st_email.focus();
        estatus.innerHTML = "@ missing";
        estatus.style.color = "red";
        estatus.style.fontSize = "0.9em";
        return false;
    }
    if (email.indexOf('@') == 0 || email.indexOf('@') == (email.length - 1)) {
        frm.st_email.focus();
        estatus.innerHTML = "Plz @ enter in between";
        estatus.style.color = "red";
        estatus.style.fontSize = "0.9em";
        return false;
    }


    var c =0;
    for (var i=0; i<email.length-1; i++) {
        if (email.charAt(i) == "@")
            c++;
    }
    if (c>1) {
        estatus.innerHTML = "Plz More Than One @ Symbol";
        estatus.style.color = "red";
        estatus.style.fontSize = "0.9em";
        frm.st_email.focus();
        return false;
    } else if (email.indexOf('.com')== -1) {
        estatus.innerHTML = "Plz Enter Domain Name";
        estatus.style.color = "red";
        estatus.style.fontSize = "0.9em";
        frm.st_email.focus();
        return false;
    }
	///////////Gender validation////////////////////////////////
    var gstatus = document.getElementById('s-gen');
    if (frm.st_gen[0].checked==false && frm.st_gen[1].checked==false) {
        gstatus.innerHTML = "Select gender";
        gstatus.style.color = "red";
        frm.st_gen.focus();
        gstatus.style.fontSize = "1.2em";
        //frm.st_gen.checked[0] = true;
        return false;
    }
	////////qualification validation///////////////////
    var qstatus = document.getElementById('s-qual');
    var chk = false;
    var frm_len = frm.elements.length;
    for (var i=0;i<frm_len;i++) {

        if (frm.elements[i].type == "checkbox") {
            if (frm.elements[i].name == "st_qual[]") {
                if (frm.elements[i].checked == true) {

                    chk = true;
                    break;
                }
            }
        }
    }
    if (chk==false) {
        qstatus.innerHTML = "Select Qualification";
        qstatus.style.color = "red";
        qstatus.style.fontSize = "1em";

        return false;
    }
	/////////Date Of Birth validation/////////////
    var datadob = frm.st_dob.value;
    var dobstatus = document.getElementById("s-dob");
    if (datadob=="") {
        datadob.split(" ");
        dobstatus.innerHTML = "Plz Enter DOB";
        dobstatus.style.color = "red";
        dobstatus.style.fontSize = "1.1em";
        frm.st_dob.focus();
        return false;
    }
	//////////////Date Of Addmiddion validation///////////////
    var dadd = frm.st_doa.value;
    var doastatus = document.getElementById("s-doa");
    if (dadd=="") {
        dadd.split(" ");
        doastatus.innerHTML = "Plz Enter DOA(ADDMISSION)";
        doastatus.style.color = "red";
        doastatus.style.fontSize = "1.1em";
        frm.st_doa.focus();
        return false;
    }
	///////////////Course Validation/////////////////
    var crsstatus = document.getElementById("s-course");
    if (frm.st_course.value == "0") {
        crsstatus.innerHTML = "Plz Select Course";
        crsstatus.style.color = "red";
        crsstatus.style.fontSize = "1.2em";
        frm.st_course.focus();
        return false;
    }
	////////////Category validation/////////////////////////
    var catstatus = document.getElementById("s-cat");
    if (frm.st_cat[0].checked == false && frm.st_cat[1].checked == false && frm.st_cat[2].checked == false && frm.st_cat[3].checked == false) {
        catstatus.innerHTML = "Plz Select category";
        catstatus.style.color = "red";
        catstatus.style.fontSize = "1em";
        frm.st_cat[0].checked = true;
        return false;
    }
	/////Country validation///////////
    var counstatus = document.getElementById("s-con");
    if (frm.st_country.value == "0") {
        counstatus.innerHTML = "Plz Select Country";
        counstatus.style.color = "red";
        counstatus.style.fontSize = "1em";
        frm.st_country.focus();
        return false;
    }
	////////State Validaton/////////////////
    var statestatus = document.getElementById("s-state");
    if (frm.st_state.value == "0") {
        statestatus.innerHTML = "Plz Select state";
        statestatus.style.color = "red";
        statestatus.style.fontSize = "1em";
        frm.st_state.focus();
        return false;
    }
	/////////////Pin Code Validation//////////////////
    var pinstatus = document.getElementById("s-pin");
    if (frm.st_pin.value == "") {
        if (frm.st_pin.value.length < 6) {
            pinstatus.innerHTML = "Plz Enter PinCode";
            pinstatus.style.color = "red";
            pinstatus.style.fontSize = "1em";
            frm.st_pin.focus();
            return false;
        }
    }
	////////Image validation////////////////////////
	var imgstatus = document.getElementById("s-img");
    if (frm.st_image.value == "") {
        imgstatus.innerHTML = "Plz Choose Image";
        imgstatus.style.color = "red";
        imgstatus.style.fontSize = "1em";
        frm.st_image.focus();
        return false;
    }
	///////Local Address Validation////////////////////
    var add1status = document.getElementById("s-lcl");
    if (frm.st_address1.value == "") {
        frm.st_address1.value.split(" ");
        add1status.innerHTML = "Plz Enter Local Address";
        add1status.style.color = "red";
        add1status.style.fontSize = "1em";
        frm.st_address1.focus();
        return false;
    }

	///////Local Address Validation////////////////////
	var add2status = document.getElementById("s-prmnt");
    if (frm.st_address2.value == "") {
        frm.st_address2.value.split(" ");
        add2status.innerHTML = "Plz Enter Permanent Address";
        add2status.style.color = "red";
        add2status.style.fontSize = "1em";
        frm.st_address2.focus();
        return false;
    }

    return true;
	}
	///////////////////Delete Student_view.php File /////////////////
	function student_delete(st_id) {
		//alert(st_id);
		
    if (confirm("DO YOU WANT TO DELETE ? ")) {
        this.document.student_view.act.value = "delete_student";
        this.document.student_view.st_id.value = st_id;
		this.document.student_view.submit();
    	}
	}
	///////////////Print Out ///////////
	function printOut(){
		window.print();
		}
	//////////////Select All///////////
	function selectAll(obj){
		var frm=this.document.student_view;
		var frm_len=frm.elements.length;
			for(var i=0;i<frm_len;i++){
			if(frm.elements[i].type=="checkbox"){
				if(frm.elements[i].name=="st_multi_id[]"){
					frm.elements[i].checked=obj.checked;
					}
				}
			}
		
		}
	////////////Multi-Delete-Function////////////////
	function student_multi_delete(){
		if(confirm("Do You Want To Delete All Selected Record?")){
			this.document.student_view.act.value="student_multi_delete";
			this.document.student_view.submit();
		}
	}
	///////////FEES DATA VALIDATION/////////////////
	
	function fees_add(form){
		var total= this.document.st_fees_total.value;
		var amount= this.document.st_fees_amount.value;
		if(amount>total){
			alert('plz enter correct amount');
			return false;
			}
		}
	
////////////FEES DELETE/////////
	function fees_delete(fees_id) {
		//alert(fees_id);		
    	if (confirm("DO YOU WANT TO DELETE ? ")) {
        	this.document.paid_view.fees_act.value="delete_fees";
        	this.document.paid_view.fees_id.value=fees_id;
			this.document.paid_view.submit();
    	}
	}
///////Exam Delete/////////////
  function exam_del(exam_id){
	   if(confirm("Do You Want To Delete?")){
		  //alert("hii");
		   this.document.exam.exam_act.value="delete_exam";
			this.document.exam.exam_id.value=exam_id;
			this.document.exam.submit();
		  }
	  }
	  
	  
//////////--------------Logout----------///////////////

function logout(){
	if(confirm("Are you sure")){
		this.document.log_form.act.value="logout";
		this.document.log_form.submit();
			
		}
	}	  
////////////Exam Validation//////////////
	function valid_exam(efrm){
		  var title= efrm.exam_title.value;
		  var status=document.getElementById("e_title");
		  if(title.trim()==""){
			  status.innerHTML="Require Title";
			  status.style.color="red";
			  efrm.exam_title.focus();
			  return false;
			  }
			  
// var course= efrm.exam_course.value;
		  var course_s=document.getElementById("e_course");
		  if(exam_course.value=="0"){
			  course_s.innerHTML="plz Select";
			  course_s.style.color="red";
			  efrm.exam_course.focus();
			  return false;
			  }
			  
	   var sub_s=document.getElementById("e_sub");
		  if(exam_sub.value=="0"){
			  sub_s.innerHTML="plz Select";
			 sub_s.style.color="red";
			  efrm.exam_sub.focus();
			  return false;
			  }
	   var dt=exam_date.value;
	   var date_s=document.getElementById("e_date");
		  if(dt==""){
			date_s.innerHTML="plz Select";
			date_s.style.color="red";
			efrm.exam_date.focus();
			  return false;
			  }
		
	   	  var shift_s=document.getElementById("e_shift");
		  if(efrm.exam_shift[0].checked==false && efrm.exam_shift[1].checked==false){
			shift_s.innerHTML="plz Select";
			shift_s.style.color="red";
			//efrm.exam_shift.focus();
			  return false;
			  }
		return true;
		}
		
		
		
///////////Ajx -Subject-----------////////////////////
	function find_subject(txt){
			var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange=function(){
				if(xhttp.readyState==4&&xhttp.status==200)
				document.getElementById('exam_sub').innerHTML=xhttp.responseText;
				}
		xhttp.open("post","lib/ajxSubject.php?q="+txt,true);
		xhttp.send();
		//alert(txt);
		}
		
		
///////////Ajx -Country-----------////////////////////
	function find_state(stt){
			var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange=function(){
				if(xhttp.readyState==4&&xhttp.status==200)
					document.getElementById('st_state').innerHTML=xhttp.responseText;
				}
		xhttp.open("get","lib/ajxCountry.php?q="+stt,true);
		//alert(stt);
		xhttp.send();
		}		
///////////////-----Delete-Faculity_Req---////////////////
		function fac_delete(fac_id){
		if(confirm("Do You Want To Delete?")){
		this.document.faculityReq_frm.fac_act.value="Delete_faculity";
		this.document.faculityReq_frm.fac_id.value=fac_id;
		this.document.faculityReq_frm.submit();
		 }
		}
///////////Ajx -Faculity-----------////////////////////
	function fac_value(value){
			var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange=function(){
			if(xhttp.readyState==4&&xhttp.status==200){
			var row= document.getElementById(value);
				row.remove();
			 }
			}
		xhttp.open("post","lib/ajxFaculity.php?value="+value,true);
		xhttp.send();
		}
		
   function fac_dactive(rev){
			var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange=function(){
			if(xhttp.readyState==4&&xhttp.status==200){
				var row= document.getElementById(rev);
				row.remove();
			}
			
		}
		xhttp.open("post","lib/ajxFaculity1.php?rev="+rev,true);
		xhttp.send();
		}
		
//////////////////////////////////
 function valid_faculity(ffrm){
	/////////name////////////
	var fname = ffrm.fac_name.value;
    var fstatus = document.getElementById("fac-name");
    if (fname.trim() == "") {
        fstatus.innerHTML = "Enter Name!";
        fstatus.style.color = "red";
        fstatus.style.fontSize = "1.1em";
        ffrm.fac_name.focus();
        return false;
    }
	///////////qualification/////////////
	var fqual=ffrm.fac_qual.value;
	var stt=document.getElementById("fac-qual");
	if(fqual==""){
		stt.innerHTML="Enter Qualification!!";
		stt.style.color="red";
		stt.style.fontSize="1.1em";
		ffrm.fac_qual.focus();
		return false;
	}
	///////////dob////////////////
	var fdob=ffrm.fac_dob.value;
	var dstt=document.getElementById("fac-dob");
	if(fdob==""){
		dstt.innerHTML="Enter DOB!!";
		dstt.style.color="red";
		dstt.style.fontSize="1.1em";
		ffrm.fac_dob.focus();	
		return false;
	}
	///////////Experience////////////////
	var fexp=ffrm.fac_exp.value;
	var exstt=document.getElementById("fac-exp");
	if(fexp==""){
		exstt.innerHTML="Enter Experience!";
		exstt.style.color="red";
		exstt.style.fontSize="1.1em";
	ffrm.fac_exp.focus();
	return false;	
	}
	
	///////////Phone////////////////
	var fphone=ffrm.fac_phone.value;
	var pstt=document.getElementById("fac-phone");
	if(fphone.trim()==""){
		pstt.innerHTML="Enter Phone No.!";
		pstt.style.color="red";
		pstt.style.fontSize="1.1em";
	ffrm.fac_phone.focus();
	return false;	
	}
	
	///////////Area Of Intrest////////////////
	var area=ffrm.fac_area.value;
	var astt=document.getElementById("fac-ar");
	if(area.trim()==""){
		astt.innerHTML="Enter Area Of Intrest!";
		astt.style.color="red";
		astt.style.fontSize="1.1em";
	ffrm.fac_area.focus();
	return false;	
	}
	
	///////////-------Category---------////////////////
	var fcat=ffrm.fac_cat.value;
	var catstt=document.getElementById("fac-cat");
	if(fcat=="0"){
		catstt.innerHTML="Select Category!";
		catstt.style.color="red";
		catstt.style.fontSize="1.1em";
	ffrm.fac_cat.focus();
	return false;	
	}
	
	///////////-------Designation---------////////////////
	var desig=ffrm.fac_desig.value;
	var desstt=document.getElementById("fac-des");
	if(desig=="0"){
		desstt.innerHTML="Select Designation!";
		desstt.style.color="red";
		desstt.style.fontSize="1.1em";
		ffrm.fac_desig.focus();
	return false;	
	}
 
 	///////////-------Gender---------////////////////
	var genstt=document.getElementById("fac-gen");
	if(ffrm.fac_gender[0].checked==false && ffrm.fac_gender[1].checked==false){
		genstt.innerHTML="Tick Gender!";
		genstt.style.color="red";
		genstt.style.fontSize="1.1em";
		ffrm.fac_gender.focus();
	return false;	
	}
	
 	///////////-------Email---------////////////////
	var facem=ffrm.fac_email.value;
	var emstt=document.getElementById("fac-email");
	if(facem==""){
		emstt.innerHTML="Enter Email!!";
		emstt.style.color="red";
		emstt.style.fontSize="1.1em";
		ffrm.fac_email.focus();
	return false;	
	}
	///////////-------Address---------////////////////
	var faddr=ffrm.fac_address.value;
	var adrstt=document.getElementById("fac-add");
	if(faddr==""){
		adrstt.innerHTML="Plz Address!";
		adrstt.style.color="red";
		adrstt.style.fontSize="1.1em";
		ffrm.fac_address.focus();
	return false;	
	}
 

 	///////////-------Phd Qulifide---------////////////////
	var phdstt=document.getElementById("fac-phd");
	if(ffrm.fac_phd[0].checked==false && ffrm.fac_phd[1].checked==false){
		phdstt.innerHTML="Tick Phd!";
		phdstt.style.color="red";
		phdstt.style.fontSize="1.1em";
		ffrm.fac_phd.focus();
	return false;	
	}
	
	///////////-------Security Queation---------////////////////
	var fac_sec=ffrm.fac_sec.value;
	var fsestt=document.getElementById("fac-sec");
	if(fac_sec=="0"){
		fsestt.innerHTML="Security..";
		fsestt.style.color="red";
		fsestt.style.fontSize="1.1em";
		ffrm.fac_sec.focus();
	return false;	
	}
	
	///////////-------Security Answer---------////////////////
	var fac_ans=ffrm.fac_ans.value;
	var fsestt=document.getElementById("fac-ans");
	if(fac_ans==""){
		fsestt.innerHTML="Enter Answer..!";
		fsestt.style.color="red";
		fsestt.style.fontSize="1.1em";
		ffrm.fac_ans.focus();
	return false;	
	}
	
 	///////////-------net Qulifide---------////////////////
	var ntstt=document.getElementById("fac-net");
	if(ffrm.fac_net[0].checked==false && ffrm.fac_net[1].checked==false){
		ntstt.innerHTML="Tick Net!";
		ntstt.style.color="red";
		ntstt.style.fontSize="1.1em";
		ffrm.fac_net.focus();
	return false;	
	}
 return true;	 
}
///////////////////////////////////////


///////////Ajx -Subject-----------////////////////////
	function find_sub(mark){
		//alert(mark);
		var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange=function(){
				if(xhttp.readyState==4&&xhttp.status==200)
				document.getElementById('mark_sub').innerHTML=xhttp.responseText;
				}
		xhttp.open("post","lib/ajxMark.php?val="+mark,true);
		xhttp.send();
		//alert(mark);
		}
		
///////////Ajx -Total mark find--&---Practical Mark Find------////////////////////
	function total_mark(total){
		var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange=function(){
				var	myObj=JSON.parse(this.responseText);
				if(xhttp.readyState==4&&xhttp.status==200)
				document.getElementById('mark_total').value=myObj[0];
				document.getElementById('mark_prac').value=myObj[1];
				}
		xhttp.open("post","lib/ajxMark_total.php?t="+total,true);
		xhttp.send();
	//	alert(total);
}
		
///////////Ajx -Practical mark find-----------////////////////////
	/*function prac_mark(prac){
		var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange=function(){
				if(xhttp.readyState==4&&xhttp.status==200)
				document.getElementById('mark_prac').innerHTML=xhttp.responseText;
				}
		xhttp.open("post","lib/ajxMark_prac.php?p="+prac,true);
		xhttp.send();
	//	alert(total);
		
		}
		*/