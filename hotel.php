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
