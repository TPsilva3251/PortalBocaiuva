@include('/layout/template')
<form action="{{ route('create_parceiro') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nome" placeholder="nome">
    {{-- <input type="text" name="categories_id" placeholder="categories_id"> --}}
    <select class="form-control input-required"
            id="categoria" name="categories_id" style="width: 25%" >
        {{-- <option value=""></option> --}}
        <option value="" disabled selected>Selecione uma categoria</option>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
        @endforeach
    </select>
    <input type="text" name="descricao" placeholder="descricao">
    <input type="text" name="localizacao" placeholder="localizacao">
    <input type="text" name="face" placeholder="face">
    <input type="text" name="insta" placeholder="insta">
    <input type="text" name="whats" placeholder="whats">
    <input type="text" name="email" placeholder="email">
    <br>
    <div class="input-group mb-3 col-sm-3 col-md-3 col-lg-3 col-xg-3">
        <div class="custom-file">
          <input type="file" class="custom-file-input "  name="img1" >
          <label class="custom-file-label" >Choose file</label>
        </div>
      </div>
    <br>
    <input type="file" name="img2">
    <br>
    <input type="file" name="img3">
    <br>


    <button type="submit" class="btn btn-success" id="submit">Salvar</button>

</form>
@include('/layout/footer')
