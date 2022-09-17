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