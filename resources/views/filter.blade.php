<div id="filter">
    <br>
    <form class="form-inline my-2 my-lg-0">
        <div class="input-group-prepend">
            <div class="input-group mb-3">
                <input type="text" id="filter" name="filter" class="form-control" placeholder="O que você procura?" aria-label="Username" aria-describedby="basic-addon1" >
                {{-- <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div> --}}
                <button type="submit" class="btn btn-outline-secondary">Pesquisar</button>
            </div>
        </div>
      </form>
    </form>
</div>
<script>

    $('#basic-addon1').click(function(){
        let valor = $('#filter').val();
    });
    $("#filter").keydown(function (e) {
        if (e.keyCode == 13) {
            let valor = $('#filter').val();
        }
    });
</script>
