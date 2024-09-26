let input = document.getElementById('search');
let content = document.getElementById('content')

getData()

input.addEventListener('keyup', () => {
    getData();
})


function getData(){
    let search = input.value;
    let url = 'datos.php';

    let form = new FormData();
    form.append('search', search); 

    fetch(url ,{
        method: 'POST',
        body: form
    }).then(response => response.json())
    .then(data => {
        content.innerHTML = data;
    })
}