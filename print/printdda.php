
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<title>DDA</title>
<link rel="stylesheet" href="../css/style-dda.css">
<style>
    @page { margin: 0; }
</style>
</head>
<body>
    <div class="pag">
<div class="logoImg">
          <img src="https://i.imgur.com/cHxZgHx.jpg" alt="" style="display: block;height:250px; margin:0 auto">
     </div>

     <div class="titulo">
          <strong>CARTA DE NOTIFICAÇÃO DE REGISTRO</strong> 
          <br>
          <span>São Paulo <span id="dia"></span> de <span id="mes"></span> de <span id="ano"></span></span> 
     </div>
     <br><br>
     <div class="corpo"><strong></strong>
          Prezado(a)Senhor(a):<strong><?= strtoupper($_POST['nome'])?></strong>
          CPF:<strong><?=$_POST['cpf']?></strong> disposto no art.43.§2.Do Código de Defesa 
          do Consumidor,comunicamos-lhes que o credor(a)
          FINANCE CORRESPONDENTE BANCARIO procedeu à 
          aberturado(s) registro(s) de débito de V.S,no arquivo do Serviço
          de Proteção ao Crédito Serasa Experian,com abrangência nacional, 
          aos quais serão disponibilizado(s) para consulta após 7 dias da
          emissão desta carta,ou seja em <strong id="dataCompleta"></strong> Solicitamos que
          venha estar, regularizando a tarifa solicitadada D.D.A (DÉBITO 
          DIRETO AUTORIZADO) essa tarifa ocorre no valor de <strong>R$<?=$_POST['dda']?></strong> 
          onde terá que ser feita a regularização.Sendo feita a regularização
          será creditado diretamente em conta o valor total de <strong>R$<?=$_POST['valor']?></strong>
     </div>
     <br><br><br>
     <div class="assinatura">
          <img src="https://i.imgur.com/pXtZHnL.png" alt="" style="height: 80px;">
          
          <div style="clear:both"></div>
     </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="../js/dataScript.js"></script>
<script>
    window.addEventListener("click",()=>{
          window.print()
      })
          moment.locale('pt-br');
          moment().add(10, 'days').calendar();
          let dataFuturo = moment().add(7,'days').calendar();          
          document.getElementById('dataCompleta').innerHTML = dataCompleta(dataFuturo);

          document.getElementById("dia").innerHTML = getDia();
          document.getElementById("mes").innerHTML = getMesNome();
          document.getElementById("ano").innerHTML = getAno();
</script>
</html>