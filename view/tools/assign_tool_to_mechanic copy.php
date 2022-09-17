<h3>Asignar herramientas a mecanicos</h3>

<?php
if (count($dataToView["data"]["mechanics"]) > 0) {
    foreach ($dataToView["data"]["mechanics"] as $mechanic) {
?>

        <p><?php echo $mechanic['firstname']; ?></p>


<?php
    }
}
?>


<?php
if (count($dataToView["data"]["tools"]) > 0) {
    foreach ($dataToView["data"]["tools"] as $mechanic) {
?>

        <p><?php echo $mechanic['name']; ?></p>


<?php
    }
}
?>