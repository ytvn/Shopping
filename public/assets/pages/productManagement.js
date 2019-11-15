let selectedIdProduct=''
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function  setIdProduct(id){
    selectedIdProduct=id;
    console.log(selectedIdProduct,'selected product')
}
function confirmDeleteProduct(){
    
    $.ajax({
        url: `/api/admin/product/${selectedIdProduct}`,
        type: 'DELETE',
        success: function(result) {
            location.reload();
        }
    });
}