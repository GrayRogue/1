<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Задание 1: массив</title>
 </head>
 <body>
    <p>Сформированный массив:</p>
     <?php
        $array = array(5,2,15,4,2,1,2,9,2,1,2);
        for ($i = 0; $i < count($array); $i++) 
            echo $array[$i] . " ";
     ?>
    <p>Введите цифру для добавления в массив:</p>
    <form method="post">
         <input name="inp_nmbr">
         <input type="submit" value="Ввести" name="act_btn">
    </form>
     <?php
     if (isset($_POST["act_btn"]))
     {
         $len = count($array);
         for ($i = 0; $i < $len; $i++)
         {
             if (strrpos($array[$i], "2") !== false) 
             {
                 $len++;
                 for ($j = $len - 1; $j > $i; $j--)
                     $array[$j] = $array[$j-1];
                 $i++;
                 $array[$i] = $_POST["inp_nmbr"];
             }
         }
     echo "Сформированный массив:";
     for ($i = 0; $i < $len; $i++) 
            echo $array[$i] . " ";
     }
     ?>
 </body>
</html>