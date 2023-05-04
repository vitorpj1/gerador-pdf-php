<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>CLD</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container-sm">
     <div class="card mt-5">
          <div class="card-header">
               <br>
               <a href="<?=PATH?>" class="btn btn-dark btn-block">Inicio</a>
               <br>
               <h1>Gerador de PDF - CLD</h1>
          </div>
          <div class="card-body">
               <form action="print/printcld.php" method="POST">
               <div class="row">
                    <div class="col">
                         <label for="">Nome:</label>
                         <input type="text" name="nome" id="" class="form-control" required>
                    </div>
                    <div class="col">
                         <label for="">Valor Total:</label>
                         <input type="text" name="valor" id="ag" class="form-control" required>
                    </div>
               </div>

               <div class="row">
                    <div class="col">
                         <label for="">CPF:</label>
                         <input type="text" name="cpf" id="" class="form-control cpf" required>
                    </div>
                    <div class="col">
                         <label for="">Taxa CLD:</label>
                         <input type="text" name="taxa" id="conta" class="form-control" required>
                    </div>
               </div>           
               <br>
               <input type="submit" class="btn btn-success btn-block" value="Gerar">
               </form>
               
          </div>
     </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="js/dataScript.js"></script>
<script>
     $('.cpf').mask('000.000.000-00');  
</script>
</html>