<?php
/*
	小垃圾必应日图 API 精简版(LLBDPA) Lite Laji(means rubbish) Bing Daily Picture API(LLBDPA)
	版本 1.1 (第三方) Version: 1.1 (Third Party)
	源码 Little_Qiu,感谢 GPlane,精简 Flyfish. Source By Little_Qiu,Thanks @GPlane,Changed By Flyfish.
	国际版会有延时。会在早晨刷新而不是0:00.
*/
function bg(){
    //非专业用户，请不要更改以下文本 if U aren't a PHP developer,please don't change the following text.
	$data = json_decode(file_get_contents('https://bing.com/HPImageArchive.aspx?format=js&idx=-1&n=1'),true); // 从 Bing 获取日图 JSON get picture JSON from Bing
    	return "https://bing.com".$data['images'][0]['url']; // 返回 URL get picture URL
};
$url = bg(); 
header("Location: $url"); // 302 跳转 302 http status code
?>
