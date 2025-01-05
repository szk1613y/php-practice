<?php
// Q1 変数と文字列
$name = '鈴木';
echo '私の名前は「' .$name .'」です。';

// Q2 四則演算
$num = 5 * 4;

echo $num;
echo "\n";
echo $num / 2;

// Q3 日付操作
echo '現在時刻は、'. date('Y年m月d日 H時i分s秒'). 'です。';

// Q4 条件分岐-1 if文
$device = 'windows';
if ($device === 'windows' || $device === 'mac'){
    if ($device === 'windows'){
        echo '使用OSは、windowsです。';
    }
    if ($device === 'mac'){
        echo '使用OSは、macです。';
    }
}
else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 20;
$message = ($age > 18) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列
$kantoregion = ['東京都', '神奈川県', '栃木県', '千葉県', '茨城県', '群馬県', '埼玉県'];

echo $kantoregion[2] . 'と' . $kantoregion[3] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$regioncapital = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach ($regioncapital as $capital){
  echo $capital. "\n";
}

// Q8 連想配列-2
$nyuryoku = '埼玉県';

foreach ($regioncapital as $region => $capital){
    if ($region === $nyuryoku){
        echo $region. 'の県庁所在地は、'. $capital. 'です。';
        break;
    }
}

// Q9 連想配列-3
$regioncapital += ['愛知県' => '名古屋市', '大阪府' => '大阪市'];
$kanto_list = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach ($regioncapital as $reg => $cap){
    foreach ($kanto_list as $kreg => $kcap){
        
        if ($reg === $kreg){
            echo $reg. 'の県庁所在地は、'. $cap. 'です。'. "\n";
            break;
        }
    }
}

$regioncapital_diff = array_diff($regioncapital, $kanto_list);

foreach ($regioncapital_diff as $reg_diff => $cap_diff){
    echo $reg_diff. 'は関東地方ではありません。'. "\n";
}


// Q10 関数-1
function hello($name)
{
    echo $name. 'さん、こんにちは。';
}

hello('金谷');
echo "\n";
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price)
{
    return $price * 1.1;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price. '円の商品の税込価格は'. $taxInPrice. '円です。';

// Q12 関数とif文
function distinguishNum($num)
{
    if ($num % 2){
        return $num.'は奇数です。';
    } else
        return $num.'は偶数です。';
}

$num = 11;
echo distinguishNum($num);
echo "\n";
$num = 24;
echo distinguishNum($num);

// Q13 関数とswitch文
function evaluateGrade($grade)
{
    switch ($grade) {
        case 'A' :
        case 'B' :
            return '合格です。';
            break;

        case 'C':
            return '合格ですが追加課題があります。';
            break;
            
        case 'D':
            return '不合格です。';
            break;
            
        default:
            return '判定不明です。講師に問い合わせてください。';
            break;
    }
}

$grade = 'B';
echo evaluateGrade($grade);
echo "\n";
$grade = 'null';
echo evaluateGrade($grade);


?>