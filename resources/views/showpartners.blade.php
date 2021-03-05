@include('/layout/template')



<div class="container">
    <div class="row justify-content-md-center">
        <div class="row justify-content-md-center">
            <div class="imagen">
                <img src="{{$parceiro->img}}" >
                <br><br><br>
                <div class="nome col-md-auto">
                    <h3>{{$parceiro->nome}}</h3>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row justify-content-md-center">
        <div class="row justify-content-md-center">
            <div class="row g-3">
                <div class="col-6" style="align-items: center">
                    <input type="text" class="form-control" name="endereco"  value="{{$parceiro->endereco}}" >
                    <h5>{{$parceiro->endereco}}</h5>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="email"  value="{{$parceiro->email}}" >
                    <h5>{{$parceiro->email}}</h5>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="face"  value="{{$parceiro->face}}" >
                    <h5>{{$parceiro->face}}</h5>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="face"  value="{{$parceiro->categories->nome}}" > 
                    <h5>{{$parceiro->categories->nome}}</h5>
                </div>
            </div>
        </div>
    </div> --}}
</div>
