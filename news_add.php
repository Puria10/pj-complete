<?php
include("head.php");
?>

<div class="row">
    <p class="col">خبر را وارد کنید</p>
</div>
<form action="news_add_action.php" method="post" enctype="multipart/form-data" class="row m-2">
    <input type="file" class="col-12 col-md card m-1" 
    name="image">

    <input type="text" class="col-12 col-md card m-1" 
    name="title" placeholder="عنوان">

    <input type="text" class="col-12 col-md card m-1" 
    name="text" placeholder="متن خبر">

    <input type="submit" class="col-12 col-md card m-1" 
    value="ذخیره">
</form>

<?php
include("foot.html");
?>