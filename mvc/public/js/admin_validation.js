setTimeout(() => {
    const box = document.getElementById('invalid_credentials');
  
    
    box.style.visibility= 'collapse';
  
    
  }, 1200); 
  
  
function validation()
{
  let username = document.forms["adminloginform"]["adminname"].value;
  let password = document.forms["adminloginform"]["adminpassword"].value;

  if(username==""){
    alert("enter username");
    return false;
  }
  else if(password==""){
    alert("enter password");
    return false;
  }
  else{    
  return true;
  }
  
}
if(window.history.replaceState){
  window.history.replaceState(null,null,window.location.href);
  }

 
  
  