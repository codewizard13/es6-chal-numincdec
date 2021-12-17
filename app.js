var minus_btn = document.getElementById('minus');
var plus_btn = document.getElementById('plus');

const counter = document.querySelector('.counter');
counter.value = 0;

minus_btn.addEventListener("click", changeNum, false);

plus_btn.addEventListener("click", changeNum, false);

//console.log(minus_btn);


function changeNum (e) {
	//console.log(e)

  if ( e.target == minus_btn) {
  	console.log('minus button clicked');
  	counter.value--;
  } else if ( e.target == plus_btn) {
  	console.log('plus button clicked');
  	counter.value++;
  }
  
}