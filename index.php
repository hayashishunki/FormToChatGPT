<!DOCTYPE html>
<html>
<head>
<title>ChatGPT API</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/chatapi.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<header>
<h1>ChatGPT API</h1>
</header>

<section>
<form autocomplete="off" method="post" onsubmit=return validateForm()>
<label for="message">質問を入力してね:</label><br>
<input type="text" id="message" name="message" required>
<input type="submit" value="入力内容を送信" onclick="showLoadingAnimation()"><br>
<a href="php/reset.php">会話をリセット</a>
</form>

<div id="loading">
<img src="img/loading.gif" alt="Loading..." /> 回答を考えています..
</div>

<div id="chat-history"></div>
</section>
</body>
</html>