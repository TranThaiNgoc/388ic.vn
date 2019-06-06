<?php
namespace app\Http\Controllers\Common;

trait Common {
	public static function _substr($str, $length, $minword = 3) {
		$sub = '';
		$len = 0;
		foreach (explode(' ', $str) as $word){
			$part = (($sub != '') ? ' ' : '') . $word;
			$sub .= $part;
			$len += strlen($part);
			if (strlen($word) > $minword && strlen($sub) >= $length){
				break;
			}
		}
		return $sub . (($len < strlen($str)) ? '...' : '');
	}
}