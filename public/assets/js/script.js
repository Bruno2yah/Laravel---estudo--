document.addEventListener("DOMContentLoaded", function() {
    var mediaQuery = window.matchMedia("(max-width: 800px)");
    var img = document.getElementById('img');
    var imgExc = document.getElementById('img-col');
    var imgExc2 = document.getElementById('img-coll');
    
    // Função para lidar com a mudança de estado da mídia
    function handleMediaChange(mediaQuery) {
        if (mediaQuery.matches) {
            // A tela corresponde à regra de mídia
            img.classList.replace('col-4', 'col-12');
            imgExc.classList.remove('col-4');
            imgExc.style.display = 'none'; // Esconde o elemento
            imgExc2.classList.remove('col-4');
            imgExc2.style.display = 'none'; // Esconde o elemento
        } else {
            // A tela não corresponde à regra de mídia
            img.classList.replace('col-12', 'col-4');
            imgExc.classList.add('col-4');
            imgExc.style.display = 'block'; // Aparece o elemento
            imgExc2.classList.add('col-4');
            imgExc2.style.display = 'block'; // Aparece o elemento
        }
    }

    // Chama a função de tratamento inicialmente para verificar o estado atual
    handleMediaChange(mediaQuery);

    // Adiciona um ouvinte para lidar com as alterações futuras na tela
    mediaQuery.addListener(handleMediaChange);
});
