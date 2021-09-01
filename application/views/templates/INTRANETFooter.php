<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark" href="">V&V Security</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<!-- JQuery -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-3.4.1.min.js"></script>
<!-- datatables -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.0/datatables.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
   
    
<!-- Initializations -->
<script type="text/javascript">
// Animations initialization
new WOW().init();
</script>



<script>
    
$(document).ready(function() {
    $('#example').DataTable({
					"language": {
						"decimal":        "",
				"emptyTable":     "No hay datos disponibles",
				"info":           "Mostrando desde la fila _START_ hasta la fila _END_ de un total de _TOTAL_ Filas",
				"infoEmpty":      "Sin datos",
				"infoFiltered":   "(Filtrado de un total de _MAX_ Filas)",
				"infoPostFix":    "",
				"thousands":      ",",
				"lengthMenu":     "Monstrando _MENU_ filas",
				"loadingRecords": "Cargando...",
				"processing":     "procesando su petición por favor espere...",
				"search":         "Buscar:",
				"zeroRecords":    "Sin resultados",
				"paginate": {
					"first":      "Primero",
					"last":       "Ultimo",
					"next":       "Siguiente",
					"previous":   "Anterior"
				},
				"aria": {
					"sortAscending":  ":activar para ordenar la columna ascendente",
					"sortDescending": ": activar para ordenar la columna descendente"
				}
					} 
				});

});
</script>
</body>

</html>