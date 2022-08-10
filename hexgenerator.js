const text = document.getElementById('color');
const btn = document.getElementById('generate');

var colorGenerate = function() {
  newColor = '#' +
  (Math.random()*0xFFFFFF<<0).toString(16);
  console.log(newColor.length);
  if(newColor.length < 7){
    colorGenerate();
  }
}

btn.addEventListener('click',function(){
  colorGenerate();
  document.body.style.background =   newColor;
  btn.style.color = newColor;
  text.innerText = newColor;
});
