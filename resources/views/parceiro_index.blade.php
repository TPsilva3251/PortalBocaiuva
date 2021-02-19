@include('/layout/template')
<div class="division-primary">
    <br><br><br>
    <div class="container">
        <section>
            @foreach ($parceiros as $parceiro)
                <td>
                    <div class="card">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control" value="{{$parceiro->nome}}">
                            </div>
                            <div class="col-6">
                                <img src="{{$parceiro->img}}" width="350px">
                            </div>
                            <div class="col-6">
                                <iframe src="{{$parceiro->localizacao}}" height="250px" width="350px" frameborder="0"></iframe>
                            </div>

                        </div>
                    </div>
                </td>
            @endforeach
        </div>
    </section>
    </div>

    <br><br><br>
@include('/layout/footer')
