<?php

/* 
Plugin Name: zalozrepo
Description: wtyczka tworzy nowy szablon strony z pustym, customowym polem
Author: DSW
Version: 1.0.0
*/

function hideGutenberg() {
    if(isset($_GET['post']) || isset($_POST['post_ID'])) {
        $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    }
    if( !isset( $post_id ) ) return;
    
    remove_post_type_support( 'page', 'editor' );
    remove_post_type_support( 'page', 'thumbnail' );
}

add_action( 'admin_init', 'hideGutenberg' );

?>

<?php
/*
1. załoyć klasę głowną - klasę wtyczki (konstruktor, ściezka)

*/
?>