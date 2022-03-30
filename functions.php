<?php 
// Verificando quando clicar no botão
if(!empty($_POST['botaoDadosCadastrados'])){
    // Verificando campos não preenchidos
    if (!empty($_POST['nome']) AND !empty($_POST['emailCadastro']) AND 
    !empty($_POST['senhaCadastro'])){
        // Atribuindo a variáveis os dados recebidos
        $nome = sanitize_text_field($_POST['nome']);
        $emailCadastro = sanitize_text_field($_POST['emailCadastro']);
        $senhaCadastro = sanitize_email($_POST['senhaCadastro']);

        // Criptografando senha
        $hash = md5($senhaCadastro);

        //Inserindo dados no DB
        global $wpdb;
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