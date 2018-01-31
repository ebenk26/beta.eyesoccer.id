$(document).ready( function ()
{
    nav_first();
});

function nav_first(pageon)
{
    var showpage = $("#showpage").attr('value');
    var showrun = $("#showrun").attr('value');
    
    // Start Pagination
    if (pageon == null) {
        var pageon = 1;
        
        if (showpage != showrun) {
            $("#shownav").append("<a href='javascript:void(0)' id='nav_tab' onclick='nav_tab(\"first\");'>Pertama</a>");
            $("#shownav").append("<a href='javascript:void(0)' id='nav_tab' onclick='nav_tab(\"prev\");'>Sebelumnya</a>");
            $("#shownav").append("<a id='nav_page'></a>");
            $("#shownav").append("<a href='javascript:void(0)' id='nav_tab' onclick='nav_tab(\"next\");'>Selanjutnya</a>");
            $("#shownav").append("<a href='javascript:void(0)' id='nav_tab' onclick='nav_tab(\"last\");'>Terakhir</a>");
        } else {
            $("#shownav").append("<a href='javascript:void(0)' id='nav_tab' onclick='nav_tab(\"prev\");'>Sebelumnya</a>");
            $("#shownav").append("<a id='nav_page'></a>");
            $("#shownav").append("<a href='javascript:void(0)' id='nav_tab' onclick='nav_tab(\"next\");'>Selanjutnya</a>");
        }
    }
    
    $("#nav_page").html('');
    
    var x = 0;
    for(var i = 0; i < showrun; i++)
    {
        x++;
        
        if (x == 1) {
            $("#nav_page").append("<a href='javascript:void(0)' id='nav_tab' class='net"+x+"' onclick='nav_first("+x+");'>"+x+"</a>");
        } else {
            if (showpage != showrun) {
                $("#nav_page").append("<a href='javascript:void(0)' id='nav_tab' class='net"+x+"' onclick='nav_page("+x+");'>"+x+"</a>");
            } else {
                $("#nav_page").append("<a href='javascript:void(0)' id='nav_tab' class='net"+x+"' onclick='nav_first("+x+");'>"+x+"</a>");
            }
        }
    }
    
    $("#nav_page").append("<a id='showmin' value="+((x+1)-showrun)+"></a>");
    $("#nav_page").append("<a id='showplus' value="+x+"></a>");
    
    $("#nav_tab.net"+pageon).addClass('actnet');
    $("#nav_tab.net"+pageon).css("background", "#c09d3d");
    $("#nav_page").append("<a id='actpage' value="+pageon+"></a>");
    
    if ($(".pageon").attr('value') == 'true') {
        action_page(pageon);
    } else {
        if (pageon > 1) {
            action_page(pageon);
        }
    }
}

function nav_page(pageon)
{
    var showpage = $("#showpage").attr('value');
    var showoff = $("#showoff").attr('value');
    var showrun = $("#showrun").attr('value');
    
    var showmin = $("#showmin").attr('value');
    var showplus = $("#showplus").attr('value');
    
    var actpage = $("#actpage").attr('value');
    var showlast = showpage - showrun;
    
    if (showplus == pageon || showmin == pageon || showplus < pageon || showmin > pageon) {
        $("#nav_page").html('');
        
        var x = 0 + pageon;
        for(var i = 0; i < showoff; i++)
        {
            if (showplus == pageon) {
                if (showpage >= x) {
                    if (showrun >= x) {
                        $("#nav_page").append("<a href='javascript:void(0)' id='nav_tab' class='net"+x+"' onclick='nav_first("+x+");'>"+x+"</a>");
                    } else if (showlast < x) {
                        $("#nav_page").append("<a href='javascript:void(0)' id='nav_tab' class='net"+x+"' onclick='nav_last("+x+");'>"+x+"</a>");
                    } else {
                        $("#nav_page").append("<a href='javascript:void(0)' id='nav_tab' class='net"+x+"' onclick='nav_page("+x+");'>"+x+"</a>");
                    }
                    
                    x++;
                }
            } else {
                if (showpage >= x) {
                    if (showmin == pageon || showmin > pageon) {
                        x++;
                        
                        if (x > pageon) {
                            x = x - showoff;
                        }
                    }
                    
                    if (x > 0) {
                        if (showrun >= x) {
                            $("#nav_page").append("<a href='javascript:void(0)' id='nav_tab' class='net"+x+"' onclick='nav_first("+x+");'>"+x+"</a>");
                        } else if (showlast < x) {
                            $("#nav_page").append("<a href='javascript:void(0)' id='nav_tab' class='net"+x+"' onclick='nav_last("+x+");'>"+x+"</a>");
                        } else {
                            $("#nav_page").append("<a href='javascript:void(0)' id='nav_tab' class='net"+x+"' onclick='nav_page("+x+");'>"+x+"</a>");
                        }
                    }
                    
                    if (showplus < pageon) {
                        x++;
                    }
                }
            }
        }
        
        if (showplus == pageon) {
            var showon = x - 1;
            $("#nav_page").append("<a id='showmin' value="+pageon+"></a>");
            $("#nav_page").append("<a id='showplus' value="+showon+"></a>");
        } else {
            if (showplus < pageon) {
                var pageonx = pageon;
                var showon = x - 1;
            } else {
                var pageonx = pageon - (showoff - 1);
                var showon = x;
            }
            
            $("#nav_page").append("<a id='showmin' value="+pageonx+"></a>");
            $("#nav_page").append("<a id='showplus' value="+showon+"></a>");
        }
    }
    
    if (actpage != pageon) {
        
        $("#nav_tab.net"+actpage).css("background", "#2f4050");
        $("#nav_tab.net"+actpage).removeClass('actnet');
        
        $("#nav_tab.net"+pageon).addClass('actnet');
        $("#nav_tab.net"+pageon).css("background", "#c09d3d");
        
        if (showplus == pageon || showmin == pageon || showplus < pageon || showmin > pageon) {
            $("#nav_page").append("<a id='actpage' value="+pageon+"></a>");
        } else {
            $("#actpage").attr("value", pageon);
        }
    } else {
        $("#nav_tab.net"+pageon).addClass('actnet');
        $("#nav_tab.net"+pageon).css("background", "#c09d3d");
        $("#nav_page").append("<a id='actpage' value="+pageon+"></a>");
    }
    
    action_page(pageon);
}

