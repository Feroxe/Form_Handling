<?php
/**
 * Created by PhpStorm.
 * User: feroxe
 * Date: 31-Dec-15
 * Time: 9:53 PM
 **/
if (isset($_POST['name']))
    $name=$_POST['name'];
else
    $name="you didnt entered any value";

echo <<<_END
<html>
    <head>
        <title>form handling test </title>
    </head>
        <body>
         Your name is : $name
         <form method="post" action="form_test.php">
            Please enter your name :
            <input type="text" name="name"><br>
            Age : <input type="text" name="age" value="16"><br>
            Additional Info : <textarea name="info" cols="4" rows="5" wrap="type">This is the default value</textarea><br>
            I agree <input type="checkbox" name="check" value="val" ><br>
            Ice <input type="checkbox" name="ice[]" value="ice"><br>
            Vanilla <input type="checkbox" name="ice[]" value="vanilla"><br>
            Chocolate <input type="checkbox" name="ice[]" value="chocolate"><br>
            Cream <input type="radio" name="cream" value="cream"><br>
            Sauce <input type="radio" name="sauce" value="1" checked="checked"><br>
            Vegetables <select name="name" size="size">
              <option value="peas">Peas</option>
              <option value="borocoli">Borocoli</option>
              <option value="Ginger">Ginger</option>
             </select><br>
             <label>Label<input type="checkbox" name="label" value="label"></label><br>
            <input type="submit" >
         </form>
        </body>
</html>
_END;
?>
