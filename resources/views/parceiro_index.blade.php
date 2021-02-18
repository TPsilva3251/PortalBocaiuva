@include('/layout/template')
<div class="division-primary">
    <br><br><br>
    <div class="container">
        <section>
            @foreach ($parceiros as $parceiro)
                <td>
                    <div class="form-group ">
                        <input type="text" class="form-control" value="{{$parceiro->nome}}">
                        <img src="\storage\products\6NuaHPUPF315V8q1UX3WtToktTlomEEbdA29as9y.jpeg" width="215px">
                    </div>
                </td>
            @endforeach
        </div>
    </section>
    </div>

    <br><br><br>
@include('/layout/footer')
