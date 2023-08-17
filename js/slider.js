var vargu = [
  'img/Spitali1.png',
  'img/Spitali2.png',
  'img/Spitali3.png'
];

var index = 0;
var koha = 2000;

function krijoSlider(){
  document.getElementById('image').src = vargu[index];
  index++;

  if(index == vargu.length){
      index = 0;
  }
  setTimeout("krijoSlider()", koha);
}



krijoSlider();