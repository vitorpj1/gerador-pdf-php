<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>CET</title>
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
                <br><br>
                <img src="https://i.imgur.com/wpBHHOZ.png" alt="" style="display: block;height:200px; margin:0 auto">
           </div>
           <br>
            <div style="width: 80%; margin: 0 auto;">
                <br><br><br>
                São contribuintes do CET (CUSTO EFETIVO TOTAL) as pessoas físicas e as pessoas
                jurídicas que efetuarem operações de crédito, câmbio e seguro ou relativas a títulos ou
                valores financeiros. A cobrança e o recolhimento do valor são efetuados pelo responsável
                tributário: a pessoa física que conceder o crédito; as instituições autorizadas a operar em
                câmbio; as seguradoras ou as instituições financeiras a quem estas encarregarem da
                cobrança do prêmio de seguro; as instituições autorizadas a operar na compra e venda
                de títulos ou valores financeiros.
                <p style="text-align: center;">
                    Cliente: <strong><?= strtoupper($_POST['nome']) ?></strong> <br>
                    CPF: <strong><?= $_POST['cpf']?></strong> <br>
                    Valor atualizado: <strong><?= $_POST['valor']?></strong> <br>
                </p>
                <br>
                <p>
                    Sendo que o valor da CET será devolvido ao cliente no prazo de 3 dias. Que seria o total
                    do <strong>valor em aberto CET</strong> que após o cliente repassar, o valor vai ser devolvido para a
                    cliente assim como está em documento assinado. 
                </p>
                <br>
                <p style="text-align:center">
                    Todos os valores devidamente pagos e registrados pela empresa autorizada:
                    Finance Correspondente Bancario
                    CNPJ: 32.583.682/0001-07
                </p>
                <br><br><br>
                <p style="text-align: center;">
                    <strong>Valor em aberto CET: R$<?= $_POST['taxa']?></strong>
                </p>
                <br><br><br>
                <h3 style="text-align:center;font-weight: normal;">
                    São Paulo, <span id="dia"></span> de <span id="mes"></span> de <span id="ano"></span>
                </h3>
            </div>
            <div>
                <img src="https://i.imgur.com/6lBxSWk.png" style="height: 150px;margin-left: 60%;" alt="">
                <p style="margin-left: 65%;margin-top:-40px;text-decoration: underline;">Miguel Alcantara Neto</p>
                <p style="margin-left: 65%;margin-top:-7px;"><small>Responsável pela liberação</small></p>
            </div>
        </div>
    </div>
    
</body>
<script src="dataScript.js"></script>
<script>
document.getElementById("dia").innerHTML = getDia();
document.getElementById("mes").innerHTML = getMesNome();
document.getElementById("ano").innerHTML = getAno();

window.addEventListener("click",()=>{
          window.print()
})
</script>
</html>