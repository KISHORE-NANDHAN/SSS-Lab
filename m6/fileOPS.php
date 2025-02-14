<!-- File Open and Close methods
<?php
    $fp= fopen('sample.txt', 'r');
    while(!feof($fp))
    {
        echo fgetc($fp);
    }
    fclose($fp);
?> -->

<!-- Read 10 Bytes of the file
<?php
    $file = fopen("sample.txt","r");
    $fileContents =fread($file,10);
    echo $fileContents;
    fclose($file);
?> -->

<!-- Read Entire File 
<?php
    $file = fopen("sample.txt","r");
    $fileContents =fread($file,
    filesize("Sample.txt"));
    echo $fileContents;
    fclose($file);
?> -->

<!-- Writing in File
<?php
    $fp = fopen("cse1.txt", "w");
    fwrite($fp, "welcome");
    fwrite($fp, "to CSE 6th SEM SSS Lab");
    fclose($fp);
    echo "File written successfully";
?> -->

<!-- OverWriting and Existing File Content
<?php
    $fp = fopen("cse.txt", "w");
    fwrite($fp, "PHP File HANDLING OPERATIONS");
    fclose($fp);
    echo "File Overwriting successfully";
?> -->

<!-- Appended File Contents
<?php
    $fp = fopen("cse.txt", "a");
    fwrite($fp, " Appended in existing file");
    fclose($fp);
    echo "File Appended successfully";
?> -->

<!-- Renaming a File
<?php
    rename("cse.txt","New_Cse.txt");
    echo "File Rename Successful";
?> -->

<?php
    $status=unlink("cse1.txt");
    if($status)
    {
        echo "File deleted successfully";
    }
    else
    {
        echo "Opps Your File Not Delete !";
    }
?>