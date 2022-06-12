<?php
include 'uplaod.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload</title>
    <meta> charset=utf-8">
    link rel="stylesheet" href="css/style.css">
    <head>
    <body>
        <div class="container">
            <?php if(!empty($statusMsg)){ ?>
                <p class="status-msg"><?php echo $statusMsg; ?></p>
            <?php } ?>
            <form action="" method="post" enctype="multipart/form-data">
                select Image to Upload:
                <input type="file" name="file">
                <input type="submit" name="submit" value="Upload">
            </form>
        </div>

        <div class="gallery">
            <div class="gcon">
                <h2>Uploaded Image</h2>
                <?php
                include 'dbconfig.php';
                $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");
                if($query->num_rows > 0){
                    while($row = $query->fetch_assoc()){
                        $imageURL = 'uploads/'.$row["file_name"];
                ?>
                    <img src="<?php echo $imageURL; ?>" alt="" />
                <?php }
                }else{
                    ?>
                    <p>No image(s) found...</p>
                    <?php
                }
                ?>
            </div>
    </head>