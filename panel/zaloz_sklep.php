<?php
  session_start();
  ob_start();
  include("../db_login.php");
  $id_user = $_SESSION["user_id"];
  $id_category = $_POST["id_category"];
  $name_product = $_POST["name_product"];
  $type = $_POST["type"];
  $version = $_POST["version"];
  $description = $_POST["description"];
  $photo = $_POST["photo"];
  $price_netto = $_POST["price_netto"];
  $price_brutto = $_POST["price_brutto"];
  $percent_vat = $_POST["percent_vat"];
  $id_producents = $_POST["id_producents"];
  $founder = $_SESSION["user_login"];

  mysqli_query($conn1, "INSERT INTO products(id_category, name_product, type, version, description, photo, price_netto, price_brutto, percent_vat, id_producents, founder)
  VALUES ('$id_category', '$name_product', '$type', '$version', '$description', '$photo', '$price_netto', '$price_brutto', '$percent_vat', '$id_producents', '$founder')");
  mysqli_query($conn1, "UPDATE clients SET founder='$name_product' WHERE id_client = '$id_user'");
  $_SESSION["user_owner_shop"] = $name_product;
  mkdir("../sklepy/" . $name_product);
  header("Location: index.php");
  ob_end_flush();
?>
