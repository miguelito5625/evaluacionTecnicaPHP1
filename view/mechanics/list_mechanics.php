<div style="margin-bottom: 30px">


	<table id="idTableMechanics" class="display nowrap" style="width:100%;">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>

			<?php
			if (count($dataToView["data"]) > 0) {
				foreach ($dataToView["data"] as $mechanic) {
			?>

					<tr>
						<td><?php echo $mechanic['id']; ?></td>
						<td><?php echo $mechanic['firstname']; ?></td>
						<td><?php echo $mechanic['lastname']; ?></td>
						<td> </td>
					</tr>

			<?php
				}
			}
			?>

		</tbody>
	</table>


</div>

<script>
	$.extend($.fn.dataTable.defaults, {
		responsive: true
	});

	$(document).ready(function() {
		var table = $('#idTableMechanics').DataTable({
			language: {
				"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
			},
			columnDefs: [{
				targets: -1,
				data: null,
				defaultContent: '<button id="idAccion1">Click!</button> <button id="idAccion2">Click!</button>',
			}, ],
		});

		$('#idTableMechanics tbody').on('click', '#idAccion1', function() {
			var data = table.row($(this).parents('tr')).data();
			// alert(data[0] + "'s salary is: " + data[2]);
			alert("Accion 1");
		});

		$('#idTableMechanics tbody').on('click', '#idAccion2', function() {
			var data = table.row($(this).parents('tr')).data();
			// alert(data[0] + "'s salary is: " + data[2]);
			alert("Accion 2");
		});

	});
</script>