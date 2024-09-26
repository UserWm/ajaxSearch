buscar= document.getElementById('buscar')
buscar.addEventListener('keyup', function(){
        const data= buscar.value;

                    $.ajax({
                        url:'datos.php',
                        type:'POST',
                        data: {seleccion:data},
                        success: function(res){
                            $('#dato').html(res);
                        }
                    })
}
)