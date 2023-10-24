<?php include 'header.html';?>
<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $category = $_POST['category'];
    $file = $_POST['file'];  
    $appeal_type = $_POST['appeal_type'];
?>

    <section class="support" style="display: block; text-align: center">
            <?php 
                
                echo '<div> Здравствуйте, '.$name.'</div>'; 
                if ($category == '1'){ 
                    echo '<div>Спасибо за ваше предложение:</div>';
                    echo '<textarea>'.$message.'</textarea>';
                }else{
                    echo '<div>Мы рассмотрим Вашу жалобу:</div>';
                    echo '<textarea>'.$message.'</textarea>';
                }
            ?>
            <?php
                $file;
                if (isset($file) & $file != '') 
                echo 'Вы приложили следующий файл: '.$file;
            ?>
            <?php

                $name_str = "";
                $email_str = "";
                $appeal_type_str = "";
                $message_str = "";

                if ($name != ""){
                    $name_str = "name=".$name;
                }
                if ($email != ""){
                    $email_str = "email=".$email;
                }
                if ($appeal_type != ""){
                    $appeal_type_str = "appeal_type=".$appeal_type;
                }
                if ($message != ""){
                    $message_str = "message=".$message;
                }


                echo '<a 
                        class="btn" href="/index.php?'.$name_str.'&'.$email_str.'&'.$appeal_type_str.'&'.$message_str.'">
                        Заполнить снова
                    </a>';
            ?>  
    </section>
</body>
</html>