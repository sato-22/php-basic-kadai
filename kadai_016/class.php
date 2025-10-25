<?php
// Step2. クラスを作成する

// Foodクラスの定義
class Food {
    public $name;
    public $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceプロパティの値を出力するメソッド
    public function show_price() {
        echo "{$this->price} <br>";
    }
}

// Animalクラスの定義
class Animal {
    public $name;
    public $height;
    public $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightプロパティの値を出力するメソッド
    public function show_height() {
        echo "{$this->height} <br>";
    }
}


// Step3. インスタンスを作成し、出力する

// Foodクラスのインスタンスを作成
$apple = new Food("potato", 250);
// Animalクラスのインスタンスを作成
$dog = new Animal("dog", 60, 5000);

// インスタンスを出力（中身の確認）
print_r($apple);
echo "<br>";
print_r($dog);
echo "<br><br>";


// Step4. メソッドへアクセスする
$apple->show_price();
$dog->show_height();
?>
