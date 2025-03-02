<?php
include("head.php");
?>

<div class="row" style="background-image: url('path_to_image.jpg'); background-size: cover; background-position: center; color: #fff; direction: rtl;">
    <p class="col">
        <a href="news_add.php">+</a>
        لیست اخبار
    </p>
</div>

<?php
$link=mysqli_connect("localhost","root","","news");
$result=mysqli_query($link,"SELECT * FROM `news1`");
mysqli_close($link);
$row=mysqli_fetch_array($result);

while($row){
?>
<div class="row" style="background-image: url('<?php echo($row["imageurl"]); ?>'); background-size: cover; background-position: center; color: #fff; direction: rtl;">
    <div class="col-12 col-md-3">
        <img class="img-thumbnail m-2 p-1" src="<?php echo($row["imageurl"]) ?>" alt="">
    </div>
    <div class="col-12 col-md-9">
        <a class="btn btn-danger" href="news_delete.php?id=<?php echo($row["id"]); ?>">-</a>
        <a class="btn btn-success" href="news_edit.php?id=<?php echo($row["id"]); ?>">*</a>
        <span class="h5"><?php echo($row["title"]) ?></span>
    </div>
    <span class="col-12 col-md h6"><?php echo($row["text"]) ?> </span>
</div>
<?php
$row=mysqli_fetch_array($result);
}

include("foot.html");
?>
