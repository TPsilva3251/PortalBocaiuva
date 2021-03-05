// index.blade //
$('#basic-addon1').click(function() {
    let valor = $('#s').val();
});
$("#s").keydown(function(e) {
    if (e.keyCode == 13) {
        let valor = $('#s').val();
    }
});
// ---------------------------------------------------------
// template.blade //
$("#search").keydown(function(e) {
    if (e.keyCode == 13) {
        let valor = $('#search').val();
    }
});
// ---------------------------------------------------------