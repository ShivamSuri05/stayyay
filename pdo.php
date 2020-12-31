<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=pg','admin','default');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
