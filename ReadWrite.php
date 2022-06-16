<?php
if(count($_POST) > 0)
{
    if(isset($_POST["filename"]))
    {
        $fn=$_POST["filename"];
        $fp=fopen($fn. ".txt",'w+');
        fwrite($fp, "I am good<br>");
        fwrite($fp, "I am good<br>"); 
        fwrite($fp, "I am good<br>");
        fwrite($fp, "I am good<br>");
        fwrite($fp, "I am good<br>");
        fclose($fp);
        $fp=fopen($fn. ".txt",'r');
        $content=fread($fp,filesize($fn. ".txt"));
        echo $content;
        fclose($fp);
    }
    else{
        echo "<br> Enter file name first <br>";
    }
}
else
{
    echo "<br>File name is not set<br>";
}

?>