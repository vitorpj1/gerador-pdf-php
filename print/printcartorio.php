<!-- 
PAUSADO NA PARTE DO TEDNPM 
 -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PDF COMPROVANTE</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 
 <style>
 @page { margin: 0; }
      @font-face {
      font-family: Courier;
      src: url(./fonts/fonte.ttf)
      }
      *{
           font-size: 16px;
      }
      .main{
          margin: 0 auto;
          width: 98%;
          border:solid black 0px;
          padding: 10px;
      }
      .linha1{
          margin: 0 auto;
          padding: 10px;
          border: solid #aaa 1px;
          width: 90%;
      }
      th{
           font-size: 1.4rem;
           border: 1px solid #ccc;
      }
      td{
           font-size: 1.3rem;
           border: 1px solid #ccc;
      }
      td > strong{
           font-size: 1.3rem;
      }
      span{
           font-size: 1.3rem;
      }
      .linha3{
           font-size: 1.5rem;
      }
      .linha4{
           margin: 0 auto;
           width: 90%;
      }
      .dadosCart{
          font-size: 1.3rem;
          float: left;
          width: 70%;
      }
      .logoCart{
          display: block;
          float:right;
          width: 30%;
      }
      p{
           font-size: 1.6rem;
      }
      p > strong{
           font-size: 1.6rem;
      }
      .spaceleft{
           padding-left:20px
      }
      .big{
           font-size: 1.5rem;
           font-weight: bold;
      }
 </style>
 </head>
 <body>
     
     <div class="main">
          <div class="linha1">
               <div class="dadosCart">
                    Cartorio de registro de notas da 2ª Circunscrição <br>
                    Endereço: Rua Rego Freitas, 133 - República São Paulo / SP <br>
                    CEP: 01220010 <br>
                    E-mail: contato@2cartorio.com.br <br>
               </div>
               <div class="logoCart">
                    <img  style="height: 90px;" src="https://i.imgur.com/Ufu8BYV.png" alt="">
               </div>
               <div style="clear:both"></div>
          </div>
          <br>
          <p style="text-align:center" class="big">COMPROVANTE DE PROTOCOLO</p> 

          <div class="linha2">
               <table style="width:100%">
                    <tr>
                         <td><strong>Protocolo:</strong></td>
                         <td class="spaceleft"><?=rand(5, 15);?><?=rand(5, 15);?><?=rand(5, 15);?><?=rand(5, 15);?><?=rand(5, 15);?><?=rand(5, 15);?>-<?=rand(5, 15);?></td>
                    </tr>
                    <tr>
                         <td><strong>Data:</strong></td>
                         <td class="spaceleft"><?= date('d/m/Y') ?></td>
                    </tr>
                    <tr>
                         <td><strong>Apresentante:</strong></td>
                         <td class="spaceleft">Finance Correspondente Bancário</td>
                    </tr>
                    <tr>
                         <td><strong>Adquirente:</strong></td>
                         <td class="spaceleft"><?= strtoupper($_POST['nome'])?></td>
                    </tr>
               </table>
               <br><br>
               <div class="linha3">
                    <table style="width:100%">
                         <tr>
                              <th>Seq.</th>
                              <th>Atos</th>
                              <th>Valor do doc.</th>
                              <th>Emolumentos</th>
                              <th>ISS</th>
                              <th>Total do item</th>
                         </tr>
                         <tr>
                              <td>01</td>
                              <td>Autent. de documentos</td>
                              <td>R$ <span id="d1">0</span></td>
                              <td>R$ <span id="d2">0</span></td>
                              <td><span id="d3">0</span></td>
                              <td>R$ <span id="d4">0</span></td>
                         </tr>
                         <tr>
                              <td>02</td>
                              <td>Prenotação</td>
                              <td>R$ <span id="d5">0</span></td>
                              <td>R$ <span id="d6">0</span></td>
                              <td><span id="d7">0</span></td>
                              <td>R$ <span id="d8">0</span></td>
                         </tr>
                         <tr>
                              <td>03</td>
                              <td>Regis. de confi. de dívida</td>
                              <td>R$ <span id="d9">0</span></td>
                              <td>R$ <span id="d10">0</span></td>
                              <td><span id="d11">0</span></td>
                              <td>R$ <span id="d12">0</span></td>
                         </tr>
                         <tr>
                              <td class="big" colspan="5">Total do protocolo:</td>
                              <td class="big">R$ <span id="valor"><?= $_POST['valor'] ?></span> </td>
                         </tr>
                    </table>
               </div>
               <br><br>
               
               
          </div>
          <div class="linha4">
               <p>
                    <strong>Art. 1º</strong> Emolumentos são as taxas devidas pelos interessados aos
                    notários e registradores, pelos atos que vierem a ser praticados no âmbito de suas serventias, dentro de sua competência legal, de acordo com os valores previstos para cada um deles, na conformidade das tebelas de emolumentos previstas na Lei vigente no momento do ato e reajustadas conforme Provimento nº 4, de 29 de janeiro de 2021 do Corregedor-Geral de Justiça, atualizadas até a data de promulgação do contrato de empréstimo bancário.
               </p>
               <br>
               <p>
                  <strong>Parágrafo único</strong> - O valor dos emolumentos deverá atender à natureza pública e ao caráter social dos serviços notariais e de registro e corresponder ao efetivo custo e à adequada e ainda, as seguintes regras:
               </p>
               <br>
               <p>
                    <strong>I</strong> - os valores dos emolumentos constam de tabelas e são expressos em moeda corrente do Páis;
               </p>
               <br>
               <p>
                    <strong>II</strong> - os atos comuns aos vários tipos de serviços notariais e de resgistro são remunerados por emolumentos específicos, fixados para cada espécie de ato;
               </p>
          </div>
     </div>
     
 </body>
 <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
 <script src="dataScript.js"></script>
 <script>

    var valor = $('#valor').text()
    console.log(valor)
    var d1 = 0;
     var d2 = 0;
     var d3 = 0;
     var d4 = 0;
     var d5 = 0;
     var d6 = 0;
     var d7 = 0;
     var d8 = 0;
     var d9 = 0;
     var d10 = 0;
     var d11 = 0;
     var d12 = 0;
     var d13 = 0;

     var data = new Date();         
     var dia = String(data.getDate()).padStart(2, '0');
     var mes = String(data.getMonth() + 1).padStart(2, '0');
     var ano = data.getFullYear();
     dataAtual = dia + '/' + mes + '/' + ano;
     var hora = data.getHours() < 10 ? "0"+data.getHours() : data.getHours();
     var minuto = (data.getMinutes()) < 10 ? "0"+ (data.getMinutes())  : (data.getMinutes());
     var segundo = data.getSeconds() < 10 ? "0"+data.getSeconds(): data.getSeconds();
     var horario = hora + ":" + minuto + ":" + segundo;
     
     var op;

     function rand(){
          return Math.floor(Math.random() * 10)
     }
     
     switch(valor) {
          case "400,29":
            $('#d1').text("65,78");
            $('#d2').text("59,77");
            $('#d3').text("0,001");
            $('#d4').text("125,55");
            $('#d5').text("28,12");
            $('#d6').text("65,99");
            $('#d7').text("0,0045,78");
            $('#d8').text("94,11");
            $('#d9').text("102,00");
            $('#d10').text("78,61");
            $('#d11').text("2,004");
            $('#d12').text("180,61");
            break;
          case "345,79":
            $('#d1').text("42,68");
            $('#d2').text("59,97");
            $('#d3').text("0,002");
            $('#d4').text("102,65");
            $('#d5').text("34,87");
            $('#d6').text("27,66");
            $('#d7').text("1,009");
            $('#d8').text("62,53");
            $('#d9').text("102,00");
            $('#d10').text("78,61");
            $('#d11').text("2,004");
            $('#d12').text("180,61");
            break;
            case "489,98":
                $('#d1').text("80,49");
                $('#d2').text("59,77");
                $('#d3').text("0,001");
                $('#d4').text("140,26");
                $('#d5').text("58,12");
                $('#d6').text("85,99");
                $('#d7').text("0,0045,78");
                $('#d8').text("144,11");
                $('#d9').text("127,00");
                $('#d10').text("78,61");
                $('#d11').text("2,004");
                $('#d12').text("205,61");
          break;
          default:

        }

        window.addEventListener("click",()=>{
          window.print()
      })

      const mesField = document.getElementById('mes');

      mesField.innerHTML = getMesNome();

  </script>
 </html>
