

  function myFunction() {
    var x = document.getElementById("container");
    var y = document.getElementById("o_registerdiv");
         y.style.display = "none";
         x.style.display = "block";
      }
   
  function myFunction1() {
  
    var x = document.getElementById("container");
    var y = document.getElementById("o_registerdiv");
  
      x.style.display = "none";
      y.style.display = "block";
  
    }
    setTimeout(() => {
      const box1 = document.getElementById("email_error");
    
      
      box1.style.visibility= 'collapse';
      document.getElementById("email_error").innerHTML = "";
    
      
    }, 1200); 