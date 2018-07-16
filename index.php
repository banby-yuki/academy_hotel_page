<?php
//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}


//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM kadai_table");
// $stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();


//３．データ表示
$view="";
if($status==false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

} else {
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){

      $view .= '<li class="products-item">';
      $view .= '<a href="item.php?id='.$result["id"].'">';
      $view .= '<p class="pruducts-thumb">'.$result["naiyou"].'</p>';
      $view .= '<p class="products-title">'.$result["indate"].'</p>';
      $view .= '<p class="products-price">'.$result["categoly"].'</p>';
      $view .= '</a>';
      $view .= '</li>';

  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="keywords" content=",,,">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>プログラミングができる学習宿泊ホテル</title>
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="wrapper">
		<div class="inner">
			<header id="header">
				<img class="header_logo"  src="img/header/logo.jpg" alt="">
				<div class="">
				   <form class="reserve" action="index.html" method="post">

				   	<input type="button" name="button" value="宿泊予約">

					 </form>
				</div>
				<div class="hd_txt">
					<p>表参道で学習できるプログラミングホテル</p>
				</div>
				<div class="tel_txt">
					<p>TEL : 03-5413-5045</p>
				</div>
					<div class="">
						<ul class="nav">
							<li><a href="">HOME</a></li>
							<li><a href="">ご宿泊</a></li>
							<li><a href=""></a>おすすめプラン</li>
							<li><a href=""></a>施設紹介</li>
							<li><a href=""></a>周辺施設＆観光</li>
							<li><a href=""></a>コンセプト</li>
							<li><a href=""></a>採用情報</li>
							<li><a href=""></a>お問い合わせ</li>
						</ul>
					</div>
			</header>

			<img class="main_img" src="img/mainvisual/main_01.png" alt="">
			<div class="taizai">
				<p class="taizai_txt">ご滞在希望日時</p>

			</div>

			<div class="syousai">
				<form class="" action="index.html" method="post">
			<ul class="detail">
				<li>
					<label for="name">お名前</label>
					<input type="text" name="name" value="">
				</li>
				<li>
					<label for="mail">メールアドレス</label>
					<input type="text" name="email" value="">
				</li>
				<li>
					<label for="man">男性人数</label>
					<select name="man">
						<option value="1人">1人</option>
						<option value="2人">2人</option>
						<option value="3人">3人</option>
						<option value="4人">4人</option>
						<option value="5人">5人</option>
					</select>
				</li>
				<li>
						<label for="woman">女性人数</label>
						<select name="woman">
							<option value="1人">1人</option>
							<option value="2人">2人</option>
							<option value="3人">3人</option>
							<option value="4人">4人</option>
							<option value="5人">5人</option>
					</select>
       </li>
			 <li>
					<a href="#" class="square_btn">お問い合わせ</a>
			</li>
		</ul>
	</form>
	</div>

	<div class="back_img_1">
		<div class="top_main_txt_1">
			<p class="top_main_fz" "white">ようこそプログラミング学習ができるホテルomotesandoへ。</p>
		<div class="top_sub_txt">
			<p class="top_sub_fz" "white">
				せまい、だけど清潔、快適、ネットも使える。<br>
				ホテル運営上のあらゆるムダを省き、業界初、なんとプログラミング未経験者でも大歓迎！<br>
				海外からのバックパッカーや宿泊コストなどを極力切り詰めたいという皆様を応援します<br>
			</p>
		</div>
		</div>
	</div>




	<div class="back_img_2"  >
		<div class= "top_main_txt_1">
		<p class="top_main_fz">Lounge</p>
	  <div class="top_sub_txt">
			<p class="top_sub_fz">
				静かに学びたい方は特別なスペースを。<br>
				訪れてくださったお客様に思いっきり楽しんでいただきたい。<br>
				そんな思いから当ホテル内にLoungeを開設いたしました。<br>
		 </p>
		</div>
		<div class="top_kuwasiku" >
		<div class="kuwasiku" >
			<a class="button" href="#">＞ 詳しく見る</a>
		</div>
		</div>
	</div>
	</div>


	<div class="back_img_3" >
	<div class="top_main_txt_1">
		<p class="top_main_fz" >周辺施設</p>
		<div class="top_sub_txt">
		<p class="top_sub_fz">
			行きたいところへ、思い立てばすぐ。<br>
			当ホテルから表参道周辺、青山、外苑一丁目など様々な場所に簡単にアクセスができます。<br>
			当ホテル周辺の観光箇所や穴場スポットなどご紹介。<br>
		</p>
		</div>
		<div class="top_kuwasiku" "button">
			<div class="kuwasiku">
				<a class="button" href="#">＞ 詳しく見る</a>
			</div>
		</div>
	</div>
	</div>

<div class="plan_wrap00">


	<div class="back_img_4">
		<div class="plan_wrap">

	<div class="txt_center">
			<div class="fz24px">
				<p>おすすめプラン</p>

			</div>
			<img class="z-index" src="img/top/plan_title_bg.png" width="200px" height="20px;"  alt="">
		</div>



		<ul class="planbox_yoko">
			<li>
				<div class="planbox" >
				<div class="txt_center">
					<div class="fz19px">
						<p>カプセルルーム</p>
					</div>
				<div class="fz19px" >
					<p class="pink">女性専用</p>
				</div>
				</div>
			<img  src="img/top/plan_img_01.png" width="300px" height="234px"  alt="">
			</div>
		 </li>

		 <li>
			 <div class="planbox" >
			 <div class="txt_center">
				 <div class="fz19px">
					 <p>カプセルルーム</p>
				 </div>
			 <div class="fz19px" >
				 <p class="blue">男性専用</p>
			 </div>
			 </div>
		 <img  src="img/top/plan_img_02.png" width="300px" height="234px"  alt="">
		 </div>
		</li>

		<li>
			<div class="planbox" >
			<div class="txt_center">
				<div class="fz19px">
					<p>スーペリア カプセルルーム</p>
				</div>
			<div class="fz19px">
				<p class="blue">男性専用</p>
			</div>
			</div>
		<img  src="img/top/plan_img_03.png" width="300px" height="234px"  alt="">
		</div>
	 </li>
</ul>

<div class="back_img_5">
	<div class="whats_new">
		<div class="white" >
			<p>What's new・プログラミングができるできる学習宿泊ホテル</p>
		</div>
		<div>
          <?php echo $view; ?>
        </div>
	</div>
</div>

<div class="back_img_6">



	<ul class="movie_yoko">
		<li><iframe width="465" height="285" src="https://www.youtube.com/embed/BUylvVm2Yug" frameborder="0" allowfullscreen></iframe></li>
		<li><iframe width="465" height="285" src="https://www.youtube.com/embed/HYvS6NQR2YQ" frameborder="0" allowfullscreen></iframe></li>
	</ul>
<div class="mg30">


	<ul class="planbox_yoko" >
		<li class="back_img10">
			<div class="txt_center" "fz24px">
				<p class="white2" >アメニティ</p>
			</div>
		</li>
		<li class="back_img12">
			<div class="txt_center" "fz24px">
				<p class="white2" >お得情報</p>
			</div>
		</li>
		<li class="back_img12">
			<div class="txt_center" "fz24px">
				<p class="white2" >コンセプト</p>
			</div>
		</li>
		<li class="back_img13">
			<div class="txt_center"　"fz24px">
				<p class="white2" >採用情報</p>
			</div>
		</li>
	</ul>
</div>

	<ul class="planbox_yoko2">
		<li class="icon_1"></li>
		<li class="icon_2"></li>
		<li class="icon_3"></li>
	</ul>
</div>

<div class="footer" >
	<div class="mgleft">
		<a href="http://gsacademy.tokyo/"><img src="img/header/logo.jpg" width="175px" height="70px"></a>
	</div>
	<div class="mgleft">


		<div class="white" >
			<p class="fz14px" >株式会社デジタルっぽい株式会社：東京都港区北青山3-5-6 青朋ビル2F</p>
			<p class="fz14px" >Copyright (C) 2017プログラミングができる学習宿泊ホテル. All Rights Reserved.</p>
		</div>
	</div>
</div>











	</div>
</div><!-- end# wrapper -->

	<!-- jquery script -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/common.js"></script>
</body>
</html>
