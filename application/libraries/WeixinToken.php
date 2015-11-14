<?php
//获取微信公众平台token
defined('BASEPATH') OR exit('No direct script access allowed');

class WeixinToken{

	protected $CI;
	protected $token;

	public function __construct(){
		$this->token= $this->getToken();
	}

	public function urlTemp($url){
		$curl= curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_BINARYTRANSFER, true) ;
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false) ;
        $res= curl_exec($curl);
        return $res;        
	}

	public function getToken(){
		$url= 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx2d3d1660043afb5d&secret=d4624c36b6795d1d99dcf0547af5443d';
        return json_decode($this->urlTemp($url))->access_token;
	}

	public function getIp(){
		$url= 'https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token='.$this->token;
		return $this->urlTemp($url);
	}

	 //响应消息
    public function responseMsg()
    {
        // $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
        // if (!empty($postStr)){
        //     $this->logger("R \r\n".$postStr);
        //     $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
        //     $RX_TYPE = trim($postObj->MsgType);

        //     if (($postObj->MsgType == "event") && ($postObj->Event == "subscribe" || $postObj->Event == "unsubscribe")){
        //         //过滤关注和取消关注事件
        //     }else{
                
        //     }
            
        //     //消息类型分离
        //    switch ($RX_TYPE)
        //     {
        //         case "event":
        //             $result = $this->receiveEvent($postObj);                    break;
        //         case "text":
        //            if (strstr($postObj->Content, "第三方")){
        //                 $result = $this->relayPart3("http://www.fangbei.org/test.php".'?'.$_SERVER['QUERY_STRING'], $postStr);
        //             }else{
        //                  $result = $this->receiveText($postObj);
        //             }
        //              break;
        //         case "image":
        //             $result = $this->receiveImage($postObj);
        //             break;
        //          case "location":
        //             $result = $this->receiveLocation($postObj);
        //             break;
        //         case "voice":
        //             $result = $this->receiveVoice($postObj);
        //             break;
        //          case "video":
        //             $result = $this->receiveVideo($postObj);
        //             break;
        //         case "link":
        //             $result = $this->receiveLink($postObj);
        //             break;
        //         default:
        //             $result = "unknown msg type: ".$RX_TYPE;
        //              break;
        //     }
        //     $this->logger("T \r\n".$result);
            echo 'result';
        // }else {
        //     echo "";
        //     exit;
        // }
    }


}

?>