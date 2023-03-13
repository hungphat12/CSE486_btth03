<?php
    require $_SERVER['DOCUMENT_ROOT'].'/BTTH03/Utils/MyEmailServer.php';
    require $_SERVER['DOCUMENT_ROOT'].'/BTTH03/Utils/EmailSender.php';
   $emailServer = new MyEmailServer();
   $emailSender = new EmailSender($emailServer);
   $emailSender->send("1951060911@e.tlu.edu.vn", "ĐIỂM DANH THỰC HÀNH BUỔI 3", "Phan Hùng Phát_1951060911 xin phép điểm danh thực hành buổi 3.");
?>