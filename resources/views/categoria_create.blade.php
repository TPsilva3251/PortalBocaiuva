@include('/layout/template')

<form action="{{ route('create_categoria') }}" method="post">
    @csrf
    <input type="text" name="nome">

    <button type="submit" class="btn btn-success" id="submit">Salvar</button>

</form>
