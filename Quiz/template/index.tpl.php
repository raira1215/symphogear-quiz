<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>戦記絶唱シンフォギアクイズ！（~適合者への挑戦~）</title>
  <link rel="stylesheet" href="style.css">
<!-- reset.css ress -->
<link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
<script src="questions.js" ></script>
</head>
<body>
  <div id="main">
    <div class="header-img">
    <header>
  <h1>戦記絶唱シンフォギアクイズ！（~適合者への挑戦~）</h1>
  </header>
  <img src="img.png" alt="" width="200" height="120">
  </div>

  <div class="question">
  <h2>問題一覧</h2>
  </div>
  <div class="anime">
  <div class="series1">
    <div class="series-title series-title-orange">
      <h4>戦記絶唱シンフォギア</h4>
    </div>
    
    <ul>
      <?php foreach($questions as $question): ?>
        <li><a href="question.php?id=<?php echo $question['id']; ?>">問題<?php echo $question['id']; ?></a></li>
        <?php endforeach; ?>
      </ul>
   
   
  </div>
  <div class="series1">
    <div class="series-title series-title-blue">
    <h4>戦記絶唱シンフォギアG</h4>
    </div>
    <ul>
      <?php foreach($questions as $question): ?>
        <li><a href="question.php?id=<?php echo $question['id']; ?>">問題<?php echo $question['id']; ?></a></li>
        <?php endforeach; ?>
     
    </ul>
  </div>
  <div class="series1">
    <div class="series-title series-title-red">
    <h4>戦記絶唱シンフォギアGX</h4>
    </div>
    <ul>
      <?php foreach($questions as $question): ?>
        <li><a href="question.php?id=<?php echo $question['id']; ?>">問題<?php echo $question['id']; ?></a></li>
        <?php endforeach; ?>
     
     
    </ul>
  </div>
  <div class="series1">
    <div class="series-title series-title-silver">
    <h4>戦記絶唱シンフォギアAXZ</h4>
    </div>
    <ul>
      <?php foreach($questions as $question): ?>
        <li><a href="question.php?id=<?php echo $question['id']; ?>">問題<?php echo $question['id']; ?></a></li>
        <?php endforeach; ?>
     
    </ul>
  </div>
  <div class="series1">
    <div class="series-title series-title-green_pink">
    <h4>戦記絶唱シンフォギアXV</h4>
    </div>
    <ul>
      <?php foreach($questions as $question): ?>
        <li><a href="question.php?id=<?php echo $question['id']; ?>">問題<?php echo $question['id']; ?></a></li>
        <?php endforeach; ?>
     
    </ul>
  </div>
  </div>
  </div>
</body>
</html>