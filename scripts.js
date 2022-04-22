// Abrir cadastro
document.getElementById("botaoCadastrar").addEventListener("click", function(){
    document.querySelector(".cadastro").style.display = "flex";
    document.querySelector(".meio").style.display = "none";
})

// Fechar cadastro
document.getElementById("botao_fechar").addEventListener("click", function(){
    document.querySelector(".cadastro").style.display = "none";
    document.querySelector(".meio").style.display = "block";
})