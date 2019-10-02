function snfbc (json) {
	document.write(parseInt(json.value.items[0].feed.entry.circulation));
}

function xfeedburner(uri) {
	if (uri) {
		document.write('<sc'+'ript src="http://pipes.yahoo.com/pipes/pipe.run?_id=b849e5e717599a0113265b7ac3e7d671&_render=json&uri='+uri+'&_callback=snfbc" type="text/javascript"></s'+'cript>');
	} else {
		return false;	
	}
}

function sntwitter(json) {
	document.write(parseInt(json.followers_count));
}

function xtwitter(user) {
	if (user) {
		document.write('<scr'+'ipt src="http://twitter.com/users/show/'+user+'.json?callback=sntwitter" type="text/javascript"></scr'+'ipt>');
	} else {
		return false;
	}
}