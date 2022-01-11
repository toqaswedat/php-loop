<?php 
echo "---------------Q1<br>";
for ($i=1;$i<11;$i++){
    if($i==10)
        echo $i;
    else
        echo $i."-";
}
echo "<br>---------------Q2<br>";
$sum=0;
for ($i=0;$i <= 30 ;$i++){
    $sum=$sum+$i;
}
echo $sum;
echo "<br>---------------Q3<br>";
for ($i=0;$i < 5 ;$i++){
    for ($a=0;$a < 5 ;$a++){
        if($i==0 || $i+$a<=3  ){
            echo "A ";
        }else if($i==1){
            echo "B ";

        }
        elseif($i==2){
            echo "C ";
        }
        elseif($i==3){
            echo "D ";
        }
        else
        echo "E ";
    }
        echo "<br>";
}
echo "<br>---------------Q4<br>";
for ($i=0;$i < 5 ;$i++){
    for ($a=0;$a < 5 ;$a++){
        if($i==0 || $i+$a<=3  ){
            echo 1;
        }else if($i==1){
            echo 2;

        }
        elseif($i==2){
            echo 3;
        }
        elseif($i==3){
            echo 4;
        }
        else
        echo 5;
    }
        echo "<br> ";
}
echo "<br>---------------Q5<br>";
for ($i=1;$i <= 5 ;$i++){
    for ($a=1;$a <= 5 ;$a++){
        if($i==$a)
        echo $i;
        else 
        echo 0;
    }
    echo "<br>";
}
echo "<br>---------------Q6<br>";
$number = 6;
$result = 1;
for($i=$number;$i>0;$i--){
        $result*=$i;
}
echo $result;
echo "<br>---------------Q7<br>";
function Fibonacci($number){ 
    if ($number == 0) 
        return 0;     
    else if ($number == 1) 
        return 1;     
    else
        return (Fibonacci($number-1) +  
                Fibonacci($number-2)); 
} 
$number = 10; 
for ($counter = 0; $counter < $number; $counter++){   
    echo Fibonacci($counter),'  '; 
} 
echo "<br>---------------Q8<br>";
$program = "orange coding academy";
echo substr_count($program,'c');
echo "<br>---------------Q9<br>";


?>
<!DOCTYPE html>
<html>

<body>
    <table border="2" cellpadding="3px" cellspacing="0px">
        <?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
{
  echo "<td>$i * $j = ".$i*$j."</td>";
}
echo "</tr>";
}
?>
    </table>
</body>

</html>
<?php 
echo "<br>---------------Q10<br>";
function fizzBuzz(){
    for($i=1;$i<= 50;$i++)
    {
      if(($i%3 ==0) &&($i%5 ==0))
      echo "FizzBuzz"." ";
      elseif(($i%3 ==0))
      echo "Fizz"." ";
      elseif(($i%5 ==0))
      echo "Buzz"." ";
      else
      echo($i)." ";
    }
    
    } 
    fizzBuzz();
echo "<br>---------------Q11<br>";
$c=1;
for ($i=0;$i < 5 ;$i++){
    for ($a=0;$a < 5 ;$a++){
        if ($i >= $a){
            echo $c." " ;
            $c++;
        }
    }
    echo "<br>";
}
echo "<br>---------------Q12<br>";

$size = 5;
$chr1="A";
for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    $chr1="A";
    for($k=1;$k<=$i;$k++){
        echo "$chr1&nbsp;&nbsp;";
        $chr1++;
    }
echo "<br/>";
}

$size = 5;
for($i=1;$i<$size;$i++){
    for($k=1;$k<=$i;$k++){
        echo "&nbsp;&nbsp;";
    }
    $chr1="A";
    for($j=1;$j<=$size-$i;$j++){
        echo"$chr1&nbsp;&nbsp;";
        $chr1++;

        // echo "&nbsp;&nbsp;";
    }
echo "<br/>";
}



// for($i=0;$i<=5;$i++){  
//     for($k=5;$k>=$i;$k--){  
//     echo "  ";  
//     }  
//     for($j=1;$j<=$i;$j++){  
//     echo "*  ";  
//     }  
//     echo "<br>";  
//     }  
//     for($i=4;$i>=1;$i--){  
//     for($k=5;$k>=$i;$k--){  
//     echo "  ";  
//     }  
//     for($j=1;$j<=$i;$j++){  
//     echo "*  ";  
//     }  
//     echo "<br>";  
//     }  
//     for($i=1; $i<=5; $i++){   
//         for($j=1; $j<=$i; $j++){   
//         echo ' * ';   
//         }  
//         echo '<br>';   
//         }  
//         for($i=5; $i>=1; $i--){   
//         for($j=1; $j<=$i; $j++){  
//         echo ' * ';   
//         }   
//         echo '<br>';   
//         }

//         function letterA(){
//             for($i=0 ; $i<= 9; $i++){
//                 for($j=0 ; $j<= 8; $j++){  
//                  if(( ($j==1 || $j==8) && ($i!=0)) || ( ($i==0 || $i==5) && ($j>1 && $j< 8)))   
//                  echo "*";
//                  else
//                  echo "&nbsp;"." ";
//                 }
//                 echo "<br>";
//               }
//             }
//             letterA();

// echo "<pre>";
// $chr="A";
// for ($i = 1; $i < 4; $i++) {
//     for ($j = $i; $j < 4; $j++)
//         echo "&nbsp;&nbsp;";
//     for ($j = 2 * $i - 1; $j > 0; $j--)
//         echo ("&nbsp;$i");
//         // $chr++;
//     echo "<br>";
// }
// $n = 4;
// for ($i = 4; $i > 0; $i--) {
//     for ($j = $n-$i; $j > 0; $j--){
//         echo "&nbsp;&nbsp;";
//     }
//     for ($j = 2 * $i - 1; $j > 0; $j--){
//     echo ("&nbsp;$i");
//     $chr++;}
//     echo "<br>";
// }
// echo "</pre>";



echo "<br><br><br><br><br><br>";


?>