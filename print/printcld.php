<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>CLD</title>
    <style>
        @page { margin: 0; }
        *{
            font-family: "Open Sans";
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        .logoImg{
            width: 100%;
        }
        .main{
            width: 100%;
            
        }
        .pag{
            height: 11.68in;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="pag">
        <div class="main">
            <div class="logoImg">
                <img src="https://i.imgur.com/SyaOzUM.png" alt="" style="display: block;height:250px; margin:0 auto">
           </div>
           <br>
            <h1 style="text-align: center;">SOLICITAÇÃO DE REGULARIZAÇÃO C.L.D</h1>
            <br><br>
            <div style="width: 80%; margin: 0 auto;">
                Federação Brasileira de Bancos é a principal
                entidade representativa do setor bancário brasileiro.
                Fundada em 1967, na cidade de São Paulo, é uma
                associação sem fins lucrativos que tem o compromisso
                de fortalecer o sistema financeiro e suas relações com
                a sociedade e contribuir para o desenvolvimento
                econômico, social e sustentável do País.
                <br><br>
                DE ACORDO COM A NOTIFICAÇÃO SOLICITADA A FEBRABAN
                SOLICITAMOS A REGULARIZAÇÃO DA C.L.D QUE SERIA
                CRÉDITO LIBERADO DIRETO NO VALOR DE  <strong>R$<?=$_POST['taxa']?></strong> 
                REGULARIZANDO A SITUAÇÃO SERÁ CREDITADO O VALOR <?=$_POST['valor']?></strong>
                
                <br><br>
                EFETUE PAGAMENTO COM O SISTEMA FEBRABAN QUE ESTA 
                SENDO SOLICITADO DIRETAMENTE DA CARTA DE CRÉDITO
                DO(A)SR° <strong><?= strtoupper($_POST['nome'])?></strong>  <strong>CPF:<?=$_POST['cpf']?></strong> 
                <br><br>
                <p style="text-align: center;">
                    SOLICITADO A REGULARIZAÇÃO NO VALOR DE <strong>R$<?=$_POST['taxa']?></strong>  
                    PARA SER CREDITADO O VALOR DE <strong>R$<?=$_POST['valor']?></strong>
                </p>
                <br>
                <h3 style="text-align:center;font-weight: normal;">
                    São Paulo, <span id="dia"></span> de <span id="mes"></span> de <span id="ano"></span>
                </h3>
            </div>
            <div>
                <img src="https://i.imgur.com/RVNqE48.png" style="height: 150px;margin-left: 60%;" alt="">
                <p style="margin-left: 65%;margin-top:-30px;text-decoration: underline;">Vinicius Siman Nunes Braga</p>
                <p style="margin-left: 65%;margin-top:-5px;"><small>Responsável pela liberação</small></p>
            </div>
        </div>
    </div>
    
</body>
<script src="../js/dataScript.js"></script>
<script>
document.getElementById("dia").innerHTML = getDia();
document.getElementById("mes").innerHTML = getMesNome();
document.getElementById("ano").innerHTML = getAno();
window.addEventListener("click",()=>{
          window.print()
      })
</script>
</html>