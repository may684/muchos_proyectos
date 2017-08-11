<link rel="stylesheet" href="css/misestilos.php">
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">  
<script type="text/javascript" src="js/bootstrap-datetimepicker.*js"></script>
<link href="bootstrap-3.3.7-dist/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/bootstrap-datetimepicker.es.js"></script>
<script type="text/javascript">
     $('#divMiCalendario').datetimepicker({
          format: 'DD-MM-YYYY'       
      });
      $('#divMiCalendario').data("DateTimePicker");
</script>
<input type="text" class="form-control" id='divMiCalendario' placeholder="Dia">