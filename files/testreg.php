<?php
require __DIR__ . '/vendor/autoload.php';
$host = 'localhost';
$user = 'root';
$pass = '12345';
$db = 'magazine';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];



class ShopProduct
{
    private $id;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;
    public $numPages;
    public $playLenght;

    public function __construct($title, $firstName, $mainName, $price, $numPages=0, $playLenght = 0)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->numPages = $numPages;
        $this->playLenght = $playLenght;
    }

    public function getProducer()
    {
        return "$this->producerFirstName"."$this->producerMainName"."$this->price";
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }

    public function setID($id)
    {
        $this->id = $id;
    }

    public static function getInstance($id, PDO $pdo)
    {
        $stmt = $pdo->prepare("select * from products where id=?");
        $result = $stmt->execute(array($id));
        $row = $stmt->fetch();
        if (empty($row)) {return null;}
        if ($row['type'] === "book")
        {
            $product = new BookProduct($row['title'],$row['firstname'],$row['mainname'],$row['price'],$row['numpages']);
        } elseif ($row['type'] === "cd") {
            $product = new BookProduct($row['title'],$row['firstname'],$row['mainname'],$row['price'],$row['playlenth']);
        }
        $product->setID($row['id']);
        return $product;
    }
}

class CDProduct extends ShopProduct
{
    public function getPlayLenght()
    {
        return $this->playLenght;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": Время звучания - {$this->playLenght}";
        return $base;
    }
}

class BookProduct extends ShopProduct
{
    public function getNumberOfPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": {$this->numPages} стр.";
        return $base;
    }
}

class ProductWriter
{
    public $products = [];
    public function AddProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    public function write()
    {
        $str = "";
        foreach ($this->products as $shopProduct)
        {

            $str .= "{$shopProduct->title} ";
            $str .= "{$shopProduct->price}";
        }
        print $str;
    }
}
$pdo = new PDO($dsn,$user,$pass,$options);
$obj = ShopProduct::getInstance(3,$pdo);
var_dump($obj);

