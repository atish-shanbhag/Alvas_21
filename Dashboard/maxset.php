<?php
include('config.php');
if(isset($_POST['setmarks']))
{
    $_1AM=$_POST['1AM'];
    $_1AL=$_POST['1AL'];
    $_1AC=$_POST['1AC'];
    $_1BM=$_POST['1BM'];
    $_1BL=$_POST['1BL'];
    $_1BC=$_POST['1BC'];
    $_1CM=$_POST['1CM'];
    $_1CL=$_POST['1CL'];
    $_1CC=$_POST['1CC'];
    $_2AM=$_POST['2AM'];
    $_2AL=$_POST['2AL'];
    $_2AC=$_POST['2AC'];
    $_2BM=$_POST['2BM'];
    $_2BL=$_POST['2BL'];
    $_2BC=$_POST['2BC'];
    $_2CM=$_POST['2CM'];
    $_2CL=$_POST['2CL'];
    $_2CC=$_POST['2CC'];
     $_3AM=$_POST['3AM'];
    $_3AL=$_POST['3AL'];
    $_3AC=$_POST['3AC'];
     $_3BM=$_POST['3BM'];
    $_3BL=$_POST['3BL'];
    $_3BC=$_POST['3BC'];
     $_3CM=$_POST['3CM'];
    $_3CL=$_POST['3CL'];
    $_3CC=$_POST['3CC'];
    $_4AM=$_POST['4AM'];
    $_4AL=$_POST['4AL'];
    $_4AC=$_POST['4AC'];
    $_4BM=$_POST['4BM'];
    $_4BL=$_POST['4BL'];
    $_4BC=$_POST['4BC'];
    $_4CM=$_POST['4CM'];
    $_4CL=$_POST['4CL'];
    $_4CC=$_POST['4CC'];
    if((is_numeric($_1AM)))
    {
          $T1A=$_1AM;
    }
    else
    {
          $T1A=0;
          $_1AM="NA";
          $_1AL="NA";
        $_1AC="NA";
    }
    if((is_numeric($_1BM)))
    {
          $T1B=$_1BM;
    }
    else
    {
          $T1B=0;
          $_1BM="NA";
        $_1BL="NA";
        $_1BC="NA";
    }
    if((is_numeric($_1CM)))
    {
          $T1C=$_1CM;
    }
    else
    {
          $T1C=0;
          $_1CM="NA";
        $_1CL="NA";
        $_1CC="NA";
    }
    if((is_numeric($_2AM)))
    {
          $T2A=$_2AM;
    }
    else
    {
          $T2A=0;
          $_2AM="NA";
        $_2AL="NA";
        $_2AC="NA";
    }
    if((is_numeric($_2BM)))
    {
          $T2B=$_2BM;
    }
    else
    {
          $T2B=0;
          $_2BM="NA";
        $_2BL="NA";
        $_2BC="NA";
    }
    if((is_numeric($_2CM)))
    {
          $T2C=$_2CM;
    }
    else
    {
          $T2C=0;
          $_2CM="NA";
        $_2CL="NA";
        $_2CC="NA";
    }
    if((is_numeric($_3AM)))
    {
          $T3A=$_3AM;
    }
    else
    {
          $T3A=0;
          $_3AM="NA";
        $_3AL="NA";
        $_3AC="NA";
    }
    if((is_numeric($_3BM)))
    {
          $T3B=$_3BM;
    }
    else
    {
          $T3B=0;
          $_3BM="NA";
        $_3BL="NA";
        $_3BC="NA";
    }
    if((is_numeric($_3CM)))
    {
          $T3C=$_3CM;
    }
    else
    {
          $T3C=0;
          $_3CM="NA";
        $_3CL="NA";
        $_3CC="NA";
    }
    if((is_numeric($_4AM)))
    {
          $T4A=$_4AM;
    }
    else
    {
          $T4A=0;
          $_4AM="NA";
         $_4AL="NA";
         $_4AC="NA";
    }
    if((is_numeric($_4BM)))
    {
          $T4B=$_4BM;
    }
    else
    {
          $T4B=0;
          $_4BM="NA";
         $_4BL="NA";
         $_4BC="NA";
    }
    if((is_numeric($_4CM)))
    {
          $T4C=$_4CM;
    }
    else
    {
          $T4C=0;
          $_4CM="NA";
        $_4CL="NA";
        $_4CC="NA";
    }
    
    $total=0;
    if($T1A+$T1B+$T1C==$T2A+$T2B+$T2C)
    {
        $total=$T1A+$T1B+$T1C;
    }
    
     if($T3A+$T3B+$T3C==$T4A+$T4B+$T4C)
    {
        $total=$total+$T3A+$T3B+$T3C;
    }
    $in="UPDATE setiamaxmarks SET	1a='$_1AM' ,1b='$_1BM', 1c='$_1CM', 1al='$_1AL' ,1bl='$_1BL', 1cl='$_1CL', 1ac='$_1AC', 1bc='$_1BC' ,1cc='$_1CC' ,2a='$_2AM',	2b='$_2BM'	,2c='$_2CM'	,2al='$_2AL'	,2bl='$_2BL',	2cl='$_2CL'	,2ac='$_2AC',	2bc='$_2BC',	2cc='$_2CC'	,3a='$_3AM'	,3b='$_3BM'	,3c='$_3CM'	,3al='$_3AL'	,3bl='$_3BL'	,3cl='$_3CL',	3ac='$_3AC'	,3bc='$_3BC'	,3cc='$_3CC'	,4a='$_4AM'	,4b='$_4BM'	,4c='$_4CM'	,4al='$_4AL',	4bl='$_4BL',	4cl='$_4CL',	4ac='$_4AC'	,4bc='$_4BC'	,4cc='$_4CC'	,total=$total  WHERE sub_id='17CS71'";
    $inres=mysqli_query($con,$in);
    echo $total;
  }
header('location:internal_tabulate.php');
?>












