

<?php
    //인코딩
    header('Content-Type: text/html; charset=utf-8');

    $mysql_hostname = 'localhost';
    $mysql_username = 'kdiwebpublisher';
    $mysql_password = 'kdi3284!!';
    $mysql_database = 'kdiwebpublisher';
    $mysql_port = '2022';
    $mysql_charset = 'urf8';

    // DB 연결
    $connect = mysqli_connect(
        $mysql_hostname,
        $mysql_username,
        $mysql_password,
        $mysql_database
    );

    if(!$connect){
        echo '[fail] : '.mysql_error().''; 
        die('MySQL sever not connect');
    } else {
        echo '<script>console.log("success")</script>';
    }
?>

