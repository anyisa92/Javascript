document.getElementById("btn").addEventListener("click",
  function(){
  let txt = document.getElementById("inputTxt").value;
  checkPalindrome(txt);
  });

  function checkPalindrome(txt){
    let txtNew = txt.replace(/[^a-zA-Z0-9]/g,'').
    toLowerCase();
    let len = txtNew.length;
    let halfLen = Math.floor(len/2);
    let result = document.getElementById('txt');
    let i;

    for(i = 0; i < halfLen; i++){
      if(txtNew[i] !== txtNew[len-1-i]){
        result.textContent = "Nope! Not a Palindrome";
        return;
      }
      result.textContent = "Yes! It's a Palindrome!"
    }
  }
