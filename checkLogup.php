<?php
	//Gọi file connection.php
	require_once("connectdatabase.php");
	session_start();
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btnSub"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
        $password = $_POST["pass"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
        $password = addslashes($password);
		if ($username == "" || $password ==""|| $email ="") {
			echo '<script language="javascript">';
			echo 'var r=confirm("Tài khoản mất khẩu email không được để trống");
			if (r==true)
			{
				location.replace("login.php");
			}
			else
			{
				location.replace("login.php");
			}';
			echo '</script>';
			
		}else{
			$sql = "INSERT INTO `admin`(`user`, `pass`, `email`) VALUES ('".$username."','".$password."','".$_POST['gmail']."')";
            $query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows!=0) {
                echo '<script language="javascript">';
			echo 'var r=confirm("Đăng lý thất bại!");
			if (r==true)
			{
				location.replace("login.php");
			}
			else
			{
				location.replace("login.php");
			}';
			echo '</script>';
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION["tentaikhoan"] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
				if($_SESSION["linkdangql"]!=''){
					header('Location: '.$_SESSION["linkdangql"]);
				}
                else{
					header('Location: login.php');
				}
			}
		}
	}
?>