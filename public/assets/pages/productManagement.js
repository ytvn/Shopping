let selectedIdProduct=''
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function  setIdProduct(id){
    selectedIdProduct=id;
}
function confirmDeleteProduct(){
    
    $.ajax({
        url: `/api/admin/delete/product/${selectedIdProduct}`,
        type: 'DELETE',
        success: function(result) {
            location.reload();
        }
    });
}


const viewDetailProduct = (productid) => {
    selectedIdProduct = productid;
    $.get(`/api/admin/get/product/${selectedIdProduct}`, (data, status) => {

        let {
            product_id,
            title,
            decription,
            detail,
            category_name,
            category_id,
            src,
            pricespecial,
            priceold,
            discountpercent,
            created_at,
            updated_at
        }
            = data[0]
        // priceold = priceold.replace('.00000', '')
        // pricespecial = pricespecial.replace('.00000', '')

        $('#ProductID').val(product_id)
        $('#ProductIDLablel').val(product_id)
        $('#ProductName').val(title)
        $('#ProductDescription').val(decription)
        $('#ProductDetail').val(detail)
        $('#selectedCate').text(category_name)
        $('#selectedCate').attr('value',category_id)
        $('#oldprice').val(priceold)
        $('#specialprice').val(pricespecial)
        $('#discountpercent').val(discountpercent)
        $('#createdat').val(created_at)
        $('#updatedat').val(updated_at)
        if (src) {
            $('#product-avatar').attr('src', src)
        }else{
            $('#product-avatar').attr('src', '/images/avatar.png')
        }
    });

    
$('#btnSubmitUpdateProduct').click(function (e) {
    let productId = $('#ProductID').val()
    let productName = $('#ProductName').val()
    let productDescription = $('#ProductDescription').val()
    let productDetail = $('#ProductDetail').val()
    let category_id = $('#selectedCate').val()
    let oldPrice = $('#oldprice').val()
    let discount = $('#discountpercent').val()

    //stop submit the form, we will post it manually.
    e.preventDefault();
    // Get form
    var form = $('#fileUploadFormProduct')[0];

    // Create an FormData object 
    var data = new FormData(form);
    // let fileData=$('#file').prop('files')[0]
//    console.log(fileData);
    // console.log($('#file').val());
    // append others fields
    data.append('productId', productId)
    data.append('productName', productName)
    data.append('productDescription', productDescription)
    data.append('productDetail', productDetail)
    data.append('category_id', category_id)
    data.append('oldPrice', oldPrice)
    data.append('discount',discount)
    // disabled the submit button
    $("#btnSubmitUpdate").prop("disabled", true);
    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
       
        url: `/api/admin/update/product`,
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function (data) {
            $("#btnSubmitUpdate").prop("disabled", false);
            location.reload();
        },
        error: function (e) {
            $("#btnSubmitUpdate").prop("disabled", false);
        }
    });

  

});

$(document).ready(function(){
    $("#discountpercent").blur(function(){
        $price = $('#oldprice').val();
        $percent = $('#discountpercent').val();
      $("#specialprice").val((parseFloat($price)/100) * (100-parseInt($percent)));
       
    });
});
}