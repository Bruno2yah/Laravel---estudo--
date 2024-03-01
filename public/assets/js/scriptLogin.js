document.addEventListener("DOMContentLoaded", function() {
    var mediaQuery = window.matchMedia("(max-width: 800px)");
    var img = document.getElementById('img');
    var imgExc = document.getElementById('img-col');
    
    // Função para lidar com a mudança de estado da mídia
    function handleMediaChange(mediaQuery) {
        if (mediaQuery.matches) {
            // A tela corresponde à regra de mídia
            img.classList.replace('col-6', 'col-12');
            img.classList.replace('w-50', 'w-75');
            imgExc.classList.remove('col-6');
            imgExc.style.display = 'none'; // Esconde o elemento
        } else {
            // A tela não corresponde à regra de mídia
            img.classList.replace('col-12', 'col-6');
            img.classList.replace('w-75', 'w-50');
            imgExc.classList.add('col-6');
            imgExc.style.display = 'block'; // Aparece o elemento
        }
    }

    // Chama a função de tratamento inicialmente para verificar o estado atual
    handleMediaChange(mediaQuery);

    // Adiciona um ouvinte para lidar com as alterações futuras na tela
    mediaQuery.addListener(handleMediaChange);
});
