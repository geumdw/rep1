<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ex1 테스트용 웹사이트</title>
    <link rel="stylesheet" type="text/css" href="css/master.css"/>
  </head>
  <body id="target">
    <header>
      <img id="logo" src="img/logo.png" alt="로고로고" />
      <h1>테스트용 웹사이트입니다.</h1>
    </header>
    <nav>
      <ol>
        <?php
        echo file_get_contents("list.txt");
         ?>
      </ol>
    </nav>

    <div id="backcol">
      <input type="button" value="black" id="black_btn"/>
      <input type="button" value="white" id="white_btn"/>
    </div>

    <article>
      <?php
      if(empty($_GET['id'])==false){
        echo file_get_contents("page/".$_GET['id'].".txt");
      }else{
        echo file_get_contents("page/0.txt");
      }
       ?>
    </article>

    <script src="script.js"></script>

  </body>
</html>
