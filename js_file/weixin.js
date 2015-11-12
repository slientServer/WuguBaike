function getAccessToken(){
	var tokenInfo;
	$(document).ready(function(){
  		tokenInfo=$.ajax({
  			url:'https://api.weixin.qq.com/cgi-bin/token',
  			async:false,
  			data: {
  				grant_type: 'client_credential',
  				appid: 'wx2d3d1660043afb5d',
  				secret: 'd4624c36b6795d1d99dcf0547af5443d'
  			},
  			type: 'get',
  			async: false,
  			dataType: 'json',
  			jsonp: 'callback',
  			jsonCallback: 'test',
  			success: function(json){
  				console.log('1231312');
  			}
  		});
 	});
}