function validateContactForm() {
  var emri = document.forms['contact-form']['emri'].value.trim();
  var mbiemri = document.forms['contact-form']['mbiemri'].value.trim();
  var emaili = document.forms['contact-form']['emaili'].value.trim();
  var nrtelefonit = document.forms['contact-form']['nrtelefonit'].value.trim();
  var mesazhi = document.forms['contact-form']['mesazhi'].value.trim();

  if (emri == "") {
    alert("Emri nuk mund të jetë i zbrazët!");
    return false;
  }
  
  if (mbiemri == "") {
    alert("Mbiemri nuk mund të jetë i zbrazët!");
    return false;
  }
  
  if (emaili == "") {
    alert("Email nuk mund të jetë i zbrazët!");
    return false;
  }

  if (nrtelefonit == "") {
    alert("Numri Telefonit nuk mund të jetë i zbrazët!");
    return false;
  }

  if (mesazhi == "") {
    alert('Mesazhi nuk mund te jete i zbrazet!');
    return false;
  }

      return true;
  }

function validateEmail(email) {
  const emailRegex = /\S+@\S+.\S+/;
  return emailRegex.test(email);
}