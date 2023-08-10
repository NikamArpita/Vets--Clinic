function na()
      {
        var letters = /^[A-Za-z]+$/;
        var name = document.getElementById("t").value
        if(name=="")
        {
         document.getElementById("msg").innerHTML="**Please fill name";
         return false;
        }
        document.getElementById("msg").innerHTML="";
        if(name.length<3)
        {
         document.getElementById("msg").innerHTML="**name must have atleast 3 charachters";
         return false;
        }
        document.getElementById("msg").innerHTML="";
        if(name.length>13)
        {
         document.getElementById("msg").innerHTML="**name cannot have more than 13 charachters";
         return false;
        
        }
        document.getElementById("msg").innerHTML="";
        if(name.match(letters))
        {
          document.getElementById("p1").innerHTML=name
          document.getElementById("p2").innerHTML=name
          document.getElementById("p3").innerHTML=name
        }
        else{
          document.getElementById("msg").innerHTML="**only alphabets are allowed";
         return false; 
        }
        document.getElementById("msg").innerHTML="";
      } 
     function pn()
     {
      
      var numbers = /^[0-9]+$/;
        var phone = document.getElementById("pno").value
        if(phone=="")
        {
         document.getElementById("msg1").innerHTML="**Please enter phoneno";
         return false;
        }
        document.getElementById("msg1").innerHTML="";
        if(phone.length!=10)
        {
         document.getElementById("msg1").innerHTML="**phone no must have 10 numbers";
         return false;
        }
        document.getElementById("msg1").innerHTML="";
        if(phone.match(numbers))
        {
         
   
      return true;
    
        }
        else{
          document.getElementById("msg1").innerHTML="**only numbers are allowed";
         return false; 
        }
         document.getElementById("msg1").innerHTML=""; 
     }

     function m()
     {  
        var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var email = document.getElementById("em").value
        if(email=="")
        {
    
         document.getElementById("msg2").innerHTML="**Please enter email";
         return false;
        }
        document.getElementById("msg2").innerHTML="";
        if(email.match(mail))
        {
          return true;
        }
        else{
          document.getElementById("msg2").innerHTML="**invalid email";
         return false; 
        }
        document.getElementById("msg2").innerHTML="";
     }
     function date()
     {
    var GivenDate =document.getElementById("d").value;
    let CurrentDate = new Date().toISOString().slice(0, 10)
     console.log(CurrentDate)
    

if(GivenDate > CurrentDate){
    return true;
}else{
    alert('Given date is not greater than the current date.');
}
     }

     function type()
     {

     }
     function sex()
     {
       
     }

     