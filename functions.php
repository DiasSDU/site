<?php
if (array_key_exists('selecct', $_POST)) {
  wishlist();
}
if (array_key_exists('selectt1', $_POST)) {
  cartlist();
}
$mysqli = false;
function connectDB()
{
  global $mysqli;
  $mysqli = new mysqli("localhost", "root", "", "users1");
  $mysqli->query("SET NAMES 'utf-8'");
}

function closeDB()
{
  global $mysqli;
  $mysqli->close();
}

function getProduct($limit, $id, $db = null)
{
  global $mysqli;
  global $where;
  connectDB();
  if ($id)
    $where = "WHERE `id` = " . $id;
  $result = $mysqli->query("Select * from `product`$db $where ");
  closeDB();
  if (!$id)
    return resultToArray($result);
  else {
    return $result->fetch_assoc();
  }
}

function Countt($str)
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "users1";
  $con = mysqli_connect($servername, $username, $password, $dbname);

  $sql = "SELECT count(category) AS total FROM product WHERE category='$str'";
  $res = mysqli_query($con, $sql);
  $values = mysqli_fetch_assoc($res);
  $num_rows = $values['total'];
  return $num_rows;
}




function resultToArray($result)
{
  $array = array();
  while (($row = $result->fetch_assoc()) != false)
    $array[] = $row;
  return $array;
}
function cartlist()
{
  $acolor = $_POST['select1'];
  $asize = $_POST['select2'];
  $quantity = $_POST['quantityy'];
  setcartt($asize, $acolor, $quantity);
}
function wishlist()
{
  $acolor = $_POST['select1'];
  $asize = $_POST['select2'];
  $quantity = $_POST['quantityy'];
  setwish($asize, $acolor, $quantity);
}

function setwish($size, $color, $quan)
{
  $ii = explode(" ", $color);
  $id = $ii[0];
  $color = $ii[1];
  $mysql = new mysqli('localhost', 'root', '', 'users1');
  $mysql->query("INSERT INTO `wishlist`(`id`, `quantity`, `colour`,`size`) VALUES ('$id', '$quan', '$color',$size)");
  $mysql->close();
}
function setcartt($size, $color, $quan)
{
  $ii = explode(" ", $color);
  $id = $ii[0];
  $color = $ii[1];
  $mysql = new mysqli('localhost', 'root', '', 'users1');
  $mysql->query("INSERT INTO `cart`(`id`, `quantity`, `colour`,`size`) VALUES ('$id', '$quan', '$color',$size)");
  $mysql->close();
  header('location: /site/cart.php');
}
function getwishes()
{
  global $mysqli;
  global $where;
  connectDB();
  $result = $mysqli->query("Select * from `wishlist`");
  closeDB();
  return resultToArray($result);
}
function getcart()
{
  global $mysqli;
  global $where;
  connectDB();
  $result = $mysqli->query("Select * from `cart`");
  closeDB();
  return resultToArray($result);
}
function setcart($w)
{
  echo $w['id'];
  echo $w['colour'];
  $id = $w['id'];
  $quantity = $w['quantity'];
  $colour = $w['colour'];
  $size = $w['size'];
  $mysql = new mysqli('localhost', 'root', '', 'users1');
  $mysql->query("INSERT INTO `cart`(`id`, `quantity`, `colour`,`size`) VALUES ('$id', '$quantity', '$colour',$size)");
  $mysql->close();
}
