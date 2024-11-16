fetch('search.php?prompt=harry')
    .then(response => response.json())
    .then(data => {
        
        let lista = document.getElementById('resultados');
        lista.innerHTML = '';
        data.forEach(libro => {
            let li = document.createElement('li');
            li.textContent = libro;
            lista.appendChild(li);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });