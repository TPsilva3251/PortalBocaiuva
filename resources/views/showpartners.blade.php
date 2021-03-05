@include('/layout/template')

<input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" value="{{$parceiro->nome}}" >
<div class="row g-3">

    <div class="col-4">
        <input type="text" class="form-control" name="endereco"  value="{{$parceiro->endereco}}" >
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="email"  value="{{$parceiro->email}}" >
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="face"  value="{{$parceiro->face}}" >
    </div>
    <div class="col-4">
        <input type="text" class="form-control" name="face"  value="{{$parceiro->categorias->nome}}" >
    </div>
</div>