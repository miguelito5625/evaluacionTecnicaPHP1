<?php
if (isset($_GET["savedTool"])) {
?>
    <script>
        window.location.href = "index.php?controller=tools&action=main&successSavedTool=true";
    </script>
<?php
}
?>

<?php
if (isset($_GET["successSavedTool"])) {
?>
    <script>
        console.log("Herramienta registrada");
        iziToast.success({
            title: 'Herramienta registrada correctamente',
        });
    </script>
<?php
}
?>


<?php
if (isset($_GET["assignedTooltoMechanic"])) {
?>
    <script>
        window.location.href = "index.php?controller=tools&action=main&successAssignedTooltoMechanic=true";
    </script>
<?php
}
?>

<?php
if (isset($_GET["successAssignedTooltoMechanic"])) {
?>
    <script>
        console.log("Herramienta asignada correctamente");
        iziToast.success({
            title: 'Herramienta asignada correctamente',
        });
    </script>
<?php
}
?>


<?php
if (isset($_GET["updatedTool"])) {
?>
    <script>
        window.location.href = "index.php?controller=tools&action=main&successUpdatedTool=true";
    </script>
<?php
}
?>

<?php
if (isset($_GET["successUpdatedTool"])) {
?>
    <script>
        console.log("Herramienta modificada");
        iziToast.success({
            title: 'Herramienta modificada correctamente',
        });
    </script>
<?php
}
?>