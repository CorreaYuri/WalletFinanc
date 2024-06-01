<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/home.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <title>Home-WalletFinance</title>
</head>
<body>
    <div class="navBar">
    <!--NavBar Inicio-->
    <ul>
        <li>Minha conta</li>
        <li>Relatório Mensal</li>
        <li>Inicio</li>
        <li>Banking</li>
        <li>Sobre nós</li>
        <li>Help</li>
    </ul>
    </div>
        <!--Conteiner de dash-->
    <div class="contentDash">
        <!--Conteiner de rotulos dos paineis do dash-->
        <div class="containerRotulo1">
            <h4>Previsões</h4>

        </div>
        <div class="containerRotulo2">
            <h4>Realidade</h4>
        </div>
        <!--Section dash de Previsões-->
<div class="containerPrevs">
        <section class="sectionDespesaPrev">
                <h4>Despesa Prevista</h4>
            <div class="diplayDespesaPrev">
                <h4>R$100,00</h4>
            </div>
                <label for="">Adicionar despesa</label>
                <input type="text" name="despesaPre" id="" placeholder="Add despesa prevista">
                <button type="submit">Adicionar</button>
        </section>
        <section class="sectionReceitaPrev">
                    <h4>Receita Prevista</h4>
                    <div class="diplayReceitaPrev">
                        <h4>R$100,00</h4>
                    </div>
                <label for="">Adicionar Receita prevista</label>
                <input type="text" name="ReceitaPre" id="" placeholder="Add receita Prev">
                <button type="submit">Adicionar</button>
                </section>
</div>
            <!--Section de Realidade-->
        <section class="containerRealidade">
            <section class="sectionDespesareal">
                <h4 for="">Despesa Real</h4>
            <div class="diplayDespesaReal">
                <h4>R$100,00</h4>
            </div>
                <h4>Adicionar Despesa Real</h4>
                <input type="text" name="despesaReal" id="" placeholder="Add despesa Real">
                <button type="submit">Adicionar</button>
            </section>
            <!--Sections Receita prevista-->
            <section class="sectionReceitaReal">
                    <h4 >Receita Real</h4>
            <div class="diplayReceitaReal">
                <h4>R$100,00</h4>
            </div>
                <h4>Adicionar receita real</h4>
                <input type="text" name="ReceitaReal" id="" placeholder="Add receita Real">
                <button type="submit">Adicionar</button>
            </section>
        </section>

</div>
<div class="separete">
    <h3>Desepesa adicionadas</h3>
    <div class="linha"></div>
</div>
<div class="containerTable">
    <table id="tbDespesaAdd" border="0">
        <tr class="linhatb">
        <td>Mecado</td>
        <td>R$500,00</td>
        <td>Pago</td>
        <td>data</td>
        </tr>
    </table>
</div>

</body>
</html>
