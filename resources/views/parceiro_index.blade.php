@include('/layout/template')
<div class="division-primary">
    <br><br><br>
    <div class="container">
        <section>
            @foreach ($parceiros as $parceiro)
                <td>
                    <div class="form-group ">
                        <input type="text" class="form-control" value="{{$parceiro->nome}}">
                        {{-- <img src="download.jpg" width="215px"> --}}
                    </div>
                </td>
            @endforeach
        </div>
    </section>
    </div>

    <br><br><br>
@include('/layout/footer')
