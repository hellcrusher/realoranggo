/*(function($) {
if(!document.defaultView||!document.defaultView.getComputedStyle){var oldCurCSS=jQuery.curCSS;jQuery.curCSS=function(a,b,c){if(b==='background-position'){b='backgroundPosition'}if(b!=='backgroundPosition'||!a.currentStyle||a.currentStyle[b]){return oldCurCSS.apply(this,arguments)}var d=a.style;if(!c&&d&&d[b]){return d[b]}return oldCurCSS(a,'backgroundPositionX',c)+' '+oldCurCSS(a,'backgroundPositionY',c)}}var oldAnim=$.fn.animate;$.fn.animate=function(a){if('background-position'in a){a.backgroundPosition=a['background-position'];delete a['background-position']}if('backgroundPosition'in a){a.backgroundPosition='('+a.backgroundPosition}return oldAnim.apply(this,arguments)};function toArray(a){a=a.replace(/left|top/g,'0px');a=a.replace(/right|bottom/g,'100%');a=a.replace(/([0-9\.]+)(\s|\)|$)/g,"$1px$2");var b=a.match(/(-?[0-9\.]+)(px|\%|em|pt)\s(-?[0-9\.]+)(px|\%|em|pt)/);return[parseFloat(b[1],10),b[2],parseFloat(b[3],10),b[4]]}$.fx.step.backgroundPosition=function(a){if(!a.bgPosReady){var b=$.curCSS(a.elem,'backgroundPosition');if(!b){b='0px 0px'}b=toArray(b);a.start=[b[0],b[2]];var c=toArray(a.options.curAnim.backgroundPosition);a.end=[c[0],c[2]];a.unit=[c[1],c[3]];a.bgPosReady=true}var d=[];d[0]=((a.end[0]-a.start[0])*a.pos)+a.start[0]+a.unit[0];d[1]=((a.end[1]-a.start[1])*a.pos)+a.start[1]+a.unit[1];a.elem.style.backgroundPosition=d[0]+' '+d[1]};
})(jQuery);*/

var subFeaturePosition = new Array();
subFeaturePosition[1] = "0px";
subFeaturePosition[2] = "-60px";
subFeaturePosition[3] = "-120px";
subFeaturePosition[4] = "-180px";
subFeaturePosition[5] = "-240px";
var subFeatureMovement = 350;

jQuery(".slidingcontent").mouseenter(function(){
	var sfID = jQuery(this).attr('ID').split("_");
	switch(sfID[1]) {
		case "1":
			if (jQuery(this).css("top") != subFeaturePosition[1]) {
				jQuery("#"+sfID[0]+"_1").stop().animate({
					top: subFeaturePosition[1]
				}, subFeatureMovement);
				jQuery("#"+sfID[0]+"_2").stop().animate({
					top: subFeaturePosition[2]
				}, subFeatureMovement);
				jQuery("#"+sfID[0]+"_3").stop().animate({
					top: subFeaturePosition[3]
				}, subFeatureMovement);
				jQuery("#"+sfID[0]+"_4").stop().animate({
					top: subFeaturePosition[4]
				}, subFeatureMovement);
			}
			break;
		
		case "2":
			if (jQuery("#"+sfID[0]+"_1").css("top") != subFeaturePosition[1] && jQuery("#"+sfID[0]+"_2").css("top") == subFeaturePosition[2]) {
				break;
			}
			jQuery("#"+sfID[0]+"_1").stop().animate({
				top: "-60px"
			}, subFeatureMovement);
			jQuery("#"+sfID[0]+"_2").stop().animate({
				top: subFeaturePosition[2]
			}, subFeatureMovement);
			jQuery("#"+sfID[0]+"_3").stop().animate({
				top: subFeaturePosition[3]
			}, subFeatureMovement);
			jQuery("#"+sfID[0]+"_4").stop().animate({
				top: subFeaturePosition[4]
			}, subFeatureMovement);
			break;
		
		case "3":
			if (jQuery("#"+sfID[0]+"_1").css("top") == subFeaturePosition[1] || jQuery("#"+sfID[0]+"_2").css("top") == subFeaturePosition[2] || jQuery("#"+sfID[0]+"_4").css("top") == subFeaturePosition[4] || jQuery("#"+sfID[0]+"_5").css("top") == subFeaturePosition[5]) {
				jQuery("#"+sfID[0]+"_1").stop().animate({
					top: "-60px"
				}, subFeatureMovement);
				jQuery("#"+sfID[0]+"_2").stop().animate({
					top: "-120px"
				}, subFeatureMovement);
				jQuery("#"+sfID[0]+"_3").stop().animate({
					top: subFeaturePosition[3]
				}, subFeatureMovement);
				jQuery("#"+sfID[0]+"_4").stop().animate({
					top: "-180px"
				}, subFeatureMovement);
			}
			break;
		case "4":
			if (jQuery("#"+sfID[0]+"_1").css("top") == subFeaturePosition[1] || jQuery("#"+sfID[0]+"_2").css("top") == subFeaturePosition[2] || jQuery("#"+sfID[0]+"_3").css("top") == subFeaturePosition[3] || jQuery("#"+sfID[0]+"_5").css("top") == subFeaturePosition[5]) {
				jQuery("#"+sfID[0]+"_1").stop().animate({
					top: "-60px"
				}, subFeatureMovement);
				jQuery("#"+sfID[0]+"_2").stop().animate({
					top: "-120px"
				}, subFeatureMovement);
				jQuery("#"+sfID[0]+"_3").stop().animate({
					top: "-180px"
				}, subFeatureMovement);
				jQuery("#"+sfID[0]+"_4").stop().animate({
					top: subFeaturePosition[4]
				}, subFeatureMovement);
			}
			break;
		case "5":
			if (jQuery("#"+sfID[0]+"_1").css("top") == subFeaturePosition[1] || jQuery("#"+sfID[0]+"_2").css("top") == subFeaturePosition[2] || jQuery("#"+sfID[0]+"_3").css("top") == subFeaturePosition[3] || jQuery("#"+sfID[0]+"_4").css("top") == subFeaturePosition[4]) {
				jQuery("#"+sfID[0]+"_1").stop().animate({
					top: "-60px"
				}, subFeatureMovement);
				jQuery("#"+sfID[0]+"_2").stop().animate({
					top: "-120px"
				}, subFeatureMovement);
				jQuery("#"+sfID[0]+"_3").stop().animate({
					top: "-180px"
				}, subFeatureMovement);
				jQuery("#"+sfID[0]+"_4").stop().animate({
					top: "-240px"
				}, subFeatureMovement);
			}
			break;
	}
});


jQuery(window).ready(function(){
		jQuery('.slidingcontent').each(function() {
		
			var sfID = jQuery(this).attr('ID').split("_");
			switch (sfID[1]){
				case "1":
					jQuery("#"+sfID[0]+"_1").css("top", subFeaturePosition[1]);
					break;
				case "2":
					jQuery("#"+sfID[0]+"_2").css("top", subFeaturePosition[2]);
					break;
				case "3":
					jQuery("#"+sfID[0]+"_3").css("top", subFeaturePosition[3]);
					break;
				case "4":
					jQuery("#"+sfID[0]+"_4").css("top", subFeaturePosition[4]);
					break;
				case "5":
					jQuery("#"+sfID[0]+"_5").css("top", subFeaturePosition[5]);
					break;
			}
		});
});