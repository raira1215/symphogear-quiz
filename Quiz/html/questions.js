const answersList = document.querySelectorAll('ol.answers li');

answersList.forEach(li => li.addEventListener('click',checkClickedAnswer))

function checkClickedAnswer(event) {
  // addEventListenerによって反応した要素(この実装ではli要素)
  const clickedAnswerElement = event.currentTarget;
  // 選択した答え(A,B,C,D)
  const selectedAnswer = clickedAnswerElement.dataset.answer;

  // 親要素のolから、data-idの値を取得
  const questionId = clickedAnswerElement.closest('ol.answers').dataset.id;

  //フォームデータの入れ物を作る
  const formData = new FormData();
  // 送信したい値を追加
  formData.append('id', questionId);
  formData.append('selectedAnswer', selectedAnswer);

  // xhr = XMLHttpRequestの頭文字です
  const xhr = new XMLHttpRequest();

  // HTTPメソッドをPOSTに指定、送信するURLを指定
  xhr.open('POST', 'answer.php');

  // フォームデータを送信
  xhr.send(formData);

  //loadendはリクエストが完了した時にイベントが発生する
  xhr.addEventListener('loadend', function (event) {

    /**@type {XMLHttpRequest} */
    const xhr = event.currentTarget;
    //リクエストが成功したかステータスコードを確認
    if (xhr.status === 200) {
      const response = JSON.parse(xhr.response);
      //答えが正しいか判定
      const result = response.result;
      const correctAnswer = response.correctAnswer;
      const correctAnswerValue = response.correctAnswerValue;
      const explanation = response.explanation;
      //画面表示
      displayResult(result, correctAnswer, correctAnswerValue, explanation);
    } else {
      //エラー
      alert('Error: 回答データの取得に失敗しました。')
    }
  });
  
}
  

function displayResult(result, correctAnswer,correctAnswerValue,explanation) {
  // メッセージを入れる変数を用意
  let message;
  // カラーコードを入れる変数を用意
  let answerColorCode;



  //答えが正しいか判定
  if (result) {
    //正しい答えだった時
    message = '正解です！！おめでとう！';
    answerColorCode = 'black';
  } else {
    //間違った答えだった時
    message = '残念！不正解です！';
    answerColorCode = 'red';
  }
  alert(message);
  //正解の内容をHTMLに組み込む
  document.querySelector('span#correct-answer').innerHTML = correctAnswer+'. '+correctAnswerValue;
  document.querySelector('span#explanation').innerHTML = explanation;




  //間違っていた時だけ、色を変更
  document.querySelector('span#correct-answer').style.color = answerColorCode;
  //全体を表示
  document.querySelector('#section-correct-answer').style.display = 'block';
}
