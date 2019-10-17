<?
    $user_name = $_POST["user_name"];
    $user_mail = $_POST["user_mail"];
    $user_phone_number = $_POST["user_phone"];
    $user_message = $_POST["user_message"];
    $upload_date = date("Y-m-d");


    include 'db_cunnect.php';
    mysqli_query($connect,"INSERT INTO user_request_list (user_name, user_mail, user_phone_number, user_message, upload_date) VALUES ('$user_name','$user_mail','$user_phone_number','$user_message','$upload_date')");

    $prevPage = $_SERVER['HTTP_REFERER'];
    // 변수에 이전페이지 정보를 저장

    header('location:'.$prevPage);
    // 페이지 이동
?>