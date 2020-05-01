<?php
# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
	$names[] = "斎藤";
	print_r($names);

echo PHP_EOL;

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載
	$array = [];
	$array = array_merge($array1, $array2);
	print_r($array);

echo PHP_EOL;

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

  # 以下に回答を記載
	$array = [];
	$array = array_count_values($numbers);
	printf('$numbersの中に"3"は%dつあります',$array[3]);

echo PHP_EOL;

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載
	foreach ($sports as $key => $value) {
		if($value === null){
			unset($sports[$key]);
		}
	}
	$sports = array_values($sports);
	print_r($sports);

echo PHP_EOL;

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載
	if(is_array($array1) && count($array1) === 0){
		echo 'true';
	}else{
		echo 'false';
	}

	echo PHP_EOL;

	if(is_array($array2) && count($array2) === 0){
		echo 'true';
	}else{
		echo 'false';
	}


echo PHP_EOL;

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

  # 以下に回答を記載
	foreach ($numbers1 as $key => $value) {
		$numbers1[$key] = $value * 10;
	}
	print_r($numbers1);

echo PHP_EOL;

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

  # 以下に回答を記載
	foreach ($array as $key => $value) {
		$array[$key] = (int)$value;
	}
	print_r($array);

echo PHP_EOL;

print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];

  # 以下に回答を記載
	$upper_case_programming_languages = [];
	foreach ($programming_languages as $key => $value) {
		$programming_languages[$key] = ucfirst($value);
		$upper_case_programming_languages[$key] = mb_strtoupper($value);
	}


  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
	$count = 0;
	$array = [];
	foreach ($names as $value) {
		$count++;
		$array[] = sprintf('会員No.%d %s',$count,$value);
	}
	print_r($array);

echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

  # 以下に回答を記載
	foreach ($foods as $value) {
		if(preg_match("/うに/", $value) === 1){
			printf('%sは好物です',$value);
			echo PHP_EOL;
		}else {
			printf('%sはまぁまぁ好きです',$value);
			echo PHP_EOL;
		}
	}

echo PHP_EOL;

print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載
	echo "ユーザーの趣味一覧".PHP_EOL;

	$count = 0;
	$array = [];
	foreach ($sports as $value) {
		if(is_array($value)){
			foreach ($value as $val) {
				if(!in_array($val,$array)){
					$array[] = $val;
					$count++;
					printf('No%d %s',$count,$val);
					echo PHP_EOL;
				}
			}
		}else{
			if(!in_array($value,$array)){
				$array[] = $value;
				$count++;
				printf('No%d %s',$count,$value);
				echo PHP_EOL;
			}
		}
	}

echo PHP_EOL;

print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

  # 以下に回答を記載
	$array = [];
	$array = array_column($data,"name");
	foreach ($array as $value) {
		echo $value;
	}

echo PHP_EOL;

print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

  # 以下に回答を記載
	foreach ($update_data as $key => $value) {
		$user_data[$key] = $value;
	}
	print_r($user_data);

echo PHP_EOL;

print("#####q14#####".PHP_EOL);
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

  # 以下に回答を記載
	$array = [];
	foreach ($data as $key => $value) {
		$array[] = $key;
	}
	print_r($array);

echo PHP_EOL;

print("#####q15#####".PHP_EOL);
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

  # 以下に回答を記載
	if(array_key_exists("age",$data1)){
		echo 'OK';
	}else{
		echo 'NG';
	}

	echo PHP_EOL;

	if(array_key_exists("age",$data2)){
		echo 'OK';
	}else{
		echo 'NG';
	}

echo PHP_EOL;

print("#####q16#####".PHP_EOL);
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

  # 以下に回答を記載
	foreach ($users as $value) {
		printf('私の名前は%sです。年齢は%d歳です。',$value['name'],$value['age']);
		echo PHP_EOL;
	}

echo PHP_EOL;

print("#####q17#####".PHP_EOL);
class User
{

  # コードを追加

}

$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");

//$user1->info();
print("-------------".PHP_EOL);
//$user2->info();

echo PHP_EOL;

print("#####q18#####".PHP_EOL);

  # コードを追加

//$man1 = new Man("あじー",32);
//$man2 = new Man("ゆたぼん",10);

//$man1->introduce();
//$man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい

  protected $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
//print($book->name.PHP_EOL);

echo PHP_EOL;

print("#####q20#####".PHP_EOL);
class Human
{

  # コードを追加

}

class Zoo
{

  # コードを追加

}

$zoo = new Zoo("旭山動物園",[ "infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま",3);
$human2 = new Human("ゆたぼん",10);
$human3 = new Human("あじー",32);
$human4 = new Human("ぎん",108);

$humans = [ $human1, $human2, $human3, $human4 ];

foreach($humans as $human){
//  $zoo->info_entry_fee($human);
}

echo PHP_EOL;
?>
