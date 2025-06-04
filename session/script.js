const bolsonic = document.getElementById("bolsonic");
const imagem  = document.getElementById("image");
bolsonic.addEventListener("click", function(event){
    event.preventDefault();
    imagem.src = "src/bolsonic.jpg";
});

const botinho = document.getElementById("botinho");
botinho.addEventListener("click", function(event){
    event.preventDefault();
    imagem.src = "src/botinho.jpg";
});

const frankenstein = document.getElementById("frankenstein");
frankenstein.addEventListener("click", function(event){
    event.preventDefault();
    imagem.src = "src/frankstein.jfif";
});