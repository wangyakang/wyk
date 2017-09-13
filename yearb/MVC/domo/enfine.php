<?php
//引擎
//{lo $data $v}
//<li>{$v}</li>
// {/lo}
    $str=file_get_contents("domo.html");  //以字符串方式读取文件
    $preg='/\{lo\s+(\$\w+)\s+(\$\w+)\}[^\{]*)\{(\$\w+)\}([^\{]*)\{\/lo\}/';
    preg_match($preg,$str,$arr);  //匹配规则
    $result="<?php
        foreach({$arr[1]} as {$arr[2]}){
            echo '{$arr[3]}'.$arr[4].'{$arr[5]}';
        } ;
        ?>";
    file_put_contents("demo.php",preg_replace($preg,$result,$str));