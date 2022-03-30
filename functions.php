<?php 
// Verificando quando clicar no botão
if(!empty($_POST['botaoDadosCadastrados'])){
    // Verificando campos não preenchidos
    if (!empty($_POST['nome']) AND !empty($_POST['emailCadastro']) AND 
    !empty($_POST['senhaCadastro'])){
        var_dump($_POST);
    } else{
        echo "Todos os campos devem ser preenchidos";
    }
}
// Função de select
function dadosSelect(){
    echo "<pre>";
    global $wpdb;  // variável global as conexões do DB, os dados e as classes

    $resultado = $wpdb->get_results("SELECT * FROM wp_users ORDER BY ID ASC");

    // loop para pegar cada valor inserido na tabela
    foreach($resultado as $valor){
            echo $valor->ID; // variável $valor recebendo valor da coluna
            echo $valor->user_login;
            echo $valor->user_email;
            echo date('d/m/Y H:m:s', strtotime($valor->user_registered));
    }
    return $valor;
}

?>