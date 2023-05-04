<?php date_default_timezone_set('America/Sao_Paulo');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        @page { margin: 0; }
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
            .pag{

            height: 11.69in;
            margin: 0;
            padding: 0;

        }
        body{
            font-family:sans-serif;
            font-size: 0.95rem;
        }
        .main{
     
            /* border: 1px solid black; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .imgBox{
            width: 100%;
        }
        .img{
            float: left;
        }
        .img img{
            width: 300px;
        }
        h1{
            font-size: 1.2rem;
        }
        .bodyMain{
            width: 80%;
        }
        .margem{
            margin-top: 20px;
        }
        table{
            width: 100%;
        }
        table td{
            padding: 10px;
        }
        .container{
            float:left;
            position: relative;
            width: 400px;
        }
        .imagem{
           height: 120px;
           margin-left: 30px;
        }
        .texto{
            position: absolute;
            top:0;
            left:0;
        }
        .auth{
            float: right;
            width: 200px;           
        }
    </style>
</head>
<body>
    <div class="pag">
        <div class="main">
            
            <div class="imgBox">
                <div class="img"><img src="https://i.imgur.com/cO0GawM.jpg" alt=""></div>
            </div>
            <br>
            <br>
            
            <div>
                <h1 style="text-align:center">
                    Black Financial Capital Advisor <br>
                    Correspondente de Instituição Financeira LTDA
                </h1>
            </div>
            <br>
            <br>
            <div class="bodyMain">
                <p>
                    O presente contrato define as condições gerais aplicáveis ao Empréstimo concedido pela
                    Black Financial Capital Advisor Correspondente de Instituição Financeira
                    LTDA . Inscrita no CNPJ sob o no 32.583.682/0001-07. Localizada na Av: Presidente 
                    Juscelino Kubitschek n• 1726 Vila Nova Conceição São Paulo - SP - CEP: 04543-011 .
                    <br>
                    <br>
                    O Cliente Qualificado Neste Instrumento e na Ficha de Cadastro, Doravante Denomina-se
                    Financiado e têm justo e contratado as seguintes cláusulas e condições que mutuamente
                    outorgam, aceitam e se obrigam a cumprir e respeitar.
                    <br>
                    <br>
                    <strong>
                        CLÁUSULA I. DO OBJETO.
                    </strong>
            
                    <br>
                    O objeto deste contrato é o empréstimo pessoal para pessoa física representada pela
                    importância de: <strong>R$<?=$_POST["valor"]?></strong>  Depositado na Conta (Corrente) ou (Poupança) indicado pelo
                    Financiador por Transferência TED que será realizada no limite Máximo de 40 minutos após o
                    financiado cumprir, com as exigências da Financeira.
                    <br>
                    <br>
                    <strong>PARÁGRAFO 1</strong> – Não estão incluídos neste contrato de empréstimo pessoal para pessoa física
                    os custos de cartório e Despesas postais para movimentação das documentações que ficam
                    por conta do financiado.
                    <br>
                    <strong>PARÁGRAFO 2</strong> – A financeira não tem autonomia para realizar retirada de valores, desse
                    modo o objeto deverá ser transferido para a conta do financiado sem desconto algum.
                    <br>
                    <br>
                    <strong>CLÁUSULA II. DOS DIREITOS E OBRIGAÇÕES</strong>
                    <br>
                    <br>
                    <strong>PARÁGRAFO 1</strong>- A Financeira reserva o direito de adiar ou cancelar a liberação do
                    financiamento caso o Financiado não cumpra com suas obrigações impostas neste contrato.
                    <br>
                    <strong>PARÁGRAFO 2</strong> – A Financeira reserva o direito de cancelar o contrato e deletar do banco de
                    dados da empresa o cadastro do Financiado caso o cliente não cumpra com as exigências da
                    Financeira.
                    <br>
                    <br>
                    <strong>CLÁUSULA III. DO VALOR DO FINANCIAMENTO E DAS FORMAS DE PAGAMENTO</strong>
                    <br>
                    <strong>PARÁGRAFO 1</strong> – Os juros cobrados por parte da Financeira ao Financiado será de 0,89 % ao
                    mês se não houver nenhum atraso nas parcelas por parte do Financiado.
                    <br>
                    <strong>PARÁGRAFO ÚNICO</strong> – Caso o Financiado desista expressamente do contrato antes da
                    liberação do financiamento. A Financeira lhe devolvera os valores pago por ocasião, o
                    Financiado ficara responsável. Por todas as despesas de contrato que se refere às despesas
                    operacionais ficam por conta do financiado.
                </p>
            </div>
        </div>
    </div>

    <div class="pag">
        <div class="main">
            <div class="bodyMain">
                <br>
                <br>
                <strong>CLÁUSULA IV. DA RESCISÃO CONTRATUAL </strong>
                <br>
                <p>
                    Caso o financiado desista expressamente do contrato antes da liberação do financiamento
                    deverá arcar com a multa contratual de 20% do valor contratado, além de ficar responsável
                    por todas as despesas de contrato que se refere às despesas operacionais / administrativas.
                    <br>
                    <br>
                    <strong>PARÁGRAFO 1</strong> – Caso o Financiado não cumpra as exigências ou quebre o Contrato a
                    Financeira se reserva o direito de aplicar multa de 20% do valor total do financiamento, nos
                    termos da lei do artigo 1056 e 1059 do Código Civil Brasileiro. A partir da assinatura deste
                    contrato. Financeira, tendo em vista a disponibilidade dos serviços oferecidos neste contrato.
                    <br>
                    <br>
                    <strong>CLÁUSULA V. DA FALTA OU ATRASO DE PAGAMENTOS.</strong>
                    <br>
                    <br>
                    Na falta de pagamento de qualquer parcela, o Financiado pagará, além do principal, multa de
                    5% mais juros de 2% ao mês e, correção monetária, como indenização por desvalorização do
                    dinheiro, calculados pelos índices do IGP (FGV) Desde o vencimento da parcela até a data do
                    seu efetivo pagamento. Se o atraso for superior a 30 (trinta) dias a Financeira poderá ainda,
                    comunicar ao cadastro de consumidor legalmente. Existente para registro nos termos do
                    artigo 43 inciso 2o da lei 8.078 de setembro de 1990(código de defesa do consumidor), Sendo
                    que nessa hipótese o devedor será previamente comunicado, com 30 (trinta) dias de 
                    antecedência, bem como promover. Protesto de dividas mediante duplicata de serviços, letra
                    de cambio ou outro título de credito que for de causa.
                    <br>
                    <p style="text-align:center"><strong>DECLARAÇÃO DE CIÊNCIA DO CONTRATANTE</strong></p>
                    <br>
                    O financiado <strong><?=$_POST["nome"]?></strong>, inscrito sob o CPF: <strong><?=$_POST["cpf"]?></strong>,
                    residente e domiciliado no endereço anexado juntamente  com este instrumento, declara 
                    neste atoconhecer e aceitar todas as normas e argumentos instituídos pela financeira FINANCE 
                    CORRESPONDENTE BANCÁRIO LTDA. A fim de obter empréstimo pessoal no valor de 
                    <strong>R$<?=$_POST["valor"]?></strong> Feito via transferência TED para a conta cujo os dados estarão descritos abaixo:
                    <br>
                    <table>
                        <tr>
                            <td>
                                <strong>
                                    DADOS BANCARIOS:
                                </strong>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
    
                        <tr>
                            <td>
                                <strong>
                                    Agencia: <?=$_POST["ag"]?>
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    Conta: <?=$_POST["conta"]?> 
                                </strong>
                            </td>
                            <td>
                                <strong>
                                    Banco: <?=$_POST["banco"]?>
                                </strong>
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                <strong>
                                    Num. de parcelas: <?=$_POST["nParcelas"]?>
                                </strong>
                            </td>
                            <td></td>
                            <td>
                                <strong>
                                    Valor solicitado:R$ <?=$_POST["valor"]?>
                                </strong>
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                <strong>
                                    Vencimento: dia <?=$_POST["vencimento"]?>
                                </strong>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
    
                    </table>
                </p>
                <div style="margin-top:50px">
                    <div class="container">
                        <img class="imagem" src="https://i.imgur.com/VvQeQJQ.png" alt="">
                        <span class="texto">
                            <p><strong>Assinado eletronicamente por</strong></p>
                            <p><strong><?=$_POST["nome"]?></strong></p>
                            <p><strong>no dia <?=date('d/m/Y')?> às <?= date('H:i:s')?></strong></p>
                        </span>
                    </div>
                    <div class="auth">
                        <img src="https://i.imgur.com/4PCugqF.png" style="height:80px" alt="">
                    </div>
                    <div style="clear:both"></div>
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