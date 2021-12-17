<?php // main.php ?>

<section class="instructions">
<h3>Purpose:</h3>
<p>Build form with plus and minus buttons that increment/decrement the number displayed in a field by one.</p>
<h3>Requirements Given:</h3>
<ol>
<li>
    <p>Create a div with class "container" and style as follows:</p>
    <ul>
        <li>Make it span the full height and width of its parent</li>
        <li>Give it 20 px of space inside</li>
        <li>Give it a 5 px red border</li>
    </ul>
</li>

<li>
	<p>Create a div with class "form" inside the container and style as follows:</p>
    <ul>
        <li>Center vertically and horizontally</li>
        <li>Give it a 2 px blue border</li>
        <li>Give it 15 px padding</li>
    </ul>
</li>
<li>
	<p>Create a button with class and id of "minus". Type a "-" symbol as the inner value.</p>
</li>
<li>
	<p>Create a button with class and id of "plus". Type a "+" symbol as inner value.</p>
</li>
<li>
	<p>Create an input between the two buttons with class and id of "counter".</p>
</li>
</ol>

<p><a href="#code_sec">Click here</a> to jump to the code snippets</p>

<hr>

<h3>Live Demo:</h3>
<p>Here is a live demo, or you can also checkout the companion fiddle on <a href="https://jsfiddle.net/codeslayer2010/hmxrq7uj" target="_blank">JSFiddle.net</a></p>

<div class="container">
<!--
1. span full height and width
2. 20 px padding
3. 5px border red

-->

<div class="form">
<!--
1. center vertically and horiz
2. 2px blue bord
3. 15px padding
-->
<button class="minus" id="minus">
-
</button>

<input class="counter" id="counter" >


<button class="plus" id="plus">
+
</button>

</div><!--/form -->

</div><!--/container -->

<hr>

<div id="code" class="code">
<a id="code_sec"></a>
<p>This is how I organized my code.</p>
<!--
Eric Hepperle - 2021-12-17
Note: <pre> tag is deprecated and doesn't work with HTML entities "<",">","&", etc. Thus, here I'm using a deprecated, but apparently well supported <xmp> tag (as per: https://stackoverflow.com/questions/11386586/how-to-show-div-tag-literally-in-code-pre-tag/#answer-39900317). If for some reason in the future xmp is REALLY no longer supported, we can switch to <textarea readonly>. This is all to avoid having to manually identify and convert all htmlentities.
-->

<h4>index.htm</h4>

<xmp><div class="container">

    <div class="form">
        <button class="minus" id="minus">-</button>
        <input class="counter" id="counter">
        <button class="plus" id="plus">+</button>
    </div><!--/form -->

</div>
</xmp>

<h4>style.css</h4>

<xmp>.container {
  width: 100%;
  height: 100vh;
  padding: 20px;
  border: solid red 5px;
  display: flex;
}

.form {
  align-self: center;
  border: solid 2px blue;
  display: flex;
  justify-content: center;
  min-height: 20px;
  margin: 0 auto;
  padding: 15px;
}

.counter {
  text-align: center;
}
</xmp>

<h4>app.js</h4>

<xmp>var minus_btn = document.getElementById('minus');
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
</xmp>

</div><!--/code -->


</section><!--/instructions -->

