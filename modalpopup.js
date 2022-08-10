const overlay = document.querySelector("#overlay");
const modal = document.querySelector("#modal");

document.querySelector("#popup").addEventListener("click",() =>{
  overlay.style.display = "block";
})

document.querySelector("#modal").addEventListener("click",() =>{
  overlay.style.display = "none";
})
