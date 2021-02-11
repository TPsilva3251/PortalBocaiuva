@include('/layout/template')
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24763.114160698788!2d-43.83353741155226!3d-17.117819082656517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xab6230efb84b03%3A0xf8120c7ff129066c!2sBocai%C3%BAva%2C%20MG%2C%2039390-000!5e1!3m2!1spt-BR!2sbr!4v1572448714991!5m2!1spt-BR!2sbr" width="1325" height="450" frameborder="0" margin-left="3%;"  allowfullscreen=""></iframe><br>

<div class="btn-group btn-group-toggle  col-sm-12 col-md-12 col-lg-12 col-xg-12" data-toggle="buttons">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".historia">Teste</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".geografia">Dados Demográficos</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".turismo">Pontos Turísticos</button>
</div>
<br><br>
@include('/layout/footer')
{{-- ////////////////////////////////////////////////////////////////////////////////// --}}
<div class="modal fade historia" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <br>
            <div class="text1 col-sm-12 col-md-12 col-lg-12 col-xg-12" id="historia">
                <p>Bocaiuva surgiu em 15 de junho de 1553, originada pelas expedições de Spinoza e Navarro. Eles vinham de Porto Seguro à procura de riquezas. Alguns integrantes dessa expedição resolveram permanecer no local por achar as terras promissoras.</p>
                <p>A bandeira de Fernão Dias Leme iniciou a segunda entrada de pessoas na região. Pertenciam a essa bandeira Matias Cardoso de Almeida e Antônio Gonçalves Figueira.</p>
                <p>Em 1700 surgiu em Bocaiuva a imagem do Senhor do Bonfim, que também contribuiu para o povoamento da Região.</p>
                <p>O primeiro nome oficial desta terra foi Curato de Macaúbas, depois Arraial do Senhor do Bonfim, depois, Freguesia do Senhor do Bonfim, Vila do Jequitaí, Vila Nova do Jequitaí.</p>
                <p>Existem duas versões a respeito da origem do nome "Bocaiuva": uma remete à palmeira Macaúba (nome científico Acrocomia aculeata, também conhecida como bocaiúva) e a outra ao abolicionista e jornalista Quintino Bocaiuva. Entretanto, esse jornalista em nada contribuiu para o nome da cidade, visto que a abundância da palmeira "bocaiúva" na região é o que de fato deu origem ao nome do município mineiro.</p>
                <p>Em 14 de julho de 1888, o município passa a denominar-se Bocaiúva, com o Coronel Manoel Freire Figueiredo Fonseca.</p>
                <p>Em 20 de maio de 1947 ocorreu um eclipse do Sol que teve sua faixa cruzando o território brasileiro. A cidade de Bocaiuva (MG) recebeu diversas expedições científicas para a realização de observações, coleta de dados e posteriores estudos sobre o fenômeno. As circunstâncias do imediato pós-Segunda Guerra Mundial conferiram um grande destaque na imprensa nacional e internacional a este evento,
                    produzindo registros em diferentes mídias, Bocaiuva – cidade que recebeu a maioria das expedições científicas para a observação do fenômeno – e para a auto-afirmação de sua identidade como um local de produção de conhecimento.</p>
                <p>Bocaiuva recebeu uma expedição de importantes pesquisadores e cientistas para o estudo do fenômeno, como o engenheiro e físico estadunidense Lyman James Briggs, diretor do National Bureau of Standards e que liderou a equipe do National Geographic Society, e o astrônomo belgo-americano George Van Biesbroeck, que confirmou a Teoria da Relatividade, em 1952.</p>
                <p>Especula-se que o físico Albert Einstein iria a Bocaiúva analisar o fenômeno ocorrido, mas fontes afirmam que o cientista desistiu da viagem em último momento.</p>
            </div>
            <br>
        </div>
        @include('/layout/footer')
    </div>
</div>
{{-- ////////////////////////////////////////////////////////////////////////////////// --}}
<div class="modal fade geografia" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <br>
            <div class="text1 col-sm-12 col-md-12 col-lg-12 col-xg-12" id="geografia">
                <div class="division-primary" style="text-align:center;">
                    <h3>População</h3>
                </div>
                <div class="texto-primary">
                    <p>População estimada -2019 <strong> 49.979 </strong> pessoas</p>
                    <p>População no útimo censo -2010 <strong> 46.654 </strong> pessoas</p>
                    <p>Densidade demográfica -2010 <strong> 14,45 </strong> hab/km²</p>
                </div>
            </div>
            <div class="text1 col-sm-12 col-md-12 col-lg-12 col-xg-12" id="geografia">
                <div class="division-primary" style="text-align:center;">
                    <h3>Trabalho e Rendimento</h3>
                </div>
                <div class="texto-primary">
                    <p>Salário médio mensal dos trabalhadores formais -2017 <strong> 1,7 </strong> salários mínimos</p>
                    <p>Pessoal ocupado -2017 <strong> 8.444 </strong> pessoas</p>
                    <p>População ocupada -2017 <strong> 16,8 </strong> %</p>
                    <p>Percentual da população com rendimento nominal mensal per capita de até 1/2 salário mínimo -2010 <strong> 41,4 </strong> %</p>
                </div>
            </div>
            @include('/layout/footer')
            <br>
        </div>
    </div>
</div>
{{-- ////////////////////////////////////////////////////////////////////////////////// --}}
<div class="modal fade turismo" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <br>
            <div class="text1" id="turismo">
                <div class="division-primary" style="text-align:center;">
                    <h3>Turismo</h3>
                </div>
                <div class="texto-primary">
                    <p>Teste</p>
                </div>
            </div>
            <div class="text1 col-sm-12 col-md-12 col-lg-12 col-xg-12" id="turismo">
                <div class="division-primary" style="text-align:center;">
                    <h3>Trabalho e Rendimento</h3>
                </div>

            </div>
            @include('/layout/footer')
            <br>
        </div>
    </div>
</div>

