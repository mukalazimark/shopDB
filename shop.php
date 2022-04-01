<?php
// declaring variables used 
$itemName=$_POST['itemName'];
$itemId=$_POST['itemId'];
$unitPrice=$_POST['unitPrice'];
$quantity=$_POST['quantity'];

$productId=$_POST['productId'];
$productName=$_POST['productName'];
$stock=$_POST['stock'];
$price=$_POST['price'];

$conn=new mysqli('localhost','root','','shop');
if($conn-> connect_error){
    die('connection failed:'.'$conn->connect_error');
}else{
    $stmt = $conn->prepare("insert into products(ProductId,ProductName,Stock,Price) values(?,?,?,?)");
    $stmt->bind_param("sssi",$productId,$productName,$stock,$price);
    $stmt->excute();
    echo "Record saved......";
    $stmt->close();

    $stmt = $conn->prepare("insert into sell(ItemId,ItemName,UnitPrice,Quantity) values(?,?,?,?)");
    $stmt->bind_param("sssi",$itemId,$itemName,$unitPrice,$quantity);
    $stmt->excute();
    echo "Product saved......";
    $stmt->close();

}
?>