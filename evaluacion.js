buscar= document.getElementById('buscar')
buscar.addEventListener('keyup', function(){
    const data= buscar.value;

    $.ajax({
        url: 'search.php',
        method: 'POST',
        data: { busqueda: query },
        success: function(data) {
            $('#resultado').html(data);
        }
    })
})
           
      

