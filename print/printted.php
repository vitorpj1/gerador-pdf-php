<?php date_default_timezone_set('America/Sao_Paulo');?>
 <!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>TED</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<style>
    @page { margin: 0; }
     @font-face {
     font-family: Courier;
     src: url(./fonts/fonte.ttf)
     }
     *{
          font-family: Courier;
     }
     .main{
          margin: 0 auto;
          width: 600px;
     }
     .extrato{
          height: 600px;
          background-color: #fff;
          padding: 10px;
          display: grid;
          row-gap: 3px;
     }
     .row-3{
          display: grid;
          grid-template-columns: 1fr 1fr 1fr;
     }
     .row-2{
          display: grid;
          grid-template-columns: 1fr 1fr;
     }

     .row-1{
          display: grid;
          grid-template-columns: 1fr;
     }
</style>
</head>
<body>

     <div class="main">
          <div class="extrato">
               <div class="row-1">SISBB - SISTEMA DE INFORMACOES BANCO DO BRASIL</div>
               <div class="row-3">
                    <div><?= date('d') ?>/<?= date('m') ?>/<?= date('Y') ?></div>
                    <div style="text-align: center;">- BANCO DO BRASIL -</div>
                    <div style="text-align: right;"><?= date('H:i:s')?></div>
               </div>

               <div class="row-2">
                    <div style="text-align: left;"><?=rand(5, 15);?>2<?=rand(5, 15);?><?=rand(5, 15);?>5<?=rand(5, 15);?><?=rand(5, 15);?>8<?=rand(5, 15);?></div>
                    <div style="text-align: right;"><?=rand(5, 15);?><?=rand(5, 15);?><?=rand(5, 15);?><?=rand(5, 15);?></div>
               </div>

               <div class="row-1">
                    <div style="text-align: center;">COMPROVANTE DE TED</div>
                    <br>
               </div>
               
               <div class="row-1">
                    <div>CLIENTE: FINANCE CORRESPONDENTE BANCARIO</div>
               </div>

               <div class="row-2">
                    <div>AGENCIA: 6547-6</div>
                    <div>CONTA: 048726-3</div>
               </div>
               <div class="row-1">
                    =============================================================
               </div>
               <div class="row-2">
                    <div style="text-align:left">NR. DOCUMENTO</div>
                    <div style="text-align:right"><?=rand(5, 15);?><?=rand(5, 15);?>.<?=rand(5, 15);?><?=rand(5, 15);?><?=rand(5, 15);?></div>
               </div>

               <div class="row-2">
                    <div>DATA DA TRANSFERENCIA</div>
                    <div style="text-align:right"><?= date('d/m/Y')?></div>
               </div>

               <div class="row-2">
                    <div>REMETENTE</div>
                    <div>FINANCE CORRESPONDENTE BANCARIO</div>
               </div>
               
               <div class="row-2">
                    <div>FAVORECIDO</div>
                    <div><?= strtoupper($_POST['nome'])?></div>
               </div>
               <div class="row-2">
                    <div>CPF</div>
                    <div><?=$_POST['cpf']?></div>
               </div>
               <div class="row-2">
                    <div>BANCO</div>
                    <div><?=$_POST['banco']?></div>
               </div>
               <div class="row-2">
                    <div>AGENCIA <?=$_POST['ag']?></div>
                    <div>CONTA <?=$_POST['conta']?></div>
               </div>

               <div class="row-1">
                    <div>FINALIDADE 001 CREDITO EM CONTA</div>
               </div>
               
               <div class="row-1">
                    <div>ORIGEM DO DEBITO  CONTA CORRENTE</div>
               </div>

               <div class="row-2">
                    <div>VALOR</div>
                    <div style="text-align:right">R$<?=$_POST['valor']?></div>
               </div>

               <div class="row-2">
                    <div>VALOR TOTAL</div>
                    <div style="text-align:right">R$<?=$_POST['valor']?></div>
               </div>

               <div class="row-1">
                    =============================================================
               </div>

               <div class="row-2">
                    <div>NR. AUTENTICACAO</div>
                    <div style="text-align: right;"><?=rand(5, 15);?>.<?=rand(5, 15);?><?=rand(5, 15);?>I.<?=rand(5, 15);?>3<?=rand(5, 15);?>H.<?=rand(5, 15);?>9F.<?=rand(5, 15);?>H3.0<?=rand(5, 15);?>3</div>
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