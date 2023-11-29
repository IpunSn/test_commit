<?php
require '../model/conn.php';

if (isset($_POST['usrname']) && isset($_POST['pass'])) {
    $usr = $_POST['usrname'];
    $pwd = $_POST['pass'];
    $passmh = password_hash($pwd, PASSWORD_DEFAULT);
}
    // Thực hiện truy vấn để lấy thông tin người dùng từ CSDL
    $stmt = $conn->prepare("SELECT * FROM userlog WHERE usrname = :u");
    $stmt->execute([":u" => $usr]);
    $user = $stmt->fetch();

    if ($user) {
        // Kiểm tra mật khẩu
        if (password_verify($pwd, $user['pass'])) {
            // Kiểm tra giá trị isAdmin
            if ($user['isAdmin'] == 1) {
                header("Location: ../view/admin.php");
                exit;
            }
        } else {
            echo 'Bạn đã nhập sai mật khẩu';
        }
    } else {
        echo 'Bạn đã nhập sai tài khoản';
    }
$conn->close();

?>