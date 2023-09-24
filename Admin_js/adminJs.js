function Userlogin(){
	var div=document.querySelector(".login-form");
	div.style.display="block";
	}
	
///////////////Print Out ///////////
	function printOut(){
		window.print();
		}
/////////////-----Galary--Validation---/////////////////
function valid_gallery(gal){
	 let galary=gal.upload_img.value;
	 let status=document.getElementById("status");
	 if(galary==""){
	 status.innerHTML="Please Choose Image..";
	 gal.upload_img.focus();	 
	 return false;
	}
return true;
}

//////////////Select All///////////
	function selectAllGal(obj){ 
		var frm=this.document.img_frm;
		var frm_len=frm.elements.length;
			for(var i=0;i<frm_len;i++){
			if(frm.elements[i].type=="checkbox"){
				if(frm.elements[i].name=="gal_multi_id[]"){
					frm.elements[i].checked=obj.checked;
					}
				}
			}
		
		}

////////////Multi-Delete-Function////////////////
	function gal_multi_delete(){
		if(confirm("Do You Want To Delete All Selected Record?")){
			this.document.img_frm.act.value="gallery_multi_delete";
			this.document.img_frm.submit();
		}
	}
