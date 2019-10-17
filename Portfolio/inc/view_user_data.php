



<!DOCTYPE html>
<!--[if lte IE 6]><html dir="ltr"lang="ko-KR" class="type_main ie6 lte-ie9 lte-ie8 lte-ie7 lte-ie6"><![endif]-->
<!--[if lte IE 7]><html dir="ltr"lang="ko-KR" class="type_main ie7 lte-ie9 lte-ie8 lte-ie7"><![endif]-->
<!--[if IE 8]><html dir="ltr"lang="ko-KR" class="type_main ie8 lte-ie9 lte-ie8"><![endif]-->
<!--[if IE 9]><html dir="ltr"lang="ko-KR" class="type_main ie9 lte-ie9"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html dir="ltr" lang="ko-KR" xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
<!-- <html dir="ltr" lang="ko-KR"><![endif] -->
<head>
	<meta http-equiv="Content-Type" content="text; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<title>User data page</title>
	<meta name="author" content="Kim Dong In" />
	<meta name="description" content="pagePiling.js plugin by Alvaro Trigo." />
	<meta name="keywords"  content="user data page" />
	<meta name="Resource-type" content="Document" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes, target-densitydpi=medium-dpi" />

	<link rel="stylesheet" type="text/css" href="/commons/css/commons.css" />
</head>
<body>
    <div class="con_center back_table">
        <table style="width:100%;">
            <colgroup>
                <col width="10%">
                <col width="10%">
                <col width="10%">
                <col width="60%">
                <col width="10%">
            </colgroup>
            <thead>
                <tr>
                    <th>이름</th>
                    <th>이메일</th>
                    <th>휴대폰 번호</th>
                    <th>메세지</th>
                    <th>날짜</th>
                </tr>
            </thead>
            <tbody>
            <?
                include 'db_cunnect.php';
                //test
                $sql = "SELECT * FROM `user_request_list` WHERE 1";
                if ($result = mysqli_query($connect,$sql)){
                    while($row = mysqli_fetch_array($result)){
                        echo '<tr>';
                        echo '<td>'.$row['user_name'].'</td>';
                        echo '<td>'.$row['user_mail'].'</td>';
                        echo '<td>'.$row['user_phone_number'].'</td>';
                        echo '<td>'.$row['user_message'].'</td>';
                        echo '<td>'.$row['upload_date'].'</td>';
                        echo '</tr>';
                    }
                    mysqli_close($connect);

                }else {
                    echo '아 테이블 생성 실패 잖아' , mysqli_error($connect);
                }
            ?>
            </tbody>
        </table>
    </div>
</body>