function nav_last(pageon)
{
    var showpage = $("#showpage").attr('value');
    var showrun = $("#showrun").attr('value');
    var showlast = showpage - showrun;
    
    if (showpage >= pageon) {
        $("#nav_page").html('');
        
        var x = showlast;
        for(var i = 0; i < showrun; i++)
        {
            x++;
            
            if (showpage == x) {
                $("#nav_page").append("<a href='javascript:void(0)' id='nav_tab' class='net"+x+"' onclick='nav_last("+x+");'>"+x+"</a>");
            } else {
                $("#nav_page").append("<a href='javascript:void(0)' id='nav_tab' class='net"+x+"' onclick='nav_page("+x+");'>"+x+"</a>");
            }
        }
        
        $("#nav_page").append("<a id='showmin' value="+(showlast+1)+"></a>");
        $("#nav_page").append("<a id='showplus' value="+x+"></a>");
        
        $("#nav_tab.net"+pageon).addClass('actnet');
        $("#nav_tab.net"+pageon).css("background", "#c09d3d");
        $("#nav_page").append("<a id='actpage' value="+pageon+"></a>");
    }
    
    action_page(pageon);
}

function nav_tab(valtab)
{
    var showpage = $("#showpage").attr('value');
    var showrun = $("#showrun").attr('value');
    var pageon = $("#nav_tab.actnet").html();
    
    if (valtab == 'first') {
        var first = 1;
        nav_first(first);
    }
    if (valtab == 'prev') {
        var prev = parseFloat(pageon) - 1;
        
        if (prev > 0) {
            if (showrun < prev) {
                nav_page(prev);
            } else {
                nav_first(prev);
            }
        }
    }
    if (valtab == 'next') {
        var next = parseFloat(pageon) + 1;
        var showlast = showpage - showrun;
        
        if (showpage >= next ) {
            if (showlast >= next) {
                nav_page(next);
            } else {
                if (showpage != showrun) {
                    nav_last(next);
                } else {
                    nav_first(next);
                }
            }
        }
    }
    if (valtab == 'last') {
        var last = showpage;     
        nav_last(last);
    }
}

function action_page(xpage)
{
	var showlist = $('#showlist').attr('value');
    var show_url = $('#showurl').attr('value');
    var showbaseurl = $('#showbaseurl').attr('value');
	var show_newurl = $('#shownewurl').attr('value');
    var jqtest = $('.jqtest').attr('val');
	$(showlist).html("<img style='width: 40%;margin-left: 30%;' class='load-gif' src='"+showbaseurl+"assets/img/loadingsoccer.gif' alt='Loading'>");
    // $(".load-gif").show();
	// console.log(show_newurl);
    // console.log('test', urlSplit(show_newurl+"/"+xpage));
    $.ajax({
        type: "post",
        url: show_url,
        data: "val="+xpage,
        cache: false,
        success: function(msg){
            $(showlist).html(msg);
            $(showlist).append("<div class='pageon' value='true'></div>");
			urlUpdate(urlSplit(show_newurl+"/"+xpage));
        }
    });
}

function urlSplit(urlx) {
    var split = urlx.split("/");
    var urlNew = '';
    var ux = 0;
    split.map(function(uri){
	if (ux > 0) {
		urlNew = urlNew+'/'+uri;
	} else {
		urlNew = uri;
	}
	ux++;
    })
    
    return urlNew;
}

var urlHistory = '';
function urlUpdate(urlPath) {
    urlHistory = (history.state != null) ? history.state.url : '';
    history.pushState({url: "" + urlPath + ""}, "", urlPath);
}