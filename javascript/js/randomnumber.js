const number = document.getElementById('number');
const generateBtn = document.getElementById('generateBtn');

const randomGenerator = () => {
  const randomnumber = Math.floor(Math.random()* 10 + 1);
   number.textContent = randomnumber;
};

generateBtn.addEventListener('click',randomGenerator);
randomGenerator();
