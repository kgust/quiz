function show_answers() {
	num_correct = countCorrect();

	$("input:checked, input.correct").parent().css('font-weight','bold');
	$("input:checked").parent().css('color','red');
	$("input.correct").parent().css('color','green');
	$("input.correct + a").css('color','green');
	$('#score_me').hide();
	$('#number').html(num_correct);
	$('#result').html(get_result(num_correct));
	$('#score').show();
}

function countCorrect() {
	var n = $('input.correct:checked').length;
	if (n == 0) {
		return 'ZERO';
	} else {
		return n;
	}
}

function get_result(n) {
	switch(n) {
		case 'ZERO': 
			return 'No points! Are you sure you clicked on the answers correctly?';
			break;
		case 1:
		case 2:
		case 3:
			return "That's really low, we should talk!";
			break;
		case 4:
		case 5:
			return "Hmm, perhaps you should study harder next time?";
			break;
		case 6:
		case 7:
			return "That's pretty good";
			break;
		case 8:
		case 9:
			return "Excellent! You scored very high.";
			break;
		case 10:
			return "Perfect! You know us very well.";
			break;
		default:
			return "I was unable to determine your score.";
	}
}

var arVersion = navigator.appVersion.split("MSIE")
var version = parseFloat(arVersion[1])

function fixPNG(myImage) 
{
    if ((version >= 5.5) && (version < 7) && (document.body.filters)) 
    {
       var imgID = (myImage.id) ? "id='" + myImage.id + "' " : ""
	   var imgClass = (myImage.className) ? "class='" + myImage.className + "' " : ""
	   var imgTitle = (myImage.title) ? 
		             "title='" + myImage.title  + "' " : "title='" + myImage.alt + "' "
	   var imgStyle = "display:inline-block;" + myImage.style.cssText
	   var strNewHTML = "<span " + imgID + imgClass + imgTitle
                  + " style=\"" + "width:" + myImage.width 
                  + "px; height:" + myImage.height 
                  + "px;" + imgStyle + ";"
                  + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
                  + "(src=\'" + myImage.src + "\', sizingMethod='scale');\"></span>"
	   myImage.outerHTML = strNewHTML	  
    }
}
