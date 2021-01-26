function copyTextarea(textarea){
var textarea = document.getElementById(textarea);
     textarea.select(); 
       try {
           // Copiando el texto seleccionado
           var successful = document.execCommand('copy');
       } catch (err) {
           answer.innerHTML = 'Browser no soportado!';
       }
}