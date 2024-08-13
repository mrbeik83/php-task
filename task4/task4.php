<?php
    // $myfile = fopen("test.txt","r");
    // echo fread($myfile,100);
    // fclose($myfile);
    // echo "<hr>";
    // modes fopen r,w,a,x,r+,w+,a+,x+
    $myfile1 = fopen("test1.txt","w");
    fwrite($myfile1,"salam khoroos/n");
    echo fread($myfile1,100);
    fclose($myfile1);

    
    
    

?>