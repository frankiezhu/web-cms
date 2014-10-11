<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('generate_code'))
{
	function generate_code($characters) 
	{
		/* list all possible characters, similar looking characters and vowels have been removed */
		$possible = '23456789bcdfghjkmnpqrstvwxyzBCDFGHJKMNPQRSTVWXYZ';
		$code = '';
		$i = 0;
		while ($i < $characters) { 
			$code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
			$i++;
		}
		return $code;
	}
}
	
if ( ! function_exists('gen_passcode1'))
{
    function gen_passcode1($w=120,$h=40, $characters=6) 
	{
		$code = generate_code($characters); 
		$im = imagecreate($w, $h); 
		$black = imagecolorallocate($im, 0, 0, 0); 
		$gray = imagecolorallocate($im, 200, 200, 200); 
		$bgcolor = imagecolorallocate($im, 255, 255, 255); 
		//填充背景 
		imagefill($im, 0, 0, $gray); 
	 
		//画边框 
		imagerectangle($im, 0, 0, $w-1, $h-1, $black); 
	 
		//随机绘制两条虚线，起干扰作用 
		$style = array ($black,$black,$black,$black,$black, 
			$gray,$gray,$gray,$gray,$gray 
		); 
		imagesetstyle($im, $style); 
		$y1 = rand(0, $h); 
		$y2 = rand(0, $h); 
		$y3 = rand(0, $h); 
		$y4 = rand(0, $h); 
		imageline($im, 0, $y1, $w, $y3, IMG_COLOR_STYLED); 
		imageline($im, 0, $y2, $w, $y4, IMG_COLOR_STYLED); 
	 
		//在画布上随机生成大量黑点，起干扰作用; 
		for ($i = 0; $i < 80; $i++) 
		{
			imagesetpixel($im, rand(0, $w), rand(0, $h), $black); 
		} 
		//将数字随机显示在画布上,字符的水平间距和位置都按一定波动范围随机生成 
		$strx = rand(3, 8); 
		for ($i = 0; $i < $characters; $i++)
		{ 
			$strpos = rand(1, 6); 
			imagestring($im, 5, $strx, $strpos, substr($code, $i, 1), $black); 
			$strx += rand(8, 12); 
		} 
		header("Content-type: image/png"); 
		imagepng($im);
		imagedestroy($im);
		return $code;
	}
}

if ( ! function_exists('gen_passcode2'))
{	
	function gen_passcode2($width=120,$height=40,$characters=6)
	{
		$code = generate_code($characters);
		$font = BASEPATH."/../application/helpers/monofont.ttf";
		/* font size will be 75% of the image height */
		$font_size = $height * 0.75;
		$image = @imagecreate($width, $height) or die('Cannot initialize new GD image stream');
		/* set the colours */
		$background_color = imagecolorallocate($image, 255, 255, 255);
		$text_color = imagecolorallocate($image, 20, 40, 100);
		$noise_color = imagecolorallocate($image, 100, 120, 180);
		/* generate random dots in background */
		for( $i=0; $i<($width*$height)/3; $i++ )
		{
			imagefilledellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
		}
		/* generate random lines in background */
		for( $i=0; $i<($width*$height)/150; $i++ )
		{
			imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $noise_color);
		}
		/* create textbox and add text */
		$textbox = imagettfbbox($font_size, 0, $font, $code) or die('Error in imagettfbbox function');
		$x = ($width - $textbox[4])/2;
		$y = ($height - $textbox[5])/2;
		imagettftext($image, $font_size, 0, $x, $y, $text_color, $font , $code) or die('Error in imagettftext function');

		header('Content-Type: image/jpeg');
		imagejpeg($image);
		imagedestroy($image);
		return $code;
	}
}

