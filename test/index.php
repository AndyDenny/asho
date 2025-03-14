<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/functions.php";?>
<form action="" method="post">
    <input type="text" name="testInput">
    <button type="submit">submit</button>
</form>
<pre>
<?php var_dump($_POST); ?>
</pre>
<?php
if (isset($_POST['testInput'])) {
    $str = new \classes\Validator($_POST['testInput']);
    $str = $str->isValidInputString();
}
var_dump($str);