<?php
/**
* Plugin name: Add Hurtownia to your panel
* Description: Dodaje item w panelu administracyjnym o nazwie Hurtownia o pod menu następnie Generator XML, Cennik, Zamówiena, Ustawienia, Pomoc.
*/



require 'config.php';




function add_new_menu()
  {
	    add_menu_page('Hurtownia','Hurtownia','manage_options','new-menu','new_menu_main','dashicons-cart',2);
	    add_submenu_page('new-menu','Generator XML','Generator XML','manage_options','new-menu-sub-archive','new_menu_sub_archive');
	    add_submenu_page('new-menu','Cenniki','Cenniki','manage_options','new-menu-sub-archive','new_menu_sub_archive');
        add_submenu_page('new-menu','Zamówiena','Zamówiena','manage_options','new-menu-sub-archive','new_menu_sub_archive');
        add_submenu_page('new-menu','Ustawienia','Ustawienia','manage_options','new-menu-sub-archive','new_menu_sub_archive');
        add_submenu_page('new-menu','Pomoc','Pomoc','manage_options','new-menu-sub-archive','new_menu_sub_archive');
   }



add_action('admin_menu','add_new_menu');


function new_menu_main()
{

    include 'hello.php';


}

function new_menu_sub_archive()
{
    include 'subhello.php';

}




?>