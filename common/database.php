<?php

/**
 * PDOを使ってデータベースに接続する
 * (PHP DATA OBJECTの略)
 * ＠return PDO
 */

 function getDatabaseConnection(){
   try
   {
     $database_handler = new PDO('mysql:host=db;dbname=simple_memo;charset=utf8mb4','root','password');
   }
   catch (PDOException $e)
   {
     echo "DBに接続失敗しました。<br />";
     echo $e->getMessage();
     exit;
   }
   return $database_handler;
 }

