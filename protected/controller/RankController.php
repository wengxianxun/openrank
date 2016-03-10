<?php
class RankController extends BaseController {
	

	

	//新分数,更新分数表
	function actionNewScore(){

		$score = new RankScore();

		$user_openid 	= $_GET["user_openid"];
		$app_id 		= $_GET["app_id"];
		$score_score    = $_GET["score_score"];

		$score->update(array(
				"user_openid"	=>$user_openid,
				"app_id"		=>$app_id,
			), array(
				"score_score" 	=> $score_score, 
			));

	}

	//请求排行榜界面
	//参数： openid,appid
	function actionShowRankHtml(){

		//查询用户排名
		$score = new RankScore();
	 	$user_openid 	= $_GET["user_openid"];
		$app_id 		= $_GET["app_id"];

		//*********************************************//
		//               查询我的排名
		//*********************************************//
		$sql = "SELECT count(*)
				FROM rank_score 
				WHERE score_score > (SELECT score_score FROM rank_score WHERE user_openid=:useropenid AND app_id = :appid) AND app_id = :appid";

		// $sql = "SELECT * from rank_score WHERE app_id = 12";
		$this->findone = $score->query($sql, array(
			":useropenid" 	=> $user_openid,  
			":appid" 		=> $app_id, 
		));;

		//*********************************************//
		//               查询排行榜列表
		//*********************************************//
		$sql = "SELECT s.score_score,u.user_name,u.user_logo 
				FROM rank_score AS s,rank_user AS u 
				WHERE s.user_openid=u.user_openid AND s.app_id = :appid 
				ORDER BY  s.score_score DESC 
				LIMIT 20";
		$this->findall = $score->query($sql, array(
			":appid" => $app_id, 
		));


		$this->display("Rank_index.html");
	}


	// 查找findAll/find
	function actionFindUser(){
		$user = new RankUser();
		// 先查一条，uid为2的
		// $this->findone = $user->find(array("uid"=>"2"));
		
		// 查全部，用findAll
		// findAll( $conditions=array(), $order=null, $field='*',  $limit=null )
		// findAll参数：$conditions数组形式的条件（同find），$field指定字段（默认是*），
		// $order是排序（如 “uid DESC”）, $limit是限定条数（如“3,5”，第三条开始取五条）
		$this->findall = $user->findAll();
		
		$this->display("Rank_index.html");
	}


	function actionFindScore(){
		$score = new RankScore();
		// 先查一条，uid为2的
		// $this->findone = $user->find(array("uid"=>"2"));
		
		// 查全部，用findAll
		// findAll( $conditions=array(), $order=null, $field='*',  $limit=null )
		// findAll参数：$conditions数组形式的条件（同find），$field指定字段（默认是*），
		// $order是排序（如 “uid DESC”）, $limit是限定条数（如“3,5”，第三条开始取五条）
		$this->findall = $score->findAll();
		
		$this->display("db/find.html");
	}
}