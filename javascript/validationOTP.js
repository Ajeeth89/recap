function generateOTP(){
    document.getElementById("successMsg").innerHTML = "";
    if(fieldValidation()){
      if(validateemail()){
        if(checkPhone()){
            document.getElementById("otp").style.display = "block";
            document.getElementById("send").style.display = "block";
            document.getElementById("reSend").style.display = "block";
            document.getElementById("sumbitForOTP").style.display = "none";
            document.getElementById("validationMsg").innerHTML = "";
            document.getElementById('email').style.border = '1px solid #D5D4D4';
            document.getElementById('mobile').style.border = '1px solid #D5D4D4';
            saveOTP();
	    getOTP();
        }else{
          document.getElementById("validationMsg").innerHTML = "Please enter a valid mobile number";
          document.getElementById('mobile').style.border = '1px solid red';
        }
      
      }else{
         document.getElementById("validationMsg").innerHTML = "Please enter a valid e-mail address";
         document.getElementById('email').style.border = '1px solid red';
      }
      
    }else{
      document.getElementById("validationMsg").innerHTML = "All Fields Are Mandatory";
    }
    
   }
   function sendOTP(){  
      if(document.getElementById("otp").value != ""){
        document.getElementById("otp").style.display = "none";
        document.getElementById("send").style.display = "none";
        document.getElementById("reSend").style.display = "none";
        document.getElementById("sumbitForOTP").style.display = "block";
        document.getElementById("successMsg").innerHTML = "Successfully message sent";
        document.getElementById("validationMsg").innerHTML = "";
      }else{
        document.getElementById("validationMsg").innerHTML = "Please Enter OTP";
      }
    
    
   }
   
   function resendOTP(){
    generateOTP();
   }
   
   function fieldValidation(){
    var name = document.getElementById("cname").value;
    var mobile = document.getElementById("mobile").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    if(name != "" && mobile != "" && email != "" && message != ""){
      return true;
    }else{
      return false;
    }
    
   }
   
   function validateemail(){  
    var x = document.getElementById("email").value;
    var atposition=x.indexOf("@");  
    var dotposition=x.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
      return false;  
     }else{
      return true;
     } 
      
  } 
  
  function checkPhone() {
        var phone = document.getElementById("mobile").value;
        var phoneNum = /^\d{10}$/; 
            if(!phone.match(phoneNum)) {
                return false;
            }else {
               return true;
            }
      return true;
        }
   
   function saveOTP(){
    $.ajax(
          { type: "post",
            url: "test.php",
            data: $("#myform").serialize(),
            success: function(response){},
            error:function(response){}
          });

  }
   function getOTP(){
    $.ajax(
          { type: "post",
            url: "submit.php",
            data: $("#myform").serialize(),
            success: function(response){},
            error:function(response){}
          });

  }
