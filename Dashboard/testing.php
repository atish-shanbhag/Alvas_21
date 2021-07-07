<?php
include('config.php');
$s="SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME='test'";
$result=mysqli_query($con,$s);
$i=0;
echo $_POST['unchecked'];
echo $_POST['checked'];

if(isset($_POST['unchecked']))
{
    echo "hello";
}
if(isset($_GET['coln']))
{
    $cv=$_GET['coln'];
     $s="SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME='test'";
      $result=mysqli_query($con,$s);
    $ii=1;
   while($col=mysqli_fetch_array($result))
   {
    if($ii<=$cv)
    {
        $cc=$col[$i];
       
        $ii=$ii+1;
    }
   }
    echo $cc;
   
    $d="Alter table test drop column $cc";
  mysqli_query($con,$d);
    header('location:testing.php');
}
while($col=mysqli_fetch_array($result))
{
   
 //   echo $col[$i]." ";
    // $i=$i+1;
    
}
if(isset($_POST['submit']))
{
    $c= $_POST['currentdate'];
   $s=date("d_m",strtotime($c));
    $q="alter table test add $s int(10) default 0";
    mysqli_query($con,$q);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <form action="#" method="post">
    <input type="date" name="currentdate">
    <input type="submit" value="submit" name="submit">
    </form>
    
    <br><br><br><br><br>
<table>
    

    <tr>
      <?php 
        $c=1;
       $t="SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME='test'";
        $r=mysqli_query($con,$t);
        $r1=mysqli_num_rows($r);
        while($c<=$r1)
        {
            if($c==1 || $c==2 || $c==3)
             {
        ?>
                <td> </td>
              <?php
              }
               else
                 {
                   ?>
                      <td> <a href="testing.php?coln=<?php  echo $c; ?>">delete</a></td>
                            <?php  
                  }
             $c=$c+1;
        }
        ?>
    </tr>

    <tr>
        <?php 
       $s="SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME='test'";
      $result=mysqli_query($con,$s);
    $i=0;
    while($col=mysqli_fetch_array($result))
    {
    ?>
        <th><?php echo $col[$i]; ?></th>
         <?php 
    }
        ?>
    </tr>
    <?php 
    $a="select * from test";
    $rr=mysqli_query($con,$a);
$n=mysqli_num_rows($rr);
$nn=0;
    while($n>($nn))
    {
      $rows=mysqli_fetch_array($rr);
         $nn=$nn+1;
    ?>
   <tr>
   <?php 
       $s="SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME='test'";
      $result=mysqli_query($con,$s);
    $z=0;
    while($col=mysqli_fetch_array($result))
    {
        $ch=$rows[$z]; 
        $ro=$rows[0];
       if(!(is_numeric($ch))|| ($nn==$n) || ($z==1) || ($z==2))
       {
   ?>
             <td><?php echo $ch; ?></td>
   <?php
       }
   ?>
   <?php  
       if(($ch==1)   && ((is_numeric($ch))) && (!($nn==$n)) && (!($z==1)) && (!($z==2)))
       {
              if()
    ?>
             <form method="POST"  >
            <td><input  type="checkbox"   onChange="this.form.submit()" name="checked" ></td>
             </form>
    <?php 
       }
    else
       {
           if(is_numeric($ch) && (!($nn==$n)) && (!($z==1)) && (!($z==2)))
           {
     ?>
          <form method="POST" >
        <td><input type="checkbox" name="unchecked" value="unchecked"  onChange="this.form.submit()"></td>
        </form>
   <?php 
           }
       }
        $z=$z+1;
    }
        ?>
   </tr>
    <?php 
    }
        ?>
</table>





<table>
 <?php 
///////////////////////////////
    $aa="select * from test";
    $rr=mysqli_query($con,$aa);
    $n=mysqli_num_rows($rr);
    $nn=0;
    $s="SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME='test'";
    $result=mysqli_query($con,$s);
    $dd=mysqli_num_rows($result);
    $total_classes=$dd-3;
    while($n>($nn+1))
    {
      $rows=mysqli_fetch_array($rr);
      $rowname=$rows[0];
      $z=3;
      $nn=$nn+1;
      $ch=0;
      while($z<$dd)
      {
        $ch=$ch+$rows[$z]; 
         $z=$z+1;
      }
      $p=($ch/$total_classes)*100;
      $q="update test set CA=$ch,AP=$p where $rowname=$rowname";
      mysqli_query($con,$q);
    }

    /////////////////////////////////////////
  /*   $s="SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME='test'";
    $result=mysqli_query($con,$s);
     $col=mysqli_fetch_array($result); 
     $d=3;
$rrr=$col[3];  
echo $rrr;

     while($d<=$dd)
      {
       echo $d;
       echo $col[0];
     $aaa="select $col[$d] from test";
     $re=mysqli_query($con,$aaa);
     $r=mysqli_num_rows($result);
    // echo $r;
      $d=$d+1;
     }
*/

    ?>
</table>
</body>
</html>