<?php
header("Content-Type: application/json"); 
require_once('cors.php');
require_once('include.inc.php');

//$allFields['Default'][] = ['name' => 'Editor1', 'show'=>true, 'type'=>'editor', 'label' => __('Editor1'), 'value' => '<p>https://www.google.com </p><p>https://www.google.com </p><p>https://www.google.com </p>', 'placeholder' => 'placeholder Editor', 'helptext' => 'helptext Editor', 'rules' => ['required' => true] ];
//$allFields['Default'][] = ['name' => 'Editor2', 'show'=>true, 'type'=>'editor', 'label' => __('Editor2'), 'value' => 'https://www.google.com', 'placeholder' => 'placeholder Editor', 'helptext' => 'helptext Editor', 'rules' => ['required' => true] ];

//$allFields['Default'][] = ['name' => 'Slider1', 'show'=>true, 'type'=>'slider', 'label' => __('Slider1'), 'value' => '10', 'placeholder' => 'placeholder Slider', 'helptext' => 'helptext Slider', 'rules' => ['required' => true], "min"=>1, "max"=>100, "step"=>5,"marks"=>[["value"=>0,"label"=>"0°"],["value"=>30,"label"=>"50°"],["value"=>50,"label"=>"50°"],["value"=>100,"label"=>"100°"] ]];
//$allFields['Default'][] = ['name' => 'Slider2', 'show'=>true, 'type'=>'slider', 'label' => __('Slider2'), 'value' => '10', 'placeholder' => 'placeholder Slider', 'helptext' => 'helptext Slider', 'rules' => ['required' => true], "min"=>5, "max"=>60, "step"=>5,"marks"=>[["value"=>0,"label"=>"0°"],["value"=>50,"label"=>"50°"],["value"=>100,"label"=>"100°"] ]];
$allFields['Default'][] = ['name' => 'username', 'show'=>true, 'type'=>'input', 'label' => __('Username'), 'value' => '', 'placeholder' => 'placeholder username', 'helptext' => 'helptext username', 'rules' => ['required' => true]];
$allFields['Default'][] = ['name' => 'password', 'show'=>true, 'type'=>'password', 'label' => __('Password'), 'value' => '', 'placeholder' => 'placeholder password', 'helptext' => 'helptext password', 'rules' => ['required' => true]];
$allFields['Default'][] = ['name' => 'comfirmpassword', 'show'=>true, 'type'=>'comfirmpassword', 'label' => __('Comfirm Password'), 'value' => '', 'placeholder' => 'placeholder password', 'helptext' => 'helptext password', 'rules' => ['required' => true]];

//$allFields['Default'][] = ['name' => 'Avator1', 'show'=>true, 'type'=>'avatar', 'label' => __('头像1'), 'value' => '', 'placeholder' => '上传头像', 'helptext' => 'Allowed PNG or JPEG. Max size of 800K.', 'rules' => ['required' => true]];
//$allFields['Default'][] = ['name' => 'Avator2', 'show'=>true, 'type'=>'avatar', 'label' => __('头像2'), 'value' => '', 'placeholder' => '上传头像', 'helptext' => 'Allowed PNG or JPEG. Max size of 800K.', 'rules' => ['required' => true]];
$allFields['Default'][] = ['name' => 'date1', 'show'=>true, 'type'=>'date', 'label' => __('Date Now'), 'value' => '01/02/2023', 'placeholder' => '01/02/2023', 'helptext' => 'helptext Date Now', 'rules' => ['required' => true], 'dateFormat' => 'yyyy-MM-dd','timeZone'=>'America/Los_Angeles'];
$allFields['Default'][] = ['name' => 'date2', 'show'=>true, 'type'=>'date', 'label' => __('Date Now'), 'value' => '01/02/2023', 'placeholder' => '01/02/2023', 'helptext' => 'helptext Date Now', 'rules' => ['required' => true], 'dateFormat' => 'yyyy-MM-dd','timeZone'=>'America/Los_Angeles'];
$allFields['Default'][] = ['name' => 'datetime1', 'show'=>true, 'type'=>'datetime', 'label' => __('Third Date'), 'value' => '2023-05-26 12:00', 'placeholder' => '03/04/2023', 'helptext' => 'helptext Third Date', 'rules' => ['required' => true], 'dateFormat' => 'yyyy-MM-dd HH:mm','timeZone'=>'America/Los_Angeles'];
$allFields['Default'][] = ['name' => 'datetime2', 'show'=>true, 'type'=>'datetime', 'label' => __('Third Date'), 'value' => '2023-05-27 18:00', 'placeholder' => '03/04/2023', 'helptext' => 'helptext Third Date', 'rules' => ['required' => true], 'dateFormat' => 'yyyy-MM-dd HH:mm','timeZone'=>'America/Los_Angeles'];
$allFields['Default'][] = ['name' => 'time1', 'show'=>true, 'type'=>'time', 'label' => __('Time1'), 'value' => '15:10', 'placeholder' => '03/04/2023', 'helptext' => 'helptext Third Date', 'rules' => ['required' => true], 'dateFormat' => 'HH:mm','timeZone'=>'America/Los_Angeles'];
$allFields['Default'][] = ['name' => 'time2', 'show'=>true, 'type'=>'time', 'label' => __('Time2'), 'value' => '16:10', 'placeholder' => '03/04/2023', 'helptext' => 'helptext Third Date', 'rules' => ['required' => true], 'dateFormat' => 'HH:mm','timeZone'=>'America/Los_Angeles'];
$allFields['Default'][] = ['name' => 'fullName1', 'show'=>true, 'type'=>'input', 'label' => __('FullName1'), 'value' => 'jiyun wang', 'placeholder' => 'placeholder fullName', 'helptext' => 'helptext fullName', 'rules' => ['required' => true]];
$allFields['Default'][] = ['name' => 'email', 'show'=>true, 'type'=>'email', 'label' => __('电子邮件'), 'value' => 'jiyunwang2021@gmail.com', 'placeholder' => 'placeholder email', 'helptext' => 'helptext email', 'rules' => ['required' => true]];
$allFields['Default'][] = ['name' => 'address', 'show'=>true, 'type'=>'checkbox', 'options'=>$省份下拉框, 'label' => __('Address'), 'value' => 'BC', 'placeholder' => 'placeholder address', 'helptext' => 'helptext address', 'rules' => ['required' => true]];
$allFields['Default'][] = ['name' => 'city', 'show'=>true, 'type'=>'radiogroup', 'options'=>$省份下拉框, 'label' => __('city'), 'value' => 'M B', 'placeholder' => 'placeholder city', 'helptext' => 'helptext city', 'rules' => ['required' => true]];
$allFields['Default'][] = ['name' => 'province', 'show'=>true, 'type'=>'select', 'options'=>$省份下拉框, 'label' => __('Province'), 'value' => 'M B', 'placeholder' => 'placeholder province', 'helptext' => 'helptext province', 'rules' => ['required' => true]];
$allFields['Default'][] = ['name' => 'memo', 'show'=>true, 'type'=>'textarea', 'label' => __('Memo'), 'value' => 'Initial Textarea', 'placeholder' => 'placeholder Textarea', 'helptext' => 'helptext Textarea', 'rules' => ['required' => true]];
