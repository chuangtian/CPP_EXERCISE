<?php 

/**
 * 发送post请求
 * @param string $url 请求地址
 * @param array $post_data post键值对数据
 * @return string
 */
function send_post($url, $post_data) {
 
  $postdata = http_build_query($post_data);
  $options = array(
    'http' => array(
      'method' => 'POST',
      'header' => 'Content-type:application/x-www-form-urlencoded',
      'content' => $postdata,
      'timeout' => 15 * 60 // 超时时间（单位:s）
    )
  );
  $context = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
 
  return $result;
}
/*

 $url='https://novatraderex.com/api/v1/openorders';
 $key='LrbuoBSaR9agHf5T3Yd2ychFsQzPE3CpVd7sJEc8KwsXF2LBrq';
 $secret='rcrITDXWgyzzP7e10LGOYU6ItfQ40E0Y8yfWjnmVKkYPzEk2JmBqeQ4N3eps';
//使用方法
$post_data = array(
  'nonce' => time(),
  'key' => $key,
  'signature' => base64_encode(hash_hmac('sha512', $url, $secret, true))
);
echo $url;
print_r($post_data);
$data=send_post($url, $post_data);
$data = json_decode($data,true);
print_r($data);
*/


 $url='http://192.168.0.163/html/app/index.php/group/groups/id/80595/time/'.time().'/sign/c7ce442d62294c255b475e60eadc2278';
 
//使用方法
$post_data = array(
  'password' => '123456',
  'phone' =>'18720250320',
  'region' => '86'
);
echo $url;
print_r($post_data);
$data=send_post($url, $post_data);
$data = json_decode($data,true);
print_r($data);
