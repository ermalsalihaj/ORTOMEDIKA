function validateFormTerminet() {
    var numri = document.forms["myForm"]["numripersonal"].value;
    var emri = document.forms["myForm"]["emri"].value;
    var mbiemri = document.forms["myForm"]["mbiemri"].value;
    var emaili = document.forms["myForm"]["emaili"].value;
    var fjalekalimi = document.forms["myForm"]["fjalekalimi"].value;
    var sherbimi = document.forms["myForm"]["sherbimi"].value;
    var mjeku = document.forms["myForm"]["Mjeku"].value;
    var data = document.forms["myForm"]["data"].value;
   
  
    if (numri == "") {
      alert("Numri Personal nuk mund të jetë i zbrazët!");
      return false;
    }
    
    if (emri == "") {
        alert( "Emri nuk mund të jetë i zbrazët!");
      return false;
    }
    
    if (mbiemri == "") {
        alert( "Mbiemri nuk mund të jetë i zbrazët!");
      return false;
    }
    
    if (emaili == "") {
        alert( "Emaili nuk mund të jetë i zbrazët!");
      return false;
    }
  
    if (fjalekalimi == "") {
        alert( "Fjalëkalimi nuk mund të jetë i zbrazët!");
      return false;
    }
  
    if (sherbimi == "Zg") {
      alert("Ju lutem zgjedhni një Shërbim Mjekësor!");
      return false;
    }
  
    if (mjeku == "Zg") {
      alert("Ju lutem zgjedhni një Mjek!");
      return false;
    }
  
    if (data == "") {
      alert("Ju lutem zgjedhni një Datë!");
      return false;
    }
  
    return true;
  }
  function validateEmail(email) {
    const emailRegex = /\S+@\S+.\S+/;
    return emailRegex.test(email);
  }