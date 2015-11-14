<?php
//微信api测试系统

class WeiXin extends CI_Controller{

	public function __construct(){
        parent::__construct();
    } 

	public function index(){

		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('WeixinToken');
        $res=$this->weixintoken->getToken();
        print_r($res);
           
        $this->load->view('templates/header');
        $this->load->view('weixin_view/mainPage');
        $this->load->view('templates/footer');
	}

}

?>