@include('/layout/template')
<div class="imagen col-sm-12 col-md-12 col-lg-12 col-xg-12" style="background-color: #f8f9fa">
    <img src="/imagens/portal.png" class="center">
    <br><br>
</div>

<div class="btn-group btn-group-toggle  col-sm-12 col-md-12 col-lg-12 col-xg-12">
    <a href="/historia" class="btn btn-primary">História</a>
    <a href="/dados_demograficos" class="btn btn-primary">Dados Demográficos</a>
    <a href="/pontos_turisticos" class="btn btn-primary">Pontos Turísticos</a>
    <a href="/categorias" class="btn btn-primary">Categorias</a>
    <a href="/parceiro_create" class="btn btn-primary">Parceiro</a>
    <a href="/parceiro_index" class="btn btn-primary">Parceiro Index</a>
</div>
<br><br><br>
<div class="row">
    <div class="outdor col-9">
        <section>
            @foreach ($parceiros as $parceiro)
                <td>
                    <div class="row g-3">
                        <div class="part_img col-4">
                            <img src="{{ $parceiro->img }}" height="150px" width="250px" >
                        </div>
                        <div class="part_inf col-4" style="margin-top: 1%">
                            <label for="inf"><b>{{ $parceiro->nome }}</b></label>
                            <br>
                            <label for="end" class="end">End:</label>
                            <label for="endereco"><b> {{ $parceiro->endereco }}</b></label>
                            <br>
                            <label style="margin: 1%" for="telefone"><i class="fas fa-phone-alt"></i> (38) 3251-3251 </label>
                            <label style="margin: 1%" for="facebook"><i class="fab fa-facebook-f"></i> Portal Bocaiuva Oficial</label>
                        </div>
                    </div>
                    <br><br>
                </td>
            @endforeach
        </section>
    </div>
    <div class="teste">
        <label for="mais">Mais categorias</label>
        <br><br>
        @foreach ($categorias as $categoria)
            <td>
                <p><a href="#">{{$categoria->nome}}</a></p>
            </td>
        @endforeach
    </div>
</div>
<br><br><br><br><br>
@include('/layout/footer')


