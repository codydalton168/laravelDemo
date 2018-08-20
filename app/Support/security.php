<?php




//遠程跨網資料傳送  curl_setopt  方式
function http_post_data($url, $data_string='',$method='GET') {



      if(extension_loaded('curl')){

		$ch = curl_init();


		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_TIMEOUT, '120');
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Keep-Alive: 300','Connection: keep-alive')) ;
		curl_setopt($ch, CURLOPT_USERAGENT, 'NET System');
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_AUTOREFERER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);	
		if($method == 'POST'){
			
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST,  'POST');
			curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data_string));
		}
		curl_setopt ($ch, CURLOPT_HEADER, 0);
		$replaydata = curl_exec($ch);
		curl_close($ch);
		return $replaydata;

	} else {

		return "No curl Suppert";
	}



}








//檢查訪問 User 是否用代理 Porxy  IP 訪問

function UserPorxy(){

	if(Request::server('HTTP_X_FORWARDED_FOR') || Request::server('HTTP_X_FORWARDED') || Request::server('HTTP_FORWARDED_FOR') || Request::server('HTTP_VIA') || Request::server('HTTP_FORWARDED') || Request::server('HTTP_CLIENT_IP') || Request::server('HTTP_FORWARDED_FOR_IP') || Request::server('VIA') ||Request::server('X_FORWARDED_FOR')|| Request::server('FORWARDED_FOR') || Request::server('X_FORWARDED FORWARDED') || Request::server('CLIENT_IP') || Request::server('FORWARDED_FOR_IP') || Request::server('HTTP_PROXY_CONNECTION') || !Request::server('HTTP_CONNECTION')){
		return true;
	}  else {
		return false;
	}
}
	

/*
*
*   判斷訪問 USER 是否搜索引擎
*  return true false
*/


function ifsearchrobot(){

      $spanrobot = "bot|crawl|spider|slurp|sohu-search|lycos|robozilla|traveler|ia_archiver|heritrix|urllib|alexa|ask|yacy|legs|trivialnutch|rambler|tool|netcraft|search|larbin|yahoo|konqueror|exabot|yandex";

      if(preg_match("/($spanrobot)/i", strtolower(Request::server('HTTP_USER_AGENT')))){
             return true;
      } else {
             return false;
      }

}



//取變數
function GlobalsALL($methoddata){
	if ($methoddata == 'GET') {
		foreach ($_GET as $key => $value) {
			if(isset($_GET[$key])) {
				$GLOBALS[$key] = $_GET[$key];
			}
		}
	} elseif ($methoddata == 'POST') {
		foreach ($_POST as $key => $_value) {
			if(isset($_POST[$key])) {
                      		$GLOBALS[$key] = $_POST[$key];
			}
		}
	}
}

	
/*
*	防 sql 及 php  隱碼攻擊
*	最後變數都過濾掉產生無效
*/	

function secure_input($val){


		if (is_array($val)){
			$output = array();
			foreach ($val as $key => $data){
				$output[$key] = secure_input($data);
			}
			return $output;
	
		}else{


			//阿拉伯純數字不過濾                                          
			if(is_int($val)){
				return (int)$val;			  
			//浮點數字不過濾  	  
			} else if(is_float($val)){       			  		  
				return $val;
			} else {


   				//防 sql 及  php sell

				$ra1 = array('update','show table','insert into','select','fopen','file','copy','move_uploaded_file',
	                         'file_put_contents','fwrite','fputs','passthru','shell_exec','exec','system','mysql_query','mysql_unbuffered_query',
	                         'mysql_select_db','mysql_drop_db','mysql_db_query','mysqli_query','mysqli_unbuffered_query',
	                         'mysqli_select_db','mysqli_drop_db','mysqli_db_query','sqlite_query','sqlite_exec','sqlite_array_query',
	                         'sqlite_unbuffered_query','phpinfo','<?php','?'.'>','../','javascript', 'vbscript','marquee','iframe','function','passwd','etc',
	                         'eval','/var/www','union','load_file','outfile',"\'",'\/\*','|\*','\.\.\/','\.\/','%0b','substr','lower','lpad','unhex','0x');

				$ra2 = array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy',
	                            'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload',
	                            'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect',
	                            'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag',
	                             'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate',
	                             'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup',
	                             'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove',
	                             'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste',
	                             'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit',
	                             'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop',
	                             'onsubmit', 'onunload');


				$val = str_ireplace(array_merge($ra1, $ra2),'',$val);


				return $val;
                      }

		}
	}	
?>
