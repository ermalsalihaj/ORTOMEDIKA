function validateFormRegjistrimi() {
   
   var emrimbiemri = document.forms["myForm"]["emrimbiemri"].value;
    var email = document.forms["myForm"]["email"].value;
    var fjalkalimi = document.forms["myForm"]["fjalkalimi"].value;
    var nrtelefonit = document.forms["myForm"]["nrtelefonit"].value;
   
  
   
    if (emrimbiemri == "") {
        alert( "Emri dhe Mbiemri nuk mund të jetë i zbrazët!");
      return false;
    }
    
    
    if (email == "") {
        alert( "Emaili nuk mund të jetë i zbrazët!");
      return false;
    }
  
    if (fjalkalimi == "") {
        alert( "Fjalëkalimi nuk mund të jetë i zbrazët!");
      return false;
    }

    if (nrtelefonit == "") {
        alert( "Numri Telefonit nuk mund të jetë i zbrazët!");
      return false;
    }
   
  
    return true;
}
  function validateEmail(email) {
    // A simple regex to validate email addresses
    const emailRegex = /\S+@\S+.\S+/;
    return emailRegex.test(email);
  }