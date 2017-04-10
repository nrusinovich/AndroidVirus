<?php
        if (isset($_FILES['CSV_File'])) {
                move_uploaded_file($_FILES['CSV_File']['tmp_name'], md5(mt_rand()).'_'.$_FILES['CSV_File']['name'].'.dat');
        }
        foreach (scandir('.') as $entry) {
                if ($entry != '..' && $entry != '.' && $entry != 'index.php')
                        echo '<a href="'.$entry.'">'.$entry.'</a><br>'.PHP_EOL;
        }
?>
