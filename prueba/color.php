<?php 

session_start()
$_SESSION[]
if (empty($_POST['color'])) {
  $_SESSION['color']= 'grey';
}
if (!empty($_POST['color'])) {
  $_SESSION['color']=$_POST
}
?>
<style >
body{
  background-color: <?= $_SESSION['color'];?>;
}
</style>

<form action="color.php" method="post">
    <select name="color">
      <?php foreach ($arrayColor as $key => $value) { ?>
        <option value="<?= $Key"></option>
              } ?>

</select>


</form>
