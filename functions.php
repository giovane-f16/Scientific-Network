<?php 
global $wpdb;

$tabela_nome = $wpdb->prefix.'users';
$tabela_nome1 = $wpdb->prefix.'usermeta';

if(!empty($_POST['botaoDadosCadastrados'])){
    if (!empty($_POST['nome']) && !empty($_POST['emailCadastro']) && !empty($_POST['senhaCadastro'])) {
        $nome = sanitize_text_field($_POST['nome']);
        $emailCadastro = sanitize_text_field($_POST['emailCadastro']);
        $senhaCadastro = sanitize_email($_POST['senhaCadastro']);
        $hash = md5($senhaCadastro);
        $data = date('Y-m-d H:m:s');
        $wpdb->insert($tabela_nome, array(
            'user_login'          => $nome,
            'user_pass'           => $hash,
            'user_nicename'       => $nome,
            'user_email'          => $emailCadastro,
            'user_url'            => '',
            'user_registered'     => $data,
            'user_activation_key' => '',
            'user_status'         => '0',
            'display_name'        => $nome
        ));
    
        $ultimoid = $wpdb->insert_id;
        $inserido = $wpdb->insert($tabela_nome1, array(
            'umeta_id' => NULL,
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
function dadosSelect(){
    echo "<pre>";
    global $wpdb; 
    $tabela_nome = $wpdb->prefix.'users';
    $resultado = $wpdb->get_results("SELECT * FROM $tabela_nome ORDER BY ID ASC");
    foreach($resultado as $valor){
            echo $valor->ID;
            echo "<br>";
            echo $valor->user_login;
            echo "<br>";
            echo $valor->user_email;
            echo "<br>";
            echo date('d/m/Y H:m:s', strtotime($valor->user_registered));
            echo "<br><br>";
    }
    return $valor;
}

?>