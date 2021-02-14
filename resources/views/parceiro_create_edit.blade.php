@include('/layout/template')
<form action="{{ route('create_parceiro') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nome" placeholder="nome">
    <input type="text" name="categories_id" placeholder="categories_id">
    <input type="text" name="descricao" placeholder="descricao">
    <input type="text" name="localizacao" placeholder="localizacao">
    <input type="text" name="face" placeholder="face">
    <input type="text" name="insta" placeholder="insta">
    <input type="text" name="whats" placeholder="whats">
    <input type="text" name="email" placeholder="email">
    <br>
    <input type="file" name="img1">
    <br>
    <input type="file" name="img2">
    <br>
    <input type="file" name="img3">
    <br>


    <button type="submit" class="btn btn-success" id="submit">Salvar</button>

</form>
@include('/layout/footer')
