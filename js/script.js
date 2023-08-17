let i = 0, text;


text = "Spitali Ortomedika në Kosovë u themelua në Janar te vitit 2010 si spitali i parë privat në Kosove. Filloi aktivitetin e tij të para në Reumatologji dhe Kardiokirurgji e duke vazhduar me sherbime tjera të ndryshme në këtë fushë dhe me qëllimin që t'ju shërbyer pacientëve brenda dhe jashtë vendit. Brenda një viti reduktoi në 80% fluksin e pacientëve për sherimin e tyre. Pas këtij suksesi Spitali Ortomedika shpejt zgjeroi aktivitetin duke u fokusuar në fillim në ortopedi, kirurgji të përgjithshme, kirurgji e syrit e proktologji deri sa mberriti në kapacitetin e plotë që gëzon sot."


function typing(){
    if(i<text.length){
        document.getElementById("text").innerHTML += text.charAt(i);
        i++;
        setTimeout(typing, 10); // duration of effect in miliseconds
    }
}
typing();



var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 3000); 
}