<?php
class UserController extends BaseController {



	//登录注册
	function actionLogin(){
       
       	$user = new RankUser();
       	//获取openid参数
       	$user_openid = $_GET["user_openid"];
 	   	//查询是否存在本用户
	   	$this->findone = $user->find(array("user_openid"=>$user_openid));

		if (count($this->findone) > 1) {
			
			//更新
			// $this->result =
			$user->update(array(
				"user_openid"=>$user_openid // 条件
			), array(
				"user_name" 	=> "user".mt_rand(2,100), 
				'user_logo'     => "logo.png", 
				'user_email'    => "email@email.com", 
				'user_phone'    => "123123123123",
			));
		}else{
			
			//*******************************************//
			//                  新建用户
			//*******************************************//
			$data = array(
				"user_name" 	=> "user".mt_rand(2,100),
				'user_openid'   => "asdfasdfasdf",
				'user_logo'     => "logo.png", 
				'user_email'    => "email@email.com", 
				'user_phone'    => "123123123123",
			); 
			// create返回的是最新插入的自增主键的值
			$this->newid = $user->create($data);

			//*******************************************//
			//  		新建一个空白分数      
			//*****************************************//
			$score = new RankScore(); 
			$app_id 		= $_GET["app_id"];
			$score_score    = $_GET["score_score"];
			$scoredata = array(
				"score_score" 	=> $score_score ,
				'user_openid'   => $user_openid,
				'app_id'     => $app_id, 
			); 
			$score->create($scoredata);
		}
		
	} 	

	
}