<?php
$type=$_REQUEST["type"];

$data=file_get_contents(__DIR__ . "/yiyan.json");
$json=json_decode($data,true);
$s=count($json);
if($type=="json"){

    if($s==0){
        $ret_json["code"]=201;
        $ret_json["msg"]="抱歉，获取数据出错。";
        $ret_json['tips']="小职API：http://api.83883.top";
        echo ret_json($ret_json);
    }else{
        $arrr=range(0,$s); 
        shuffle($arrr); 
        foreach($arrr as $values);
        $ret_json["code"]=200;
        $ret_json["msg"]=$json[$values]["txt"];
        $ret_json["form"]=$json[$values]["form"];
        $ret_json['tips']="小职API：http://api.83883.top";
        echo ret_json($ret_json);
    }

    
}else{



    if($s==0){
        echo "抱歉，出错了！";
    }else{
        $arrr=range(0,$s); 
        shuffle($arrr); 
        foreach($arrr as $values); 
        echo $json[$values]["txt"]."\n——".$json[$values]["form"];
    }


}


function ret_json($json){
    return stripslashes(json_encode($json,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
}





?>
