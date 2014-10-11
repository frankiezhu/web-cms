/**
 *init google map api
 */
function init_google_map(lat, lng) {
	var myCenter=new google.maps.LatLng(lat, lng);
		var marker;
		function initialize() {
			var mapProp = {
			  center:myCenter,
			  zoom:13,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
			marker = new google.maps.Marker({
				map:map,
				position:myCenter,
				draggable:true,
				animation: google.maps.Animation.DROP
			  });
			google.maps.event.addListener(marker, 'click', toggleBounce);
		}	
		function toggleBounce() {
		  if (marker.getAnimation() != null) {
			marker.setAnimation(null);
		  } else {
			marker.setAnimation(google.maps.Animation.BOUNCE);
		  }
		}
		google.maps.event.addDomListener(window, 'load', initialize);
}

/**
 *init  tool bar
 */
function init_toolbar(){
    function initToolbarBootstrapBindings() {
      var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'],
            fontTarget = $('[title=字体]').siblings('.dropdown-menu');
      $.each(fonts, function (idx, fontName) {
          fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
      });
      $('a[title]').tooltip({container:'body'});
    	$('.dropdown-menu input').click(function() {return false;})
		    .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
        .keydown('esc', function () {this.value='';$(this).change();});

      $('[data-role=magic-overlay]').each(function () { 
        var overlay = $(this), target = $(overlay.data('target')); 
        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
      });
	};
	function showErrorAlert (reason, detail) {
		var msg='';
		if (reason==='unsupported-file-type') { 
			msg = "Unsupported format " +detail; }
		else {
			console.log("error uploading file", reason, detail);
		}
		$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
		 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	};
    initToolbarBootstrapBindings();  
	$('#editor').wysiwyg({ fileUploadError: showErrorAlert} );
    window.prettyPrint && prettyPrint();
}

/**
 *dynamic show input file
 */
function init_img_upload() {
	for (var i=1;i<5;i++) {
		$('input#img'+i).hide();
	}
	var cur_input = 0;
	for (var i=0;i<4;i++) {
		$('input#img'+i).change(function() {
			if ($('input#img'+cur_input).val()=="") {
				return;
			}
			if (++cur_input < 5) {
				$('input#img'+cur_input).show();
			}
		});
	}
}

/**
 *init
 */
 var city_list = ["City A", "City B"];
 function init_city_sel() {
	for (var i in city_list) {
		$("#city").append("<option value='"+city_list[i]+"'>"+city_list[i]+"</option>");
	}
}

function init_city_ul() {
	$("#city").append('<li class=""><a href="/poster/city/all">不限</a></li>');
	for (var i in city_list) {
		$("#city").append('<li><a href="/poster/city/'+city_list[i]+'">'+city_list[i]+'</a></li>');
	}
}

function init_index(search) {
	init_city_ul();
	var arr_items = ["city", "price", "status", "time"];
	for (var i in arr_items) {
		var key = search[i]?search[i]:"all";
		var condition = "[href='/poster/"+arr_items[i]+"/"+key+"']";
		$(condition).parent().attr("class", "active");
	}
}

/**
 *show error
 */
function elm_highlight(element, msg) {
	var group = element.closest('.control-group');
	group.removeClass('error').addClass('error');
	if (group.find('span.err_msg').length == 0) {
		element.closest('.controls').append("<span class='err_msg'>"+msg+"</span>");
	}
	element.focus();
}

/**
 *success
 */
function elm_success(element) {
	var group = element.closest('.control-group');
	group.removeClass('error');
	if (group.find('span.err_msg').length >= 0) {
		element.closest('.controls').find('span.err_msg').remove();
	}
}

function init_admin_post_valid() {
	var arr = ['title', 'short_desc', 'addr', 'lat', 'lng', 'price'];
	function check_input(i){
		return function() {
			var elm = $('#'+arr[i]);
			if (arr[i] == 'lat' || arr[i] == 'lng' || arr[i] == 'price') {
				if (!$.isNumeric(elm.val())) {
					elm_highlight(elm, "请输入输入数字！");
					return false;
				} else {
					elm_success(elm);
					return true;
				}				
			} else {
				if (elm.val().length < 1) {
					elm_highlight(elm, "请输入！");
					return false;
				} else {
					elm_success(elm);
					return true;
				}
			}
		}
	};
	for (var i in arr) {
		var elm = $('#'+arr[i]);
		elm.bind('input propertychange', check_input(i));
	}
	$('#img0').bind('change', function() {
		var elm = $('#img0');
		if (elm.val().length == 0) {
			elm_highlight(elm, "请上传至少一张缩略图！");
			return false;
		} else {
			elm_success(elm);
			return true;
		}
	});
	
	$.each($("input[name='status[]']"), function (i,obj) {
		$(obj).bind('change', function() {
			var checked = $("input[name='status[]']:checked");
			if (checked.length > 0) {
				elm_success($('#s_done'));
				return true;
			} else {
				elm_highlight($('#s_done'), "至少选择一个！");
				return false;
			}
		});
	});
	return;
}

/**
 *submit add
 */
function check_admin_post_valid() {
	var arr = ['title', 'short_desc', 'addr', 'lat', 'lng', 'price'];
	for (var i in arr) {
		var elm = $('#'+arr[i]);
		if (elm.triggerHandler("input") != true) {
			return false;
		}
	}
	if ($('#img0').triggerHandler("change") != true) {
		return false;
	}
	if ($('#s_done').triggerHandler("change") != true) {
		return false;
	}
	return true;
}

/**
 *on edit
 */
function init_admin_post_edit(data, detail) {
	var arr = ['title', 'short_desc', 'addr', 'lat', 'lng', 'price'];
	for (var i in arr) {
		$('#'+arr[i]).val(data[arr[i]]);
	}
	$("#city").val(data['city']);
	var status = ['top', 's_done', 's_new_price', 's_dealing'];
	for (var i in status) {
		if (data[status[i]] == '1') {
			$('#'+status[i]).attr("checked", true); 
		}
	}
	$('#editor').html(detail);
}

function init_admin_post(uniqid) {
	init_toolbar();
	init_img_upload();
	init_city_sel();
	init_admin_post_valid();

	if (uniqid)
	{
		$.get("/poster/get_detail/"+uniqid, function(data){
			var rep = jQuery.parseJSON(data);
			if (rep.err_msg)
			{
				alert(rep.err_msg);
				return;
			}
			init_admin_post_edit(rep.data, rep.detail);
		});
	}
	
	$('#form').submit(function() {
		if (!uniqid && !check_admin_post_valid()) {
			return false;
		}
		$('#hide_me').val($('#editor').html());
		return true;
	});
}

function init_admin_headnews() {
	init_toolbar();
	$.get("/poster/get_headnews", function(data){
		var rep = jQuery.parseJSON(data);
		if (rep.err_msg)
		{
			alert(rep.err_msg);
			return;
		}
		$('#editor').html(rep.detail);
	});
	$('#form').submit(function() {
		$('#hide_me').val($('#editor').html());
		return true;
	});
}

function init_admin_my_info() {
	init_toolbar();
	$.get("/poster/get_my_info", function(data){
		var rep = jQuery.parseJSON(data);
		if (rep.err_msg)
		{
			alert(rep.err_msg);
			return;
		}
		var arr = ['tel', 'mail', 'wechat'];
		for (var i in arr) {
			$('#'+arr[i]).val(rep.data[arr[i]]);
		}
		
		$('#editor').html(rep.detail);
	});
	$('#form').submit(function() {
		$('#hide_me').val($('#editor').html());
		return true;
	});
}

function init_signin() {
	$("#img_passcode").click(function(){
        $(this).attr('src','/poster/passcode'); 
    });
	
	$('#form').submit(function() {
		if (!$("#mail").val()) {
			$("#mail").focus();
			return false;
		}
		if (!$("#password").val()) {
			$("#password").focus();
			return false;
		}
		var ret = false;
		var req = {"passcode": $("#passcode").val()};
		var option = {
			  type: "POST",
			  url: "/poster/check_passcode",
			  data: req,
			  async: false
			};
		$.ajax(option).done(function(data) {
						if (data == "1") {
							ret = true;
						} else {
							$("#err_msg").html("验证码错误");
							$("#passcode").focus();
						}
					});
		return ret;
	});
}