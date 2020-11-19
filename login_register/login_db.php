<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $query);
            $q = mysqli_query($conn, $query); //ดึงข้อมูลตาราง
            $check_query = mysqli_fetch_assoc($q);//เช็คข้อมูล

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "ล็อกอินสำเร็จ";
                $_SESSION['status'] = $check_query['status'];
                if ($_SESSION['status'] == 'user'){
                    header("location: index1.php");
                }
                if ($_SESSION['status'] == 'admin'){
                    header("location: index.php");
                }
            } else {
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = " Username หรือ Password ผิด!";
                header("location: login.php");
            }
        } else {
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "กรุณากรอกข้อมูลให้ครบ!";
            header("location: login.php");
        }
    }

?>
