<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if (($i % 4 === 0)&&($i % 5 === 0)){
      echo 'tic-tac'. "\n";
      continue;
  }
  if ($i % 5 === 0){
      echo 'tac'. "\n";
      continue;
  }
  if ($i % 4 === 0){
      echo 'tic'. "\n";
      continue;
  }
  echo $i. "\n";
}

// Q2 多次元連想配列
// 問1
echo $personalInfos[1]['name']. 'さんの電話番号は'. $personalInfos[1]['tel']. 'です。';
// 問2
$i = 1;
foreach ($personalInfos as $value){
    echo "$i". '番目の'. $value['name']. 'のメールアドレスは'. $value['mail']. 'で、電話番号は'. $value['tel']. 'です。';
    echo "\n";
    $i++;
}
// 問3
$ageList = [25, 30, 18];
$i = 0;

foreach ($ageList as $val){
    $personalInfos[$i]['age'] = $ageList[$i];
    $i++;
}

// Q3 オブジェクト-1
$yamada = new Student(120, '山田');

echo '学籍番号'. $yamada->studentId. '番の生徒は'. $yamada->studentName. 'です。';

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($work)
    {
        echo $this->studentName. 'は'. $work. 'の授業に参加しました。'. '学籍番号：'. $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// 問1
$q5 = new Datetime();
echo $q5->modify('-1 months')->format('Y-m-d');

// 問2
$date1 = new Datetime();
$date2 = new Datetime('1992-04-25');
$diff = $date1->diff($date2);
echo 'あの日から'. $diff->format('%a'). '日経過しました。';

?>