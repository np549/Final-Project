// JavaScript Document
function setSN(rid,md,st)
{
	//alert('rid -> '+rid+' md-> '+md+' st-> '+st);
	$.ajax({
  		type: "POST",
  		async: false,
		url: "setSN.php",
  		data: {'rid':rid,'md':md,'typ':st},
  		success: function(data){
			//alert("Data Loaded: " + data);
		}
	});
	//$.ajax('setSN.php', {'rid':rid,'md':md,'typ':st}).done(function(data) {});
	return false;
}


function getValidate(ctrl,typ)
{
	var filter;
	var err;
	var val=$.trim($("#"+ctrl).val());
	var res=true;
	//val=val.replace(/<.[^<>]*?>/g,'').replace(/&nbsp;|&#160/gi,'').replace(/&gt;/gi,'').replace(/&lt;/gi,'').replace(/&quot;/gi,'').split('$').join('');
	$("#"+ctrl).val(val);
	switch(typ)
	{
		case "nick":
			filter=/^[a-zA-Z0-9-_]+[a-zA-Z0-9-_]?$/; 
			err="Only text (a-z), numbers(0-9) and some special characters (- and _) are allowed.";
			break;
		case "pwd":
			filter=/^[a-zA-Z0-9-_\.\!\~`#%*\-+,\/\)\(\[\]\{\}]+$/; 
			err="Only text (a-z), numbers(0-9) and some special characters (_, ., !, ~, `, #, %, *, -, +, ), (, [, ], {, }) are allowed.";
			break;
		case "code": 
			filter=/^[a-zA-Z0-9-_\.\/]+[a-zA-Z0-9-_\.\/]?$/; 
			err="Only text (a-z), numbers(0-9) and some special characters (-, ., _, /) are allowed.";
			break;
		case "dob": 
			filter=/^\d{4}-\d{2}-\d{2}$/;
			err="Only yyyy-mm-dd format allow.";
			break;
		case "name": 
			filter=/^[a-zA-Z'\.][a-zA-Z-' \.]+[a-zA-Z'\.]?$/; 
			err="Only text and spaces are allowed";
			break;
		case "email": 
			filter=/^([A-Za-z0-9_\-\.\'])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,6})$/; 
			err="Only email address is allowed.";
			break;
		case "int":
			filter=/^[\-\+]?\d+$/; 
			err="Only positive,negetive numbers are allowed.";
			break;
		case "num": 
			filter=/^[\-\+]?(([0-9]+)([\.,]([0-9]+))?|([\.,]([0-9]+))?)$/; 
			err="Only numbers are allowed";
			//err="Only numbers with positive, negetive (+-), comma and dot is allowed";
			break;
		case "amt": 
			filter=/^(\d{1,5})(\.\d{2})*$/; 
			err="Only numbers and dot(.) are allowed.";
			break;
		case "txt": 
			filter=/^[a-zA-Z\ \']+$/; 
			err="Only a-z and space are allowed.";
			break;
		case "numphone": 
			filter=/^[0-9]+$/;
			err="Only numbers are allowed.";
			break;
		case "mobilenum": 
			filter=/^[0-9]{10}$/;
			err="Only 10 digit mobile numbers are allowed.";
			break;
		case "txtspl":
			filter=/^[0-9a-zA-Z\' \.\!\~`#%*\-+,\/\)\(\[\]\{\}]+$/;
			err="Only 0-9 and a-z space and some special characters (., !, ~, `, ', /, (), {}, [], %, *, - and +) are allowed.";
			break;
		case "txtsplwork":
			filter=/^[0-9a-zA-Z \.\-,]+$/;
			err="Only 0-9 and a-z space and some special characters (., , -) are allowed.";
			break;
		case "url": 
			filter=/^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/; 
			err = "Only url is allowed.";
			break;
		case "phone": 
			filter=/^([\+][0-9]{1,3}[ \.\-])?([\(]{1}[0-9]{2,6}[\)])?([0-9 \.\-\/]{1,50})((x|ext|extension)[ ]?[0-9]{1,4})?$/; 
			err = "Only phone numbers with x,ext,extention is allowed.";
			break;
		case "date": 
			filter=/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/; 
			err="Only valid date format (mm-dd-yyyy) is allowed.";
			break;
		case "date1": 
			filter=/^\d{2}-\d{2}-\d{4}$/; 
			err="Only valid date format (mm-dd-yyyy) is allowed.";
			break;
		case "req":
		case "addr":
		case "ltxt":
			filter=""; 
			break;
		default: 
			//$.error("jQueryValidator rule not found"+rules[i]);
	}
	if($.trim(val)=="")
	{
		var emsg="<div class='erd'>Field should not be empty.</div>";
		//$(emsg).insertBefore($("#"+ctrl));
		$(emsg).insertAfter($("#"+ctrl));
		return false;
	}
	/*if($.trim(val)=="0")
	{
		var emsg="<div class='erd'>Please select an option.</div>";
		$(emsg).insertAfter($("#"+ctrl));
		return false;
	}*/
	else if(typ=="req" || typ=="addr" || typ=="ltxt")
	{
		if($.trim(val)=="")
		{
			var emsg="<div class='erd'>Field should not be empty.</div>";
			//$(emsg).insertBefore($("#"+ctrl));
			$(emsg).insertAfter($("#"+ctrl));
			return false;
		}
	}
	else
	{
		res=filter.test(val);
		if(res==false)
		{
			var emsg="<div class='erd'>"+err+"</div>";
			//$(emsg).insertBefore($("#"+ctrl));
			$(emsg).insertAfter($("#"+ctrl));
			return res;
		}
		else if(typ=="pwd")
		{
			var strength = 1;
			var arr = [/{8\,}/, /[a-z]+/, /[0-9]+/, /[A-Z]+/];
			$.each(arr, function(i, regexp) {
	  			if(val.match(regexp))
     				strength++;
			});
			if(strength<4 || val.length<8)
			{
				var emsg="<div class='erd'>Please enter a valid password.</div>"; 
				//$(emsg).insertBefore($("#"+ctrl));
				$(emsg).insertAfter($("#"+ctrl));
				return false;
			}		
		}
	}
}

function cleanup(ctrl)
{
	var val=$.trim($(ctrl).val());
	val=val.replace(/<.[^<>]*?>/g,'').replace(/&nbsp;|&#160/gi,'').replace(/&gt;/gi,'').replace(/&lt;/gi,'').replace(/&quot;/gi,'').split('$').join('');
	$(ctrl).val(val);
}

$(function() {        
    // Get all textareas that have a "maxlength" property.
    $('textarea[maxlength]').each(function() {

        // Store the jQuery object to be more efficient...
        var $textarea = $(this);

        // Store the maxlength and value of the field.
        var maxlength = $textarea.attr('maxlength');
        var val = $textarea.val();

        // Trim the field if it has content over the maxlength.
        $textarea.val(val.slice(0, maxlength));

        // Bind the trimming behavior to the "keyup" event.
        $textarea.bind('keyup', function() {
            $textarea.val($textarea.val.slice(0, maxlength));
        });

    });
});

