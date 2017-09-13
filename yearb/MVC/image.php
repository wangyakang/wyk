<?php
header("content-type:image/png");
$img=imagecreatetruecolor(200,80);  //创建图像
$bgcolor=imagecolorallocate($img,255,0,0); //创建颜色
//imagefill($img,35,23,$bgcolor);   //创建图片区域
$fontcolor=imagecolorallocate($img,255,255,0);
//imagestring($img,5,0,0,"sd",$fontcolor);  //设置字体颜色,内置字体
//imagettftext($img,20,0,100,20,$fontcolor,"simsun.ttc","文字");  //资源、大小、角度、位置      //设置字体
$rect=imagettfbbox(20,9,"simsun.ttc","文字");   //计算字体的大小，通过计算坐标位置
$w=$rect[2]-$rect[0];
$h=$rect[1]-$rect[5];
imagettftext($img,20,0,(150-$w)/2,(80-$h)/2+$h,$fontcolor,"simsun.ttc","文字");

//画线
imageline($img,)
imagepng($img);   //输出到页面
