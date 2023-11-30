<?php

require __DIR__.'/../lib/functions.php';

  $dataList=fetchAll();
  $id =escape($_GET['id'] ?? '');
  $data= fetchById($id);

  if(!$dataList){
    error404();
  }
  $quesions=[];
  foreach ($dataList as $data){
    $quesions[]=generateFormattedData($data);
  }



  $assignData=[
    'questions'=>$quesions,
  ];
  loadTemplate('index',$assignData);