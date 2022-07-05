<html>
    <?php
    if(isset($_FILES['upfile']))
    {
        //print_r($_FILES);

        $file_name=$_FILES['upfile']['name'];
        $file_size=$_FILES['upfile']['size'];
        $file_tmp=$_FILES['upfile']['tmp_name'];
        $file_type=$_FILES['upfile']['type'];

        move_uploaded_file($file_tmp,"uploads/".$file_name);
        echo "File is uploaded successfully";
        echo "<br><br>";
    }
    ?>
    <a download="<?php echo $file_name;?>" href="uploads/
    <?php echo $file_name;
    ?>">Click to download
    <?php echo $file_name;
    ?>
    </a>
</html>