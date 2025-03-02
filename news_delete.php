<?php
include("them-header.php");
$id=$_GET["id"];

$link=mysqli_connect("localhost","root","","news");
$result=mysqli_query($link,"DELETE FROM `news1` WHERE `id`=$id");
mysqli_close($link);

if($result===true){
    ?>
    <script>
        location.replace("news.php");
    </script>
    <?php
    
}else{
    echo("حذف  نشد");
}

?>

<?php
include("them-footer.html");
?>