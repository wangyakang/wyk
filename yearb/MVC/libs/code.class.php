<?php
class code{
    private $select="ABDEFGHJKLMNOPQRSTUVWY345678abdefhjklmnprstuvwy";
    private $letterNum=4;
    private $current;
    public $width=200;
    public $height=80;
    public $lineNum=4;
    public $pix=50;
    public $imgType="png";
    public $img;
    public $fontFamily;
    public $resultLetter;
    public $fontSize=array("min"=>18,"max"=>30);
    private function getBgColor(){
        $arr[0]=mt_rand(128,256);
        $arr[1]=mt_rand(128,256);
        $arr[2]=mt_rand(128,256);
        return $arr;
    }
    private function getTextColor(){
        $arr1[0]=mt_rand(0,128);
        $arr1[1]=mt_rand(0,128);
        $arr1[2]=mt_rand(0,128);
        return $arr1;
    }
    private function getRandChar(){
        $max = strlen($this->select)-1;
        for($i=0;$i<$this->letterNum;$i++){
            $this->current.=$this->select[mt_rand(0,$max)];
        }
    }
    private function create(){
        $this->img=imagecreatetruecolor($this->width,$this->height);
        $colorArr=$this->getBgColor();
        $bgcolor=imagecolorallocate($this->img,$colorArr[0],$colorArr[1],$colorArr[2]);
        imagefill($this->img,0,0,$bgcolor);
    }
    private function createText(){
        $this->getRandChar();
        $x=$this->width/$this->letterNum;
        for($i=0;$i<$this->letterNum;$i++){
            $colorArr=$this->getTextColor();
            $fontcolor=imagecolorallocate($this->img,$colorArr[0],$colorArr[1],$colorArr[2]);
            $fontsize=mt_rand($this->fontSize["min"],$this->fontSize["max"]);
            $angle=mt_rand(-15,15);
            $rect=imagettfbbox($fontsize,$angle,$this->fontFamily,$this->current[$i]);
            $y=mt_rand($rect[1]-$rect[5],$this->height);
            imagettftext($this->img,$fontsize,$angle,(10+$x*$i)+mt_rand(-10,10),$y,$fontcolor,$this->fontFamily,$this->current[$i]);
        }
    }
    private function createLine(){
        while($this->lineNum>0){
            $colorArr=$this->getBgColor();
            $linecolor=imagecolorallocate($this->img,$colorArr[0],$colorArr[1],$colorArr[2]);
            $x1=mt_rand(0,$this->width);
            $x2=mt_rand(0,$this->width);
            $y1=mt_rand(0,$this->height);
            $y2=mt_rand(0,$this->height);
            imageline($this->img,$x1,$x2,$y1,$y2,$linecolor);
            $this->lineNum--;
        }
        while($this->pix>0){
            $colorArr=$this->getBgColor();
            $linecolor=imagecolorallocate($this->img,$colorArr[0],$colorArr[1],$colorArr[2]);
            $x=mt_rand(0,$this->width);
            $y=mt_rand(0,$this->height);
            imagesetpixel ($this->img,$x,$y,$linecolor);
            $this->pix--;
        }
    }
    public function output(){
        header("content-type:image/".$this->imgType);
        $out="image".$this->imgType;
        //1.创建画布->填充颜色
        $this->create();
        //2.创建文字->随机->颜色
        $this->createText();
        //3.干扰线->位置->颜色
        $this->createLine();
        imagepng($this->img);
        imagedestroy($this->img);
        return $this->resultLetter;
    }
}
//$image=new code();
//$image->fontSize["min"]=30;
//$image->fontSize["max"]=40;
//$image->output();
?>