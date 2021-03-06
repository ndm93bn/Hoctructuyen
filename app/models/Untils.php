<?php
class Untils {
	static function convertAlias($string){
			$search = array(
							'à','á','ạ','ả','ã','â','ầ','ấ','ậ','ẩ','ẫ','ă','ằ','ắ','ặ','ẳ','ẵ',
							'è','é','ẹ','ẻ','ẽ','ê','ề','ế','ệ','ể','ễ',
							'ì','í','ị','ỉ','ĩ',
							'ò','ó','ọ','ỏ','õ','ô','ồ','ố','ộ','ổ','ỗ','ơ',
							'ờ','ớ','ợ','ở','ỡ',
							'ù','ú','ụ','ủ','ũ','ư','ừ','ứ','ự','ử','ữ',
							'ỳ','ý','ỵ','ỷ','ỹ',
							'đ',
							'À','Á','Ạ','Ả','Ã','Â','Ầ','Ấ','Ậ','Ẩ','Ẫ','Ă','Ằ','Ắ','Ặ','Ẳ','Ẵ',
							'È','É','Ẹ','Ẻ','Ẽ','Ê','Ề','Ế','Ệ','Ể','Ễ',
							'Ì','Í','Ị','Ỉ','Ĩ',
							'Ò','Ó','Ọ','Ỏ','Õ','Ô','Ồ','Ố','Ộ','Ổ','Ỗ','Ơ','Ờ','Ớ','Ợ','Ở','Ỡ',
							'Ù','Ú','Ụ','Ủ','Ũ','Ư','Ừ','Ứ','Ự','Ử','Ữ',
							'Ỳ','Ý','Ỵ','Ỷ','Ỹ',
							'Đ',
							' ','#','/','?','\\','&',' & ','(',')',"'",'%','"'
							);
			$replace = array(
							'a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a',
							'e','e','e','e','e','e','e','e','e','e','e',
							'i','i','i','i','i',
							'o','o','o','o','o','o','o','o','o','o','o','o',
							'o','o','o','o','o',
							'u','u','u','u','u','u','u','u','u','u','u',
							'y','y','y','y','y',
							'd',
							'A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A',
							'E','E','E','E','E','E','E','E','E','E','E',
							'I','I','I','I','I',
							'O','O','O','O','O','O','O','O','O','O','O','O','O','O','O','O','O',
							'U','U','U','U','U','U','U','U','U','U','U',
							'Y','Y','Y','Y','Y',
							'D',
							'-','','','','','-','-','','',"","",""
							);
			return strtolower(str_replace($search,$replace,$string));
		}
	static  function bodau($string){
			$search = array(
							'à','á','ạ','ả','ã','â','ầ','ấ','ậ','ẩ','ẫ','ă','ằ','ắ','ặ','ẳ','ẵ',
							'è','é','ẹ','ẻ','ẽ','ê','ề','ế','ệ','ể','ễ',
							'ì','í','ị','ỉ','ĩ',
							'ò','ó','ọ','ỏ','õ','ô','ồ','ố','ộ','ổ','ỗ','ơ',
							'ờ','ớ','ợ','ở','ỡ',
							'ù','ú','ụ','ủ','ũ','ư','ừ','ứ','ự','ử','ữ',
							'ỳ','ý','ỵ','ỷ','ỹ',
							'đ',
							'À','Á','Ạ','Ả','Ã','Â','Ầ','Ấ','Ậ','Ẩ','Ẫ','Ă','Ằ','Ắ','Ặ','Ẳ','Ẵ',
							'È','É','Ẹ','Ẻ','Ẽ','Ê','Ề','Ế','Ệ','Ể','Ễ',
							'Ì','Í','Ị','Ỉ','Ĩ',
							'Ò','Ó','Ọ','Ỏ','Õ','Ô','Ồ','Ố','Ộ','Ổ','Ỗ','Ơ','Ờ','Ớ','Ợ','Ở','Ỡ',
							'Ù','Ú','Ụ','Ủ','Ũ','Ư','Ừ','Ứ','Ự','Ử','Ữ',
							'Ỳ','Ý','Ỵ','Ỷ','Ỹ',
							'Đ',
							' ','#','/','?','\\','&',' & ','(',')',"'",'%','"'
							);
			$replace = array(
							'a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a',
							'e','e','e','e','e','e','e','e','e','e','e',
							'i','i','i','i','i',
							'o','o','o','o','o','o','o','o','o','o','o','o',
							'o','o','o','o','o',
							'u','u','u','u','u','u','u','u','u','u','u',
							'y','y','y','y','y',
							'd',
							'a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a','a',
							'e','e','e','e','e','e','e','e','e','e','e',
							'i','i','i','i','i',
							'o','o','o','o','o','o','o','o','o','o','o','o',
							'o','o','o','o','o',
							'u','u','u','u','u','u','u','u','u','u','u',
							'y','y','y','y','y',
							'd',
							' ','','','','','-','-','','',"","",""
							);
			return strtolower(str_replace($search,$replace,$string));
		}
    
    
   static function catXau($str, $len, $charset="UTF-8"){
    $str = html_entity_decode($str, ENT_QUOTES, $charset);   
    if(mb_strlen($str, $charset)> $len){
        $arr = explode(' ', $str);
        $str = mb_substr($str, 0, $len, $charset);
        $arrRes = explode(' ', $str);
        $last = $arr[count($arrRes)-1];
        unset($arr);
        if(strcasecmp($arrRes[count($arrRes)-1], $last))   unset($arrRes[count($arrRes)-1]);
      return implode(' ', $arrRes)."...";   
   }
    return $str;
}    

}