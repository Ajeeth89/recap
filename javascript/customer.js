function servicesDetails(){
	/*var s = document.getElementById("stateOptions");
	var state = s.options[s.selectedIndex].text;
	
	var d = document.getElementById("stateOptions");
	var district = d.options[d.selectedIndex].text;

	if((state != "Select state") && (district != "Select city")){
		document.getElementById("stateHdnVal").value = state ;
		document.getElementById("distrHdnVal").value = district ;
*/

		document.getElementById("locationDetails").style.display = "none" ;
		document.getElementById("serviceDetails").style.display = "block" ;
		document.getElementById("customerDetails").style.display = "none" ;
	/*}else{
		alert("State or District value not selected.");
	}*/
}

function backToLocations(){
		document.getElementById("locationDetails").style.display = "block" ;
		document.getElementById("serviceDetails").style.display = "none" ;
		document.getElementById("customerDetails").style.display = "none" ;
}

function customerDetails(){
		
		var checkBoxes = document.getElementsByClassName('serviceCheckboxDetails');
		var param = "";
                for (var counter=0; counter < checkBoxes.length; counter++) {
                                if (checkBoxes[counter].type.toUpperCase()=='CHECKBOX' && checkBoxes[counter].checked == true) {
                                                param += checkBoxes[counter].value + "@@";
                                }
                }

	if(param != ""){

		document.getElementById("serviceHdnVal").value = param ;

		document.getElementById("locationDetails").style.display = "none" ;
		document.getElementById("serviceDetails").style.display = "none" ;
		document.getElementById("customerDetails").style.display = "block" ;
	}else{
		alert("Atleast one service should be selected to proceed.");
	}
	
	
}





