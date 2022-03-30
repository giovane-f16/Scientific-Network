<?php 
global $wpdb;
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
        // Pegando a data de criação dos dados
        $data = date('Y-m-d H:m:s');
        //Inserindo dados no DB
        $wpdb->insert('wp_users', array(
            'user_nicename' => $nome,
            'user_login' => $emailCadastro,
            'user_pass' => $hash,
            'display_user' => $nome,
            'user_email' => $emailCadastro,
            'user_url' => '',
            'user_registered' => $data,
            'user_activation_key' => '',
            'user_status' => '0'
        ));

        // Quando inserimos usuários na tabela wp_users, precisa inserir alguns dados na tabela wp_usermeta
        $ultimoid = $wpdb->insert_id;
        $inserido = $wpdb->insert('wp_usermeta', array(
            'meta_id' => NULL,
            'user_id' => $ultimoid,
            'meta_key' => 'wp_capabilities',
            'meta_value' => 'a:1:{s:13:"administrator";s:1:"1";}' // permissões do user
        ));

        if($inserido){
            echo "Inserido com sucesso! ";
        } else{
            echo "Ocorreu um erro inesperado ";
        }

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