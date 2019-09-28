$(document).ready(function() {
	"use strict";
	let container = $('#name');
    TweenLite.from(container, 1, {marginTop: 800, backgroundColor: "black"});
});

$(document).ready(function() {
	"use strict";
	let container = $('#profile');
    TweenLite.from(container, 1, {marginLeft: 500, backgroundColor: "black"});
});

$(document).ready(function() {
	"use strict";
	let container = $('.portfolio');
    TweenLite.from(container, 1, {marginTop: 800, backgroundColor: "black"});
});

$(document).ready(function() {
	"use strict";
	let container = $('#myProfile');
    TweenLite.from(container, 1, {marginTop: 800, backgroundColor: "black"});
});

var talent = new TimelineLite, 
    mySplitText = new SplitText("#quote", {type:"words,chars"}), 
    chars = mySplitText.chars; //an array of all the divs that wrap each character

TweenLite.set("#quote", {perspective:400});

talent.staggerFrom(chars, 0.8, {opacity:0, scale:0, y:80, rotationX:180, transformOrigin:"0% 50% -50",  ease:Back.easeOut}, 0.01, "+=0");



