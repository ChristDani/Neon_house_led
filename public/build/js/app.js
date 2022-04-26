const sendRequest = async(url, method, jsonData) => {
    let respRequest = '';
    var formData = new FormData();
    for (let i in jsonData) {
        // $_POST[$j]
        //$j = i
        formData.append(i, jsonData[i]);
    }
    await fetch(url, {
            method: method,
            body: formData
        }).then(response => response.json())
        .then(data => respRequest = data);
    return respRequest;
}

$(document).ready(function() {
    function copyToClipboard(text) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(text).select();
        document.execCommand("copy");
        $temp.remove();
    }
    //Copied email on 
    $('#a-email').click(function(e) {
        e.preventDefault();
        copyToClipboard($(this).attr('href'));
    });

    $('#btnAddCart').click(async function(e) {
        
        const datos = {
            id: parseInt($(this).attr("data-id")),
            name: $(this).attr("data-name"),
            cant: parseInt(1),
            price: $(this).attr("data-prec"),
            tam: $(this).attr("data-size"),
            img: $(this).attr("data-img"), 
        };

        let response = await sendRequest(URL+"cart/addProduct","POST",datos);
        console.log(response);

        if(response!=true){
            $('#msgToast').find('.toast-body').text("Producto Agregado al Carrito");
         
        }else{
            $('#msgToast').find('.toast-body').text("El producto ya se encuentra en su carrito");
        }
        
        let toast = document.getElementById('msgToast');
        toast = new bootstrap.Toast(toast);
        toast.show();
        
    });

    $('#a-login').click(function(e) {
        e.preventDefault();
        $('#ckb-login').attr('checked', true);
        toogleLoginModal();
    });
    $('#a-register').click(function(e) {
        e.preventDefault();
        $('#ckb-login').attr('checked', false);
        toogleLoginModal();
    });

    function toogleLoginModal() {
        let cbkLogin = $('#ckb-login');
        if (cbkLogin.is(':checked')) {
            $('#form-login').show(0);
            $('#form-register').hide(0);
            $('#a-register').removeClass('active');
            $('#a-login').addClass('active');

        } else {
            $('#form-login').hide(0);
            $('#form-register').show(0);
            $('#a-register').addClass('active');
            $('#a-login').removeClass('active');

        }
    }

});