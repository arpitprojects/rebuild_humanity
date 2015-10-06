rotateAnimation("rou" , 20);

var looper;
var degres=0;

function rotateAnimation(e1,speed){
	var cog1 = document.getElementById(e1);
	if(navigator.userAgent.match("Chrome")){
		cog1.style.WebkitTransform = "rotate("+degres+"deg)";
	}else{
		cog1.style.transform="rotate("+degres+"deg)";
	}
	looper = setTimeout('rotateAnimation(\''+e1+'\','+speed+')',speed);
	degres++;
	if(degres > 359){
		degres = 1;
	}
	document.getElementById("texts2").innerHTML = "rotate("+degrees+"deg)";
}