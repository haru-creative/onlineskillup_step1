<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
  </head>
  <body>
    <?php
      if($_POST["name"] && $_POST["comment"]){
        $comment = htmlspecialchars($_POST["comment"]);
        $name = htmlspecialchars($_POST["name"]);
        print ("${name}さん！あなたは今、「 ${comment} 」。こう思っていますね？");
      } elseif($_POST["name"] == "" && $_POST["comment"] == ""){
        echo "帰ってください";
      } elseif($_POST["name"] == ""){
        echo "名前を入力してください";
      } elseif ($_POST["comment"] == "") {
        echo "コメントを入力してください";
      }
    ?>
  </body>
</html>
