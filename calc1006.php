<?php

if($_POST['left'] != "" && $_POST['right'] != "" ){
  $left = htmlspecialchars($_POST['left'], ENT_QUOTES, 'UTF-8');
  $right = htmlspecialchars($_POST['right'], ENT_QUOTES, 'UTF-8');
  
	if(ctype_digit($left)&&ctype_digit($right)){
	
		  
			switch($_POST['symbol']){
			  case "":
			  $answer='error';
			  echo '<p>エラー4</p>';
			  echo '計算記号を選択してください';
			  echo '<br>';
			  
			  case "＋":
			  $answer=$left+$right;
			  break;
			  
			  case "－":
			  $answer=$left-$right;
			  break;
			  
			  case "×":
			  $answer=$left*$right;
			  break;
			  
			  case "÷":
			  
				if($_POST['right']==0 and $_POST['symbol']=='÷'){
				  $answer='error';
				  echo '<p>エラー3</p>';
				  echo '0以外の数字を入れてください';
				  echo "<br>";
				             
				}else{
				  $answer=$left/$right;
				  
			  }break;
			  default:
			}
			
			 //計算結果を表示
			echo ($left.'    '.$_POST['symbol'].'    '.$right.'    '.'='.'    '.$answer);
			
	}else{
	  if(isset($_POST['symbol'])){
	  
	  if($_POST['symbol']==""){
	  echo '<p>エラー5</p>';
	  echo '計算記号を選択してください';
	  echo '<br>';
	  //var_dump($_POST['symbol']);
	  }
	  }
	  $answer='error';
	  echo '<p>エラー2</p>';
	  echo '数字を入力してください';
	  echo '<br>';
	}
}else{
echo '<p>エラー1</p>';
echo '値を入力してください';
echo '<br>';
return;
}
?>
 