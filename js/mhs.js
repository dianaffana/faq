$(document).ready(function(){
    $("#form_mhs").submit(function(){
        var nama=$("nama").val();
        var alamat=$("#alamat").val();
        var email=$("#email").val();
        $.ajax({
            type: "POST",
            url: "controller.php",
            data: {nama:nama,alamat:alamat,email:email},
            dataType: "text",
            cache:false,
            success:
                function(data){
                    $("#hasildata").empty().append(data);
                }
        });
        return false;
    });
});