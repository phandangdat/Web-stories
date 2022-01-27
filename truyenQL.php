<?php
    include_once("connectdatabase.php");
    if(isset($_GET["task"]) && $_GET["task"] == "delete")
    {   
        //echo "mã danh mục là ". $_GET["id"];
        $sql_delete = "Delete FROM tbltruyen where id = ". $_GET["id"];
        if(mysqli_query($conn,$sql_delete))
        {
            echo "Xóa dữ liệu thành công ";
        }
        else
        {
            echo "Xóa dữ liệu thất bại" . mysqli_error($conn);
        }
    }

    if(isset($_POST["btn_update"]))
    {
        $sql_update = "UPDATE tbltruyen SET title = N'".$_POST['Name']."', subtile = N'".$_POST['subtile']."',style ='".$_POST['style']."', linkImg='".$_POST['linkImg']."' WHERE id='".$_POST['ma_id']."';";
        if(mysqli_query($conn,$sql_update))
        {
            echo "cập nhât dữ liệu thành công";
            header('Location:truyenQL.php');
        }
        else
        {
            echo "cập nhất thất bại" . mysqli_error($conn);
        }
    }
    if(isset($_POST["submit"])){
        //khởi tạo biến sql insert data
        $sql_insert = "INSERT INTO tbltruyen(title, subtile, style, linkImg) VALUES ('".$_POST['title']."', '".$_POST['subtile']."','".$_POST['style']."','img/".$_POST["file"]."');";
        //kiêm tra insert có thanh công hay không
        
        if(mysqli_query($conn,$sql_insert))
        {
            echo "thêm mới dữ liệu thành công";
            
            //điều hướng trang web tranhs lặp insert data khi f5
            header('Location:truyenQL.php');
        }
        else
        {
            echo "không thêm mới thành công" . mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Truyện</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/uploadfile.js"></script>
</head>

<body>

    <h2 style="text-align:center; color:red" id="Title">Quản Lý Thông Tin Truyện</h2>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" id="btnadd" data-target="#exampleModal">Thêm
        Truyện</button>

    <table class="table">
        <!--tạo tiêu đề cho bảng-->
        <tr>
            <th>Id Truyện</th>
            <th>Tên Tác Giả</th>
            <th>Tên Truyện</th>
            <th>Thể loại</th>
            <th>Link ảnh</th>


        </tr>
        <?php
            $sql_select = "select * from tbltruyen";
            if ($ketqua= $conn -> query($sql_select))
            {
                while ($row = mysqli_fetch_assoc($ketqua))
                {   
                    
                    if(isset($_GET["t"]) && $_GET["t"]=="update")
                    {

                        if($_GET["ma"]== $row["id"])
                        {   
                            echo "<tr><form action='truyenQL.php' method='post'>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td><input size='10'type='text' name='Name' value='".$row["title"]."'></td>";
                            echo "<td><input size='10'type='text' name='subtile' value='".$row["subtile"]."'></td>";
                            echo "<td><input size='10'type='text' name='linkImg' value='".$row["linkImg"]."'></td>";
                            echo "<td><input size='10'type='text' name='style' value='".$row["style"]."'></td>";
                            echo "<input name='ma_id' type='hidden' value='".$row["id"]."'>";
                            echo "<td>";
                            echo "<input type = 'submit' name = 'btn_update' value = 'Cập nhật' class='btn btn-primary'>";
                            echo "</td>";
                            echo "</form></tr>";
                        }
                    }
                    else
                    {
                            echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["title"]."</td>";
                            echo "<td>".$row["style"]."</td>";
                            echo "<td>".$row["subtile"]."</td>";
                            echo "<td>".$row["linkImg"]."</td>";
                            echo "<td>";
                            echo "<a href='truyenQL.php?t=update&ma=".$row["id"]."' class='btn btn-warning'>Cập nhật</a>";
                            echo "<a href='truyenQL.php?task=delete&id=".$row["id"]."' class='btn btn-danger'> Xóa </a>";
                            echo "</td>";
                            echo "</tr>";

                    }
                    
                }
            }
            else
            {   
                
                echo "Bảng không có dữ liệu";
            }   
            mysqli_close($conn);
            
        ?>

    </table>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form">
                        <form action="truyenQL.php" id="contact" method="post">
                            <table>
                                <tr>
                                    <td>Nhập tên truyện</td>
                                    <td><input type="text" class="form-control" placeholder="Nhập tên sách"
                                            required="" id="name" name="title"></td>
                                </tr>


                                <tr>
                                    <td>Nhập Tên Tác Giả</td>
                                    <td><input type="text" class="form-control" placeholder="Nhập tên tác giả" required=""
                                            id="price" name="subtile"></td>
                                </tr>

                                <tr>
                                    <td>Nhập thể loại</td>
                                    <td><input type="text" class="form-control" placeholder="Nhập thể loại" required=""
                                            id="status" name="tyle"></td>
                                </tr>
                                <tr>
                                    <td> Link ảnh</td>
                                    <td>
                                        <form action="truyenQL.php" method="POST" enctype="multipart/form-data">

                                            <input type="file" name="file" id="file">
                                            <input type='button' class='btn btn-info' value='Upload' id='btn_upload'>

                                        </form>
                                    </td>

                                </tr>

                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">Thêm
                                    mới</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="js/uploadfile.js"></script>
</body>

</html>