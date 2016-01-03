<?php
/**
 * Created by PhpStorm.
 * User: feroxe
 * Date: 03-Jan-16
 * Time: 10:40 PM
 */
$f = $c = '';
if (isset($_POST['f'])) $f = sanitizeString($_POST['f']);
if (isset($_POST['c'])) $c = sanitizeString($_POST['c']);
if ($f != '')
{
    $c = intval((5 / 9) * ($f - 32));
    $out = "$f °f equals $c °c";
}
elseif($c != '')
{
    $f = intval((9 / 5) * $c + 32);
    $out = "$c °c equals $f °f";
}
else $out = "";

echo <<<_ENd
<html>
 <head>
   <title>Temperature Conversion</title>
 </head>
   <body>
    <pre>Enter either farenhiet or celsius and then click on convert
    <b>$out</b>
    <form method="post" action="convert.php">
      Farenheit <input type="text" name="f" size="7">
      Clesius <input type="text" name="c" size="7">
      <input type="submit" value="convert">
    </form>
    </pre>
   </body>
</html>
_ENd;





function sanitizeString($var){
    $var=stripslashes($var);
    $var=htmlentities($var);
    $var=strip_tags($var);
    return $var;
}

?>