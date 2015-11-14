<?php
//循环接收微信消息
class WeiXinMessage extends CI_Controller{

	public function __construct(){
        parent::__construct();
    } 

	public function index(){

        $this->load->helper('url');
        $this->load->library('WeixinToken');
        if($this->input->raw_input_stream){
            echo $this->input->raw_input_stream;
            print_r($this->input->raw_input_stream);
            // $this->weixintoken->responseMsg();
            exit;
        }
        if(isset($_GET["echostr"])){
            $echoStr = $_GET["echostr"];
            echo $echoStr;
            exit;
        }
    
           
        $this->load->view('templates/header');
        $this->load->view('weixin_view/mainPage');
        $this->load->view('templates/footer');
	}

}

?>