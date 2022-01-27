<?php
include("connectdatabase.php");
// dùng để truy vấn dât từ mysql lên với trạng thái là bán mới và tìm trong trong bản ghi từ 0-6
$sql = "Select * from tbltruyen LIMIT 5,5" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    ?>
<div class="card bg-dark text-white view overlay zoom" style="height: 300px;">
    <img class="card-img-top" src="<?php echo ($row['linkImg']);?>" alt="" style="height: 100%;">
    <div class="card-img-overlay">
        <h5 class="card-title"><?php echo($row['title']);?></h5>
        <h6 class="card-subtitle mb-1 text-muted"><?php echo ($row['subtile']);?></h6>
        <p class="card-text"><?php echo($row['style']);?></p>
        <div style="border: 1px solid pink; width: 20px; border-radius: 3px; background-color: green; float: right;">50
        </div>
    </div>
</div>

<?php
}
}
?>