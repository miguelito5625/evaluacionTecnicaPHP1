
<?php
if (isset($_GET["savedMechanic"])) {
?>
    <script>
        console.log("Mecanico registrado");
        window.location.href = "index.php?controller=mechanics&action=main&successSavedMechanic=true";
    </script>
<?php
}
?>

<?php
if (isset($_GET["successSavedMechanic"])) {
?>
    <script>
        console.log("Mecanico registrado");
        iziToast.success({
            title: 'Mecanico registrado correctamente',
        });
    </script>
<?php
}
?>
