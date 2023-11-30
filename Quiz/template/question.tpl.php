<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問題<?php echo $id; ?> | 戦記絶唱シンフォギアクイズ！（~適合者への挑戦~） </title>
  <link rel="stylesheet" href="style.css">
<!-- reset.css ress -->
<link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
<script src="questions.js" defer></script>
</head>
<body>
  <div id="main">
      <div class="header-img">
        <header>
          <h1>戦記絶唱シンフォギアクイズ！（~適合者への挑戦~）</h1>
        </header>
        <img src="img.png" alt="" width="200" height="120">
      </div>
<section>
    <h2>問題<?php echo $id; ?></h2>
    <p>
     <?php echo $question; ?>
    </p>
    </section>
    <section>
  <h3>選択肢</h3>
  <ol class="answers" data-id="<?php echo $id; ?>">
  <?php foreach($answers as $key =>$value): ?>
 <li data-answer="<?php echo $key; ?>"><?php echo $value; ?></li>
 <?php endforeach; ?>
    
  </ol>
  </section>

  <section id="section-correct-answer">
  <h2 >答え</h2>
  <p><span id="correct-answer"></span><br>
  <span id="explanation"></span>
  </section>
  <sction>
    <div class="back">
<a href="index.php">戻る</a>
</div>
  </sction>

</div>
</body>
</html>

