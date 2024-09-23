<?php

if(isset($_POST['add_to_wishlist'])){

   if($user_id == ''){
      header('location:user_login.php');
   }else{

      $pid = $_POST['pid'];
      $pid = filter_var($pid, 513);
      $name = $_POST['name'];
      $name = filter_var($name, 513);
      $price = $_POST['price'];
      $price = filter_var($price, 513);
      $image = $_POST['image'];
      $image = filter_var($image, 513);

      $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
      $check_wishlist_numbers->execute([$name, $user_id]);

      $check_cart_numbers = $conn->prepare("SELECT * FROM `panier` WHERE name = ? AND user_id = ?");
      $check_cart_numbers->execute([$name, $user_id]);

      if($check_wishlist_numbers->rowCount() > 0){
         $message[] = 'already added to wishlist!';
      }elseif($check_cart_numbers->rowCount() > 0){
         $message[] = 'already added to cart!';
      }else{
         $insert_wishlist = $conn->prepare("INSERT INTO `wishlist`(user_id, id_produit, pid, name, price, image) VALUES(?,?,?,?,?,?)");
         $insert_wishlist->execute([$user_id, $pid, $pid, $name, $price, $image]);
         $message[] = 'added to wishlist!';
      }

   }

}

if(isset($_POST['add_to_cart'])){

   if($user_id == ''){
      header('location:user_login.php');
   }else{

      $pid = $_POST['pid'];
      $pid = filter_var($pid, 513);
      $name = $_POST['name'];
      $name = filter_var($name, 513);
      $price = $_POST['price'];
      $price = filter_var($price, 513);
      $image = $_POST['image'];
      $image = filter_var($image, 513);
      $qty = $_POST['qty'];
      $qty = filter_var($qty, 513);

      $check_cart_numbers = $conn->prepare("SELECT * FROM `panier` WHERE name = ? AND user_id = ?");
      $check_cart_numbers->execute([$name, $user_id]);

      if($check_cart_numbers->rowCount() > 0){
         $message[] = 'already added to panier!';
      }else{

         $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
         $check_wishlist_numbers->execute([$name, $user_id]);

         if($check_wishlist_numbers->rowCount() > 0){
            $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE name = ? AND user_id = ?");
            $delete_wishlist->execute([$name, $user_id]);
         }

         $id_produit = $pid;
         $insert_cart = $conn->prepare("INSERT INTO `panier`(user_id,id_produit, pid, name, price, quantity, image) VALUES(?,?,?,?,?,?,?)");
         $insert_cart->execute([$user_id, $id_produit, $pid, $name, $price, $qty, $image]);
         $message[] = 'added to panier!';
         
         
         
      }

   }

}
/*قائمة الرغبات  ---> wishilst */


?>
