
function validateFormKyqu() {
   
    var emrimbiemri = document.forms["Form"]["emrimbiemri"].value;
     var fjalkalimi = document.forms["Form"]["fjalkalimi"].value;
    
   
    
     if (emrimbiemri == "") {
         alert( "Emri dhe Mbiemri nuk mund të jetë i zbrazët!");
       return false;
     }
   
     if (fjalkalimi == "") {
         alert( "Fjalëkalimi nuk mund të jetë i zbrazët!");
       return false;
     }
    }