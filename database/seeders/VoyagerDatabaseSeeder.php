<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoyagerDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DataTypesTableSeeder::class,
            DataRowsTableSeeder::class,
            MenusTableSeeder::class,
            MenuItemsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            PermissionRoleTableSeeder::class,
            SettingsTableSeeder::class,
        ]);



        /* `mazad`.`addresses` */
        $addresses = array();

        /* `mazad`.`address_translations` */
        $address_translations = array();

        /* `mazad`.`answers` */
        $answers = array();

        /* `mazad`.`asks` */
        $asks = array();

        /* `mazad`.`categories` */
        $categories = array();

        /* `mazad`.`comments` */
        $comments = array();

        /* `mazad`.`data_types` */
        $data_types = array(
            array('name' => 'users', 'slug' => 'users', 'display_name_singular' => 'User', 'display_name_plural' => 'Users', 'icon' => 'voyager-person', 'model_name' => 'TCG\\Voyager\\Models\\User', 'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy', 'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', 'description' => NULL, 'generate_permissions' => '1', 'server_side' => '0', 'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 11:54:44'),
            array('name' => 'menus', 'slug' => 'menus', 'display_name_singular' => 'Menu', 'display_name_plural' => 'Menus', 'icon' => 'voyager-list', 'model_name' => 'TCG\\Voyager\\Models\\Menu', 'policy_name' => NULL, 'controller' => '', 'description' => '', 'generate_permissions' => '1', 'server_side' => '0', 'details' => NULL, 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('name' => 'roles', 'slug' => 'roles', 'display_name_singular' => 'Role', 'display_name_plural' => 'Roles', 'icon' => 'voyager-lock', 'model_name' => 'TCG\\Voyager\\Models\\Role', 'policy_name' => NULL, 'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', 'description' => '', 'generate_permissions' => '1', 'server_side' => '0', 'details' => NULL, 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('name' => 'addresses', 'slug' => 'addresses', 'display_name_singular' => 'Address', 'display_name_plural' => 'Addresses', 'icon' => 'voyager-folder', 'model_name' => 'App\\Models\\Address', 'policy_name' => NULL, 'controller' => NULL, 'description' => NULL, 'generate_permissions' => '1', 'server_side' => '1', 'details' => '{"order_column":"id","order_display_column":"id","order_direction":"desc","default_search_key":"id"}', 'created_at' => '2021-09-26 10:41:20', 'updated_at' => '2021-09-26 10:41:20'),
            array('name' => 'address_translations', 'slug' => 'address-translations', 'display_name_singular' => 'Address Translation', 'display_name_plural' => 'Address Translations', 'icon' => 'voyager-folder', 'model_name' => 'App\\Models\\AddressTranslation', 'policy_name' => NULL, 'controller' => NULL, 'description' => NULL, 'generate_permissions' => '1', 'server_side' => '1', 'details' => '{"order_column":"id","order_display_column":"id","order_direction":"desc","default_search_key":"full_address","scope":null}', 'created_at' => '2021-09-26 10:43:12', 'updated_at' => '2021-09-26 10:43:51'),
            array('name' => 'mazads', 'slug' => 'mazads', 'display_name_singular' => 'Mazad', 'display_name_plural' => 'Mazads', 'icon' => 'voyager-folder', 'model_name' => 'App\\Models\\Mazad', 'policy_name' => NULL, 'controller' => NULL, 'description' => NULL, 'generate_permissions' => '1', 'server_side' => '1', 'details' => '{"order_column":"id","order_display_column":"id","order_direction":"desc","default_search_key":"name","scope":null}', 'created_at' => '2021-09-26 10:45:53', 'updated_at' => '2021-09-26 11:58:02'),
            array('name' => 'comments', 'slug' => 'comments', 'display_name_singular' => 'Comment', 'display_name_plural' => 'Comments', 'icon' => 'voyager-folder', 'model_name' => 'App\\Models\\Comment', 'policy_name' => NULL, 'controller' => NULL, 'description' => NULL, 'generate_permissions' => '1', 'server_side' => '1', 'details' => '{"order_column":"id","order_display_column":"id","order_direction":"desc","default_search_key":"price","scope":null}', 'created_at' => '2021-09-26 11:33:08', 'updated_at' => '2021-09-26 11:56:44'),
            array('name' => 'asks', 'slug' => 'asks', 'display_name_singular' => 'Ask', 'display_name_plural' => 'Asks', 'icon' => 'voyager-folder', 'model_name' => 'App\\Models\\Ask', 'policy_name' => NULL, 'controller' => NULL, 'description' => NULL, 'generate_permissions' => '1', 'server_side' => '1', 'details' => '{"order_column":"id","order_display_column":"id","order_direction":"desc","default_search_key":"text","scope":null}', 'created_at' => '2021-09-26 11:34:34', 'updated_at' => '2021-09-26 11:56:02'),
            array('name' => 'answers', 'slug' => 'answers', 'display_name_singular' => 'Answer', 'display_name_plural' => 'Answers', 'icon' => 'voyager-folder', 'model_name' => 'App\\Models\\Answer', 'policy_name' => NULL, 'controller' => NULL, 'description' => NULL, 'generate_permissions' => '1', 'server_side' => '1', 'details' => '{"order_column":"id","order_display_column":"id","order_direction":"desc","default_search_key":"text","scope":null}', 'created_at' => '2021-09-26 11:36:00', 'updated_at' => '2021-09-26 11:55:53'),
            array('name' => 'categories', 'slug' => 'categories', 'display_name_singular' => 'Category', 'display_name_plural' => 'Categories', 'icon' => 'voyager-folder', 'model_name' => 'App\\Models\\Category', 'policy_name' => NULL, 'controller' => NULL, 'description' => NULL, 'generate_permissions' => '1', 'server_side' => '1', 'details' => '{"order_column":"id","order_display_column":"id","order_direction":"desc","default_search_key":"name","scope":null}', 'created_at' => '2021-09-26 11:37:28', 'updated_at' => '2021-09-26 12:13:18'),
            array('name' => 'images', 'slug' => 'images', 'display_name_singular' => 'Image', 'display_name_plural' => 'Images', 'icon' => 'voyager-folder', 'model_name' => 'App\\Models\\Image', 'policy_name' => NULL, 'controller' => NULL, 'description' => NULL, 'generate_permissions' => '1', 'server_side' => '1', 'details' => '{"order_column":"id","order_display_column":"id","order_direction":"desc","default_search_key":"model","scope":null}', 'created_at' => '2021-09-26 11:38:10', 'updated_at' => '2021-09-26 11:38:49'),
            array('name' => 'winners', 'slug' => 'winners', 'display_name_singular' => 'Winner', 'display_name_plural' => 'Winners', 'icon' => 'voyager-folder', 'model_name' => 'App\\Models\\Winner', 'policy_name' => NULL, 'controller' => NULL, 'description' => NULL, 'generate_permissions' => '1', 'server_side' => '1', 'details' => '{"order_column":"id","order_display_column":"id","order_direction":"desc","default_search_key":"user_id","scope":null}', 'created_at' => '2021-09-26 11:39:33', 'updated_at' => '2021-09-26 11:58:23')
        );

        DB::table('data_types')->truncate();
        DB::table('data_types')->insert($data_types);


        /* `mazad`.`data_rows` */
        $data_rows = array(
            array('data_type_id' => '1', 'field' => 'id', 'type' => 'number', 'display_name' => 'ID', 'required' => '1', 'browse' => '1', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '1'),
            array('data_type_id' => '1', 'field' => 'name', 'type' => 'text', 'display_name' => 'Name', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '2'),
            array('data_type_id' => '1', 'field' => 'email', 'type' => 'text', 'display_name' => 'Email', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '3'),
            array('data_type_id' => '1', 'field' => 'password', 'type' => 'password', 'display_name' => 'Password', 'required' => '1', 'browse' => '0', 'read' => '0', 'edit' => '1', 'add' => '1', 'delete' => '0', 'details' => '{"validation":{"rule":"required"}}', 'order' => '4'),
            array('data_type_id' => '1', 'field' => 'remember_token', 'type' => 'text', 'display_name' => 'Remember Token', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '5'),
            array('data_type_id' => '1', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'Created At', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '13'),
            array('data_type_id' => '1', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'Updated At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '14'),
            array('data_type_id' => '1', 'field' => 'avatar', 'type' => 'image', 'display_name' => 'Avatar', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{}', 'order' => '9'),
            array('data_type_id' => '1', 'field' => 'user_belongsto_role_relationship', 'type' => 'relationship', 'display_name' => 'Role', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '0', 'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":"0","taggable":"0"}', 'order' => '10'),
            array('data_type_id' => '1', 'field' => 'user_belongstomany_role_relationship', 'type' => 'relationship', 'display_name' => 'voyager::seeders.data_rows.roles', 'required' => '0', 'browse' => '0', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '0', 'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}', 'order' => '16'),
            array('data_type_id' => '1', 'field' => 'settings', 'type' => 'hidden', 'display_name' => 'Settings', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '17'),
            array('data_type_id' => '2', 'field' => 'id', 'type' => 'number', 'display_name' => 'ID', 'required' => '1', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => NULL, 'order' => '1'),
            array('data_type_id' => '2', 'field' => 'name', 'type' => 'text', 'display_name' => 'Name', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => NULL, 'order' => '2'),
            array('data_type_id' => '2', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'Created At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => NULL, 'order' => '3'),
            array('data_type_id' => '2', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'Updated At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => NULL, 'order' => '4'),
            array('data_type_id' => '3', 'field' => 'id', 'type' => 'number', 'display_name' => 'ID', 'required' => '1', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => NULL, 'order' => '1'),
            array('data_type_id' => '3', 'field' => 'name', 'type' => 'text', 'display_name' => 'Name', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => NULL, 'order' => '2'),
            array('data_type_id' => '3', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'Created At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => NULL, 'order' => '3'),
            array('data_type_id' => '3', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'Updated At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => NULL, 'order' => '4'),
            array('data_type_id' => '3', 'field' => 'display_name', 'type' => 'text', 'display_name' => 'Display Name', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => NULL, 'order' => '5'),
            array('data_type_id' => '1', 'field' => 'role_id', 'type' => 'text', 'display_name' => 'Role', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{}', 'order' => '15'),
            array('data_type_id' => '4', 'field' => 'id', 'type' => 'text', 'display_name' => 'Id', 'required' => '1', 'browse' => '1', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '1'),
            array('data_type_id' => '4', 'field' => 'user_id', 'type' => 'text', 'display_name' => 'User Id', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '2'),
            array('data_type_id' => '4', 'field' => 'building', 'type' => 'text', 'display_name' => 'Building', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '3'),
            array('data_type_id' => '4', 'field' => 'floor', 'type' => 'text', 'display_name' => 'Floor', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '4'),
            array('data_type_id' => '4', 'field' => 'apartment_number', 'type' => 'text', 'display_name' => 'Apartment Number', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '5'),
            array('data_type_id' => '4', 'field' => 'lat', 'type' => 'text', 'display_name' => 'Lat', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{}', 'order' => '6'),
            array('data_type_id' => '4', 'field' => 'long', 'type' => 'text', 'display_name' => 'Long', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{}', 'order' => '7'),
            array('data_type_id' => '4', 'field' => 'type', 'type' => 'text', 'display_name' => 'Type', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"home":"home","options":{"home":"home","work":"work"}}', 'order' => '8'),
            array('data_type_id' => '4', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'Created At', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '0', 'delete' => '1', 'details' => '{}', 'order' => '9'),
            array('data_type_id' => '4', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'Updated At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '10'),
            array('data_type_id' => '5', 'field' => 'id', 'type' => 'text', 'display_name' => 'Id', 'required' => '1', 'browse' => '1', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '1'),
            array('data_type_id' => '5', 'field' => 'address_id', 'type' => 'text', 'display_name' => 'Address Id', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '2'),
            array('data_type_id' => '5', 'field' => 'country', 'type' => 'text', 'display_name' => 'Country', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '3'),
            array('data_type_id' => '5', 'field' => 'state', 'type' => 'text', 'display_name' => 'State', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '4'),
            array('data_type_id' => '5', 'field' => 'district', 'type' => 'text', 'display_name' => 'District', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '5'),
            array('data_type_id' => '5', 'field' => 'street', 'type' => 'text', 'display_name' => 'Street', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '6'),
            array('data_type_id' => '5', 'field' => 'full_address', 'type' => 'text', 'display_name' => 'Full Address', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '7'),
            array('data_type_id' => '5', 'field' => 'locale', 'type' => 'text', 'display_name' => 'Locale', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"en":"en","options":{"en":"en","ar":"ar"}}', 'order' => '8'),
            array('data_type_id' => '5', 'field' => 'address_translation_belongsto_address_relationship', 'type' => 'relationship', 'display_name' => 'addresses', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"model":"App\\\\Models\\\\Address","table":"addresses","type":"belongsTo","column":"address_id","key":"id","label":"type","pivot_table":"address_translations","pivot":"0","taggable":"0"}', 'order' => '9'),
            array('data_type_id' => '6', 'field' => 'id', 'type' => 'text', 'display_name' => 'Id', 'required' => '1', 'browse' => '1', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '1'),
            array('data_type_id' => '6', 'field' => 'name', 'type' => 'text', 'display_name' => 'Name', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '2'),
            array('data_type_id' => '6', 'field' => 'details', 'type' => 'text_area', 'display_name' => 'Details', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '3'),
            array('data_type_id' => '6', 'field' => 'price', 'type' => 'number', 'display_name' => 'Price', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '6'),
            array('data_type_id' => '6', 'field' => 'price_min_plus', 'type' => 'number', 'display_name' => 'Price Min Plus', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '7'),
            array('data_type_id' => '6', 'field' => 'category_id', 'type' => 'text', 'display_name' => 'Category Id', 'required' => '0', 'browse' => '0', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '8'),
            array('data_type_id' => '6', 'field' => 'user_id', 'type' => 'text', 'display_name' => 'User Id', 'required' => '0', 'browse' => '0', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '9'),
            array('data_type_id' => '6', 'field' => 'from', 'type' => 'timestamp', 'display_name' => 'From', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '10'),
            array('data_type_id' => '6', 'field' => 'to', 'type' => 'timestamp', 'display_name' => 'To', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '11'),
            array('data_type_id' => '6', 'field' => 'status', 'type' => 'select_dropdown', 'display_name' => 'Status', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"1":"True","options":{"0":"False","1":"True"}}', 'order' => '12'),
            array('data_type_id' => '6', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'Created At', 'required' => '0', 'browse' => '0', 'read' => '1', 'edit' => '1', 'add' => '0', 'delete' => '1', 'details' => '{}', 'order' => '13'),
            array('data_type_id' => '6', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'Updated At', 'required' => '0', 'browse' => '0', 'read' => '1', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '14'),
            array('data_type_id' => '6', 'field' => 'mazad_belongsto_user_relationship', 'type' => 'relationship', 'display_name' => 'users', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"model":"App\\\\Models\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"address_translations","pivot":"0","taggable":"0"}', 'order' => '4'),
            array('data_type_id' => '6', 'field' => 'mazad_belongsto_category_relationship', 'type' => 'relationship', 'display_name' => 'categories', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"model":"App\\\\Models\\\\Category","table":"categories","type":"belongsTo","column":"category_id","key":"id","label":"name","pivot_table":"address_translations","pivot":"0","taggable":"0"}', 'order' => '5'),
            array('data_type_id' => '7', 'field' => 'id', 'type' => 'text', 'display_name' => 'Id', 'required' => '1', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '1'),
            array('data_type_id' => '7', 'field' => 'user_id', 'type' => 'number', 'display_name' => 'User Id', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '2'),
            array('data_type_id' => '7', 'field' => 'mazad_id', 'type' => 'number', 'display_name' => 'Mazad Id', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '3'),
            array('data_type_id' => '7', 'field' => 'price', 'type' => 'number', 'display_name' => 'Price', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '4'),
            array('data_type_id' => '7', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'Created At', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '0', 'delete' => '1', 'details' => '{}', 'order' => '7'),
            array('data_type_id' => '7', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'Updated At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '8'),
            array('data_type_id' => '7', 'field' => 'comment_belongsto_user_relationship', 'type' => 'relationship', 'display_name' => 'users', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"model":"App\\\\Models\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"address_translations","pivot":"0","taggable":"0"}', 'order' => '5'),
            array('data_type_id' => '7', 'field' => 'comment_belongsto_mazad_relationship', 'type' => 'relationship', 'display_name' => 'mazads', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"model":"App\\\\Models\\\\Mazad","table":"mazads","type":"belongsTo","column":"mazad_id","key":"id","label":"name","pivot_table":"address_translations","pivot":"0","taggable":"0"}', 'order' => '6'),
            array('data_type_id' => '8', 'field' => 'id', 'type' => 'text', 'display_name' => 'Id', 'required' => '1', 'browse' => '1', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '1'),
            array('data_type_id' => '8', 'field' => 'user_id', 'type' => 'number', 'display_name' => 'User Id', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '2'),
            array('data_type_id' => '8', 'field' => 'mazad_id', 'type' => 'number', 'display_name' => 'Mazad Id', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '3'),
            array('data_type_id' => '8', 'field' => 'text', 'type' => 'text_area', 'display_name' => 'Text', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '4'),
            array('data_type_id' => '8', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'Created At', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '0', 'delete' => '1', 'details' => '{}', 'order' => '5'),
            array('data_type_id' => '8', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'Updated At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '6'),
            array('data_type_id' => '8', 'field' => 'ask_belongsto_user_relationship', 'type' => 'relationship', 'display_name' => 'users', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"model":"App\\\\Models\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"address_translations","pivot":"0","taggable":"0"}', 'order' => '7'),
            array('data_type_id' => '8', 'field' => 'ask_belongsto_mazad_relationship', 'type' => 'relationship', 'display_name' => 'mazads', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"model":"App\\\\Models\\\\Mazad","table":"mazads","type":"belongsTo","column":"mazad_id","key":"id","label":"name","pivot_table":"address_translations","pivot":"0","taggable":"0"}', 'order' => '8'),
            array('data_type_id' => '9', 'field' => 'id', 'type' => 'text', 'display_name' => 'Id', 'required' => '1', 'browse' => '1', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '1'),
            array('data_type_id' => '9', 'field' => 'user_id', 'type' => 'number', 'display_name' => 'User Id', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '2'),
            array('data_type_id' => '9', 'field' => 'ask_id', 'type' => 'number', 'display_name' => 'Ask Id', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '3'),
            array('data_type_id' => '9', 'field' => 'text', 'type' => 'text_area', 'display_name' => 'Text', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '4'),
            array('data_type_id' => '9', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'Created At', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '0', 'delete' => '1', 'details' => '{}', 'order' => '5'),
            array('data_type_id' => '9', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'Updated At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '6'),
            array('data_type_id' => '9', 'field' => 'answer_belongsto_user_relationship', 'type' => 'relationship', 'display_name' => 'users', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"model":"App\\\\Models\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"address_translations","pivot":"0","taggable":"0"}', 'order' => '7'),
            array('data_type_id' => '9', 'field' => 'answer_belongsto_ask_relationship', 'type' => 'relationship', 'display_name' => 'asks', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"model":"App\\\\Models\\\\Ask","table":"asks","type":"belongsTo","column":"ask_id","key":"id","label":"text","pivot_table":"address_translations","pivot":"0","taggable":"0"}', 'order' => '8'),
            array('data_type_id' => '10', 'field' => 'id', 'type' => 'text', 'display_name' => 'Id', 'required' => '1', 'browse' => '1', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '1'),
            array('data_type_id' => '10', 'field' => 'name', 'type' => 'text', 'display_name' => 'Name', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '2'),
            array('data_type_id' => '10', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'Created At', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '0', 'delete' => '1', 'details' => '{}', 'order' => '4'),
            array('data_type_id' => '10', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'Updated At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '5'),
            array('data_type_id' => '11', 'field' => 'id', 'type' => 'text', 'display_name' => 'Id', 'required' => '1', 'browse' => '1', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '1'),
            array('data_type_id' => '11', 'field' => 'photo', 'type' => 'image', 'display_name' => 'Photo', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '2'),
            array('data_type_id' => '11', 'field' => 'item_id', 'type' => 'number', 'display_name' => 'Item Id', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '3'),
            array('data_type_id' => '11', 'field' => 'model', 'type' => 'text', 'display_name' => 'Model', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '4'),
            array('data_type_id' => '11', 'field' => 'image_belongsto_mazad_relationship', 'type' => 'relationship', 'display_name' => 'mazads', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"model":"App\\\\Models\\\\Mazad","table":"mazads","type":"belongsTo","column":"item_id","key":"id","label":"name","pivot_table":"address_translations","pivot":"0","taggable":"0"}', 'order' => '5'),
            array('data_type_id' => '12', 'field' => 'id', 'type' => 'text', 'display_name' => 'Id', 'required' => '1', 'browse' => '1', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '1'),
            array('data_type_id' => '12', 'field' => 'user_id', 'type' => 'number', 'display_name' => 'User Id', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '2'),
            array('data_type_id' => '12', 'field' => 'mazad_id', 'type' => 'number', 'display_name' => 'Mazad Id', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '3'),
            array('data_type_id' => '12', 'field' => 'price', 'type' => 'number', 'display_name' => 'Price', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '4'),
            array('data_type_id' => '12', 'field' => 'created_at', 'type' => 'timestamp', 'display_name' => 'Created At', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '0', 'delete' => '1', 'details' => '{}', 'order' => '7'),
            array('data_type_id' => '12', 'field' => 'updated_at', 'type' => 'timestamp', 'display_name' => 'Updated At', 'required' => '0', 'browse' => '0', 'read' => '0', 'edit' => '0', 'add' => '0', 'delete' => '0', 'details' => '{}', 'order' => '8'),
            array('data_type_id' => '12', 'field' => 'winner_belongsto_user_relationship', 'type' => 'relationship', 'display_name' => 'users', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"model":"App\\\\Models\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"address_translations","pivot":"0","taggable":"0"}', 'order' => '5'),
            array('data_type_id' => '12', 'field' => 'winner_belongsto_mazad_relationship', 'type' => 'relationship', 'display_name' => 'mazads', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"model":"App\\\\Models\\\\Mazad","table":"mazads","type":"belongsTo","column":"mazad_id","key":"id","label":"name","pivot_table":"address_translations","pivot":"0","taggable":"0"}', 'order' => '6'),
            array('data_type_id' => '1', 'field' => 'email_verified_at', 'type' => 'timestamp', 'display_name' => 'Email Verified At', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{}', 'order' => '7'),
            array('data_type_id' => '1', 'field' => 'phone', 'type' => 'text', 'display_name' => 'Phone', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{}', 'order' => '6'),
            array('data_type_id' => '1', 'field' => 'type', 'type' => 'select_dropdown', 'display_name' => 'Type', 'required' => '1', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"user":"user","options":{"user":"user","admin":"admin"}}', 'order' => '8'),
            array('data_type_id' => '1', 'field' => 'gender', 'type' => 'text', 'display_name' => 'Gender', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{}', 'order' => '12'),
            array('data_type_id' => '1', 'field' => 'birth_date', 'type' => 'text', 'display_name' => 'Birth Date', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{}', 'order' => '11'),
            array('data_type_id' => '1', 'field' => 'code', 'type' => 'text', 'display_name' => 'Code', 'required' => '0', 'browse' => '0', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{}', 'order' => '18'),
            array('data_type_id' => '10', 'field' => 'image', 'type' => 'image', 'display_name' => 'Image', 'required' => '0', 'browse' => '1', 'read' => '1', 'edit' => '1', 'add' => '1', 'delete' => '1', 'details' => '{"validation":{"rule":"required"}}', 'order' => '3')
        );

        DB::table('data_rows')->truncate();
        DB::table('data_rows')->insert($data_rows);

        /* `mazad`.`failed_jobs` */
        $failed_jobs = array();

        /* `mazad`.`images` */
        $images = array();

        /* `mazad`.`mazads` */
        $mazads = array();

        /* `mazad`.`menus` */
        $menus = array(
            array('name' => 'admin', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32')
        );

        DB::table('menus')->truncate();
        DB::table('menus')->insert($menus);

        /* `mazad`.`menu_items` */
        $menu_items = array(
            array('menu_id' => '1', 'title' => 'Dashboard', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-boat', 'color' => NULL, 'parent_id' => NULL, 'order' => '1', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32', 'route' => 'voyager.dashboard', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Media', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-images', 'color' => NULL, 'parent_id' => NULL, 'order' => '7', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 11:45:29', 'route' => 'voyager.media.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Users', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-person', 'color' => NULL, 'parent_id' => NULL, 'order' => '3', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32', 'route' => 'voyager.users.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Roles', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-lock', 'color' => NULL, 'parent_id' => NULL, 'order' => '2', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32', 'route' => 'voyager.roles.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Tools', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-tools', 'color' => NULL, 'parent_id' => NULL, 'order' => '9', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 11:45:32', 'route' => NULL, 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Menu Builder', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-list', 'color' => NULL, 'parent_id' => '5', 'order' => '1', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 11:43:39', 'route' => 'voyager.menus.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Database', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-data', 'color' => NULL, 'parent_id' => '5', 'order' => '2', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 11:43:39', 'route' => 'voyager.database.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Compass', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-compass', 'color' => NULL, 'parent_id' => '5', 'order' => '3', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 11:43:39', 'route' => 'voyager.compass.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'BREAD', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-bread', 'color' => NULL, 'parent_id' => '5', 'order' => '4', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 11:43:55', 'route' => 'voyager.bread.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Settings', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-settings', 'color' => NULL, 'parent_id' => NULL, 'order' => '8', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 11:45:29', 'route' => 'voyager.settings.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Addresses', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-folder', 'color' => NULL, 'parent_id' => '22', 'order' => '1', 'created_at' => '2021-09-26 10:41:20', 'updated_at' => '2021-09-26 11:43:40', 'route' => 'voyager.addresses.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Address Translations', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-folder', 'color' => NULL, 'parent_id' => '22', 'order' => '2', 'created_at' => '2021-09-26 10:43:12', 'updated_at' => '2021-09-26 11:43:45', 'route' => 'voyager.address-translations.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Mazads', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-folder', 'color' => NULL, 'parent_id' => '23', 'order' => '1', 'created_at' => '2021-09-26 10:45:53', 'updated_at' => '2021-09-26 11:44:28', 'route' => 'voyager.mazads.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Comments', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-folder', 'color' => NULL, 'parent_id' => '23', 'order' => '3', 'created_at' => '2021-09-26 11:33:08', 'updated_at' => '2021-09-26 11:44:43', 'route' => 'voyager.comments.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Asks', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-folder', 'color' => NULL, 'parent_id' => '23', 'order' => '4', 'created_at' => '2021-09-26 11:34:34', 'updated_at' => '2021-09-26 11:44:43', 'route' => 'voyager.asks.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Answers', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-folder', 'color' => NULL, 'parent_id' => '23', 'order' => '5', 'created_at' => '2021-09-26 11:36:00', 'updated_at' => '2021-09-26 11:44:43', 'route' => 'voyager.answers.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Categories', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-folder', 'color' => NULL, 'parent_id' => NULL, 'order' => '5', 'created_at' => '2021-09-26 11:37:28', 'updated_at' => '2021-09-26 11:45:29', 'route' => 'voyager.categories.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Images', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-folder', 'color' => NULL, 'parent_id' => '23', 'order' => '2', 'created_at' => '2021-09-26 11:38:10', 'updated_at' => '2021-09-26 11:44:43', 'route' => 'voyager.images.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Winners', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-folder', 'color' => NULL, 'parent_id' => '23', 'order' => '6', 'created_at' => '2021-09-26 11:39:33', 'updated_at' => '2021-09-26 11:44:47', 'route' => 'voyager.winners.index', 'parameters' => NULL),
            array('menu_id' => '1', 'title' => 'Addresses', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-double-down', 'color' => '#000000', 'parent_id' => NULL, 'order' => '4', 'created_at' => '2021-09-26 11:43:32', 'updated_at' => '2021-09-26 11:46:27', 'route' => NULL, 'parameters' => ''),
            array('menu_id' => '1', 'title' => 'Mazad', 'url' => '', 'target' => '_self', 'icon_class' => 'voyager-double-down', 'color' => '#000000', 'parent_id' => NULL, 'order' => '6', 'created_at' => '2021-09-26 11:44:22', 'updated_at' => '2021-09-26 11:46:37', 'route' => NULL, 'parameters' => '')
        );

        DB::table('menu_items')->truncate();
        DB::table('menu_items')->insert($menu_items);

        /* `mazad`.`migrations` */
        $migrations = array(
            array('migration' => '2014_10_12_000000_create_users_table', 'batch' => '1'),
            array('migration' => '2014_10_12_100000_create_password_resets_table', 'batch' => '1'),
            array('migration' => '2016_01_01_000000_add_voyager_user_fields', 'batch' => '1'),
            array('migration' => '2016_01_01_000000_create_data_types_table', 'batch' => '1'),
            array('migration' => '2016_05_19_173453_create_menu_table', 'batch' => '1'),
            array('migration' => '2016_06_01_000001_create_oauth_auth_codes_table', 'batch' => '1'),
            array('migration' => '2016_06_01_000002_create_oauth_access_tokens_table', 'batch' => '1'),
            array('migration' => '2016_06_01_000003_create_oauth_refresh_tokens_table', 'batch' => '1'),
            array('migration' => '2016_06_01_000004_create_oauth_clients_table', 'batch' => '1'),
            array('migration' => '2016_06_01_000005_create_oauth_personal_access_clients_table', 'batch' => '1'),
            array('migration' => '2016_10_21_190000_create_roles_table', 'batch' => '1'),
            array('migration' => '2016_10_21_190000_create_settings_table', 'batch' => '1'),
            array('migration' => '2016_11_30_135954_create_permission_table', 'batch' => '1'),
            array('migration' => '2016_11_30_141208_create_permission_role_table', 'batch' => '1'),
            array('migration' => '2016_12_26_201236_data_types__add__server_side', 'batch' => '1'),
            array('migration' => '2017_01_13_000000_add_route_to_menu_items_table', 'batch' => '1'),
            array('migration' => '2017_01_14_005015_create_translations_table', 'batch' => '1'),
            array('migration' => '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 'batch' => '1'),
            array('migration' => '2017_03_06_000000_add_controller_to_data_types_table', 'batch' => '1'),
            array('migration' => '2017_04_21_000000_add_order_to_data_rows_table', 'batch' => '1'),
            array('migration' => '2017_07_05_210000_add_policyname_to_data_types_table', 'batch' => '1'),
            array('migration' => '2017_08_05_000000_add_group_to_settings_table', 'batch' => '1'),
            array('migration' => '2017_11_26_013050_add_user_role_relationship', 'batch' => '1'),
            array('migration' => '2017_11_26_015000_create_user_roles_table', 'batch' => '1'),
            array('migration' => '2018_03_11_000000_add_user_settings', 'batch' => '1'),
            array('migration' => '2018_03_14_000000_add_details_to_data_types_table', 'batch' => '1'),
            array('migration' => '2018_03_16_000000_make_settings_value_nullable', 'batch' => '1'),
            array('migration' => '2019_08_19_000000_create_failed_jobs_table', 'batch' => '1'),
            array('migration' => '2021_06_27_225315_create_images_table', 'batch' => '1'),
            array('migration' => '2021_06_29_214248_create_user_translations_table', 'batch' => '1'),
            array('migration' => '2021_07_01_091457_create_addresses_table', 'batch' => '1'),
            array('migration' => '2021_07_01_093004_create_address_translations_table', 'batch' => '1'),
            array('migration' => '2021_09_24_180857_create_mazads_table', 'batch' => '1'),
            array('migration' => '2021_09_24_180950_create_categories_table', 'batch' => '1'),
            array('migration' => '2021_09_24_181803_create_answers_table', 'batch' => '1'),
            array('migration' => '2021_09_24_181813_create_asks_table', 'batch' => '1'),
            array('migration' => '2021_09_24_181823_create_winners_table', 'batch' => '1'),
            array('migration' => '2021_09_24_181831_create_comments_table', 'batch' => '1')
        );

        /* `mazad`.`oauth_access_tokens` */
        $oauth_access_tokens = array();

        /* `mazad`.`oauth_auth_codes` */
        $oauth_auth_codes = array();

        /* `mazad`.`oauth_clients` */
        $oauth_clients = array(
            array('user_id' => NULL, 'name' => 'Laravel Personal Access Client', 'secret' => 'oebbZa6JLg5MjmtDZ0BCPbXsC41YRjTF1yODAyVg', 'provider' => NULL, 'redirect' => 'http://localhost', 'personal_access_client' => '1', 'password_client' => '0', 'revoked' => '0', 'created_at' => '2021-09-26 10:41:41', 'updated_at' => '2021-09-26 10:41:41'),
            array('user_id' => NULL, 'name' => 'Laravel Password Grant Client', 'secret' => 'tVPXZr5JYJlPvqogEIF8hyWcidBJXEgIZ67UZZU5', 'provider' => 'users', 'redirect' => 'http://localhost', 'personal_access_client' => '0', 'password_client' => '1', 'revoked' => '0', 'created_at' => '2021-09-26 10:41:41', 'updated_at' => '2021-09-26 10:41:41')
        );

        // DB::table('oauth_clients')->truncate();
        // DB::table('oauth_clients')->insert($oauth_clients);

        /* `mazad`.`oauth_personal_access_clients` */
        $oauth_personal_access_clients = array(
            array('client_id' => '1', 'created_at' => '2021-09-26 10:41:41', 'updated_at' => '2021-09-26 10:41:41')
        );

        // DB::table('oauth_personal_access_clients')->truncate();
        // DB::table('oauth_personal_access_clients')->insert($oauth_personal_access_clients);

        /* `mazad`.`oauth_refresh_tokens` */
        $oauth_refresh_tokens = array();

        /* `mazad`.`password_resets` */
        $password_resets = array();

        /* `mazad`.`permissions` */
        $permissions = array(
            array('key' => 'browse_admin', 'table_name' => NULL, 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'browse_bread', 'table_name' => NULL, 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'browse_database', 'table_name' => NULL, 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'browse_media', 'table_name' => NULL, 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'browse_compass', 'table_name' => NULL, 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'browse_menus', 'table_name' => 'menus', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'read_menus', 'table_name' => 'menus', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'edit_menus', 'table_name' => 'menus', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'add_menus', 'table_name' => 'menus', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'delete_menus', 'table_name' => 'menus', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'browse_roles', 'table_name' => 'roles', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'read_roles', 'table_name' => 'roles', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'edit_roles', 'table_name' => 'roles', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'add_roles', 'table_name' => 'roles', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'delete_roles', 'table_name' => 'roles', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'browse_users', 'table_name' => 'users', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'read_users', 'table_name' => 'users', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'edit_users', 'table_name' => 'users', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'add_users', 'table_name' => 'users', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'delete_users', 'table_name' => 'users', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'browse_settings', 'table_name' => 'settings', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'read_settings', 'table_name' => 'settings', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'edit_settings', 'table_name' => 'settings', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'add_settings', 'table_name' => 'settings', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'delete_settings', 'table_name' => 'settings', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('key' => 'browse_addresses', 'table_name' => 'addresses', 'created_at' => '2021-09-26 10:41:20', 'updated_at' => '2021-09-26 10:41:20'),
            array('key' => 'read_addresses', 'table_name' => 'addresses', 'created_at' => '2021-09-26 10:41:20', 'updated_at' => '2021-09-26 10:41:20'),
            array('key' => 'edit_addresses', 'table_name' => 'addresses', 'created_at' => '2021-09-26 10:41:20', 'updated_at' => '2021-09-26 10:41:20'),
            array('key' => 'add_addresses', 'table_name' => 'addresses', 'created_at' => '2021-09-26 10:41:20', 'updated_at' => '2021-09-26 10:41:20'),
            array('key' => 'delete_addresses', 'table_name' => 'addresses', 'created_at' => '2021-09-26 10:41:20', 'updated_at' => '2021-09-26 10:41:20'),
            array('key' => 'browse_address_translations', 'table_name' => 'address_translations', 'created_at' => '2021-09-26 10:43:12', 'updated_at' => '2021-09-26 10:43:12'),
            array('key' => 'read_address_translations', 'table_name' => 'address_translations', 'created_at' => '2021-09-26 10:43:12', 'updated_at' => '2021-09-26 10:43:12'),
            array('key' => 'edit_address_translations', 'table_name' => 'address_translations', 'created_at' => '2021-09-26 10:43:12', 'updated_at' => '2021-09-26 10:43:12'),
            array('key' => 'add_address_translations', 'table_name' => 'address_translations', 'created_at' => '2021-09-26 10:43:12', 'updated_at' => '2021-09-26 10:43:12'),
            array('key' => 'delete_address_translations', 'table_name' => 'address_translations', 'created_at' => '2021-09-26 10:43:12', 'updated_at' => '2021-09-26 10:43:12'),
            array('key' => 'browse_mazads', 'table_name' => 'mazads', 'created_at' => '2021-09-26 10:45:53', 'updated_at' => '2021-09-26 10:45:53'),
            array('key' => 'read_mazads', 'table_name' => 'mazads', 'created_at' => '2021-09-26 10:45:53', 'updated_at' => '2021-09-26 10:45:53'),
            array('key' => 'edit_mazads', 'table_name' => 'mazads', 'created_at' => '2021-09-26 10:45:53', 'updated_at' => '2021-09-26 10:45:53'),
            array('key' => 'add_mazads', 'table_name' => 'mazads', 'created_at' => '2021-09-26 10:45:53', 'updated_at' => '2021-09-26 10:45:53'),
            array('key' => 'delete_mazads', 'table_name' => 'mazads', 'created_at' => '2021-09-26 10:45:53', 'updated_at' => '2021-09-26 10:45:53'),
            array('key' => 'browse_comments', 'table_name' => 'comments', 'created_at' => '2021-09-26 11:33:08', 'updated_at' => '2021-09-26 11:33:08'),
            array('key' => 'read_comments', 'table_name' => 'comments', 'created_at' => '2021-09-26 11:33:08', 'updated_at' => '2021-09-26 11:33:08'),
            array('key' => 'edit_comments', 'table_name' => 'comments', 'created_at' => '2021-09-26 11:33:08', 'updated_at' => '2021-09-26 11:33:08'),
            array('key' => 'add_comments', 'table_name' => 'comments', 'created_at' => '2021-09-26 11:33:08', 'updated_at' => '2021-09-26 11:33:08'),
            array('key' => 'delete_comments', 'table_name' => 'comments', 'created_at' => '2021-09-26 11:33:08', 'updated_at' => '2021-09-26 11:33:08'),
            array('key' => 'browse_asks', 'table_name' => 'asks', 'created_at' => '2021-09-26 11:34:34', 'updated_at' => '2021-09-26 11:34:34'),
            array('key' => 'read_asks', 'table_name' => 'asks', 'created_at' => '2021-09-26 11:34:34', 'updated_at' => '2021-09-26 11:34:34'),
            array('key' => 'edit_asks', 'table_name' => 'asks', 'created_at' => '2021-09-26 11:34:34', 'updated_at' => '2021-09-26 11:34:34'),
            array('key' => 'add_asks', 'table_name' => 'asks', 'created_at' => '2021-09-26 11:34:34', 'updated_at' => '2021-09-26 11:34:34'),
            array('key' => 'delete_asks', 'table_name' => 'asks', 'created_at' => '2021-09-26 11:34:34', 'updated_at' => '2021-09-26 11:34:34'),
            array('key' => 'browse_answers', 'table_name' => 'answers', 'created_at' => '2021-09-26 11:36:00', 'updated_at' => '2021-09-26 11:36:00'),
            array('key' => 'read_answers', 'table_name' => 'answers', 'created_at' => '2021-09-26 11:36:00', 'updated_at' => '2021-09-26 11:36:00'),
            array('key' => 'edit_answers', 'table_name' => 'answers', 'created_at' => '2021-09-26 11:36:00', 'updated_at' => '2021-09-26 11:36:00'),
            array('key' => 'add_answers', 'table_name' => 'answers', 'created_at' => '2021-09-26 11:36:00', 'updated_at' => '2021-09-26 11:36:00'),
            array('key' => 'delete_answers', 'table_name' => 'answers', 'created_at' => '2021-09-26 11:36:00', 'updated_at' => '2021-09-26 11:36:00'),
            array('key' => 'browse_categories', 'table_name' => 'categories', 'created_at' => '2021-09-26 11:37:28', 'updated_at' => '2021-09-26 11:37:28'),
            array('key' => 'read_categories', 'table_name' => 'categories', 'created_at' => '2021-09-26 11:37:28', 'updated_at' => '2021-09-26 11:37:28'),
            array('key' => 'edit_categories', 'table_name' => 'categories', 'created_at' => '2021-09-26 11:37:28', 'updated_at' => '2021-09-26 11:37:28'),
            array('key' => 'add_categories', 'table_name' => 'categories', 'created_at' => '2021-09-26 11:37:28', 'updated_at' => '2021-09-26 11:37:28'),
            array('key' => 'delete_categories', 'table_name' => 'categories', 'created_at' => '2021-09-26 11:37:28', 'updated_at' => '2021-09-26 11:37:28'),
            array('key' => 'browse_images', 'table_name' => 'images', 'created_at' => '2021-09-26 11:38:10', 'updated_at' => '2021-09-26 11:38:10'),
            array('key' => 'read_images', 'table_name' => 'images', 'created_at' => '2021-09-26 11:38:10', 'updated_at' => '2021-09-26 11:38:10'),
            array('key' => 'edit_images', 'table_name' => 'images', 'created_at' => '2021-09-26 11:38:10', 'updated_at' => '2021-09-26 11:38:10'),
            array('key' => 'add_images', 'table_name' => 'images', 'created_at' => '2021-09-26 11:38:10', 'updated_at' => '2021-09-26 11:38:10'),
            array('key' => 'delete_images', 'table_name' => 'images', 'created_at' => '2021-09-26 11:38:10', 'updated_at' => '2021-09-26 11:38:10'),
            array('key' => 'browse_winners', 'table_name' => 'winners', 'created_at' => '2021-09-26 11:39:33', 'updated_at' => '2021-09-26 11:39:33'),
            array('key' => 'read_winners', 'table_name' => 'winners', 'created_at' => '2021-09-26 11:39:33', 'updated_at' => '2021-09-26 11:39:33'),
            array('key' => 'edit_winners', 'table_name' => 'winners', 'created_at' => '2021-09-26 11:39:33', 'updated_at' => '2021-09-26 11:39:33'),
            array('key' => 'add_winners', 'table_name' => 'winners', 'created_at' => '2021-09-26 11:39:33', 'updated_at' => '2021-09-26 11:39:33'),
            array('key' => 'delete_winners', 'table_name' => 'winners', 'created_at' => '2021-09-26 11:39:33', 'updated_at' => '2021-09-26 11:39:33')
        );

        DB::table('permissions')->truncate();
        DB::table('permissions')->insert($permissions);

        /* `mazad`.`roles` */
        $roles = array(
            array('name' => 'admin', 'display_name' => 'Administrator', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32'),
            array('name' => 'user', 'display_name' => 'Normal User', 'created_at' => '2021-09-26 10:36:32', 'updated_at' => '2021-09-26 10:36:32')
        );

        // DB::table('roles')->truncate();
        // DB::table('roles')->insert($roles);

        /* `mazad`.`permission_role` */
        $permission_role = array(
            array('permission_id' => '1', 'role_id' => '1'),
            array('permission_id' => '2', 'role_id' => '1'),
            array('permission_id' => '3', 'role_id' => '1'),
            array('permission_id' => '4', 'role_id' => '1'),
            array('permission_id' => '5', 'role_id' => '1'),
            array('permission_id' => '6', 'role_id' => '1'),
            array('permission_id' => '7', 'role_id' => '1'),
            array('permission_id' => '8', 'role_id' => '1'),
            array('permission_id' => '9', 'role_id' => '1'),
            array('permission_id' => '10', 'role_id' => '1'),
            array('permission_id' => '11', 'role_id' => '1'),
            array('permission_id' => '12', 'role_id' => '1'),
            array('permission_id' => '13', 'role_id' => '1'),
            array('permission_id' => '14', 'role_id' => '1'),
            array('permission_id' => '15', 'role_id' => '1'),
            array('permission_id' => '16', 'role_id' => '1'),
            array('permission_id' => '17', 'role_id' => '1'),
            array('permission_id' => '18', 'role_id' => '1'),
            array('permission_id' => '19', 'role_id' => '1'),
            array('permission_id' => '20', 'role_id' => '1'),
            array('permission_id' => '21', 'role_id' => '1'),
            array('permission_id' => '22', 'role_id' => '1'),
            array('permission_id' => '23', 'role_id' => '1'),
            array('permission_id' => '24', 'role_id' => '1'),
            array('permission_id' => '25', 'role_id' => '1'),
            array('permission_id' => '26', 'role_id' => '1'),
            array('permission_id' => '27', 'role_id' => '1'),
            array('permission_id' => '28', 'role_id' => '1'),
            array('permission_id' => '29', 'role_id' => '1'),
            array('permission_id' => '30', 'role_id' => '1'),
            array('permission_id' => '31', 'role_id' => '1'),
            array('permission_id' => '32', 'role_id' => '1'),
            array('permission_id' => '33', 'role_id' => '1'),
            array('permission_id' => '34', 'role_id' => '1'),
            array('permission_id' => '35', 'role_id' => '1'),
            array('permission_id' => '36', 'role_id' => '1'),
            array('permission_id' => '37', 'role_id' => '1'),
            array('permission_id' => '38', 'role_id' => '1'),
            array('permission_id' => '39', 'role_id' => '1'),
            array('permission_id' => '40', 'role_id' => '1'),
            array('permission_id' => '41', 'role_id' => '1'),
            array('permission_id' => '42', 'role_id' => '1'),
            array('permission_id' => '43', 'role_id' => '1'),
            array('permission_id' => '44', 'role_id' => '1'),
            array('permission_id' => '45', 'role_id' => '1'),
            array('permission_id' => '46', 'role_id' => '1'),
            array('permission_id' => '47', 'role_id' => '1'),
            array('permission_id' => '48', 'role_id' => '1'),
            array('permission_id' => '49', 'role_id' => '1'),
            array('permission_id' => '50', 'role_id' => '1'),
            array('permission_id' => '51', 'role_id' => '1'),
            array('permission_id' => '52', 'role_id' => '1'),
            array('permission_id' => '53', 'role_id' => '1'),
            array('permission_id' => '54', 'role_id' => '1'),
            array('permission_id' => '55', 'role_id' => '1'),
            array('permission_id' => '56', 'role_id' => '1'),
            array('permission_id' => '57', 'role_id' => '1'),
            array('permission_id' => '58', 'role_id' => '1'),
            array('permission_id' => '59', 'role_id' => '1'),
            array('permission_id' => '60', 'role_id' => '1'),
            array('permission_id' => '61', 'role_id' => '1'),
            array('permission_id' => '62', 'role_id' => '1'),
            array('permission_id' => '63', 'role_id' => '1'),
            array('permission_id' => '64', 'role_id' => '1'),
            array('permission_id' => '65', 'role_id' => '1'),
            array('permission_id' => '66', 'role_id' => '1'),
            array('permission_id' => '67', 'role_id' => '1'),
            array('permission_id' => '68', 'role_id' => '1'),
            array('permission_id' => '69', 'role_id' => '1'),
            array('permission_id' => '70', 'role_id' => '1')
        );

        DB::table('permission_role')->truncate();
        DB::table('permission_role')->insert($permission_role);

        /* `mazad`.`settings` */
        $settings = array(
            array('key' => 'site.title', 'display_name' => 'Site Title', 'value' => 'Site Title', 'details' => '', 'type' => 'text', 'order' => '1', 'group' => 'Site'),
            array('key' => 'site.description', 'display_name' => 'Site Description', 'value' => 'Site Description', 'details' => '', 'type' => 'text', 'order' => '2', 'group' => 'Site'),
            array('key' => 'site.logo', 'display_name' => 'Site Logo', 'value' => '', 'details' => '', 'type' => 'image', 'order' => '3', 'group' => 'Site'),
            array('key' => 'site.google_analytics_tracking_id', 'display_name' => 'Google Analytics Tracking ID', 'value' => '', 'details' => '', 'type' => 'text', 'order' => '4', 'group' => 'Site'),
            array('key' => 'admin.bg_image', 'display_name' => 'Admin Background Image', 'value' => '', 'details' => '', 'type' => 'image', 'order' => '5', 'group' => 'Admin'),
            array('key' => 'admin.title', 'display_name' => 'Admin Title', 'value' => 'Voyager', 'details' => '', 'type' => 'text', 'order' => '1', 'group' => 'Admin'),
            array('key' => 'admin.description', 'display_name' => 'Admin Description', 'value' => 'Welcome to Voyager. The Missing Admin for Laravel', 'details' => '', 'type' => 'text', 'order' => '2', 'group' => 'Admin'),
            array('key' => 'admin.loader', 'display_name' => 'Admin Loader', 'value' => '', 'details' => '', 'type' => 'image', 'order' => '3', 'group' => 'Admin'),
            array('key' => 'admin.icon_image', 'display_name' => 'Admin Icon Image', 'value' => '', 'details' => '', 'type' => 'image', 'order' => '4', 'group' => 'Admin'),
            array('key' => 'admin.google_analytics_client_id', 'display_name' => 'Google Analytics Client ID (used for admin dashboard)', 'value' => '', 'details' => '', 'type' => 'text', 'order' => '1', 'group' => 'Admin')
        );

        // DB::table('settings')->truncate();
        // DB::table('settings')->insert($settings);

        /* `mazad`.`translations` */
        $translations = array();

        /* `mazad`.`users` */
        $users = array(
            array('role_id' => '1', 'name' => 'Admin', 'email' => 'admin@admin.com', 'avatar' => 'users/default.png', 'email_verified_at' => '2021-09-26 13:59:53', 'password' => '$2y$10$.oQYH1YIq4cmGoINdq8Tq.J2utwblFdSqZdWv0rOkxIdJ8QYCdY6y', 'phone' => NULL, 'type' => 'admin', 'gender' => NULL, 'birth_date' => NULL, 'code' => NULL, 'remember_token' => NULL, 'settings' => NULL, 'created_at' => '2021-09-26 10:37:45', 'updated_at' => '2021-09-26 10:37:45'),
        );

        // DB::table('users')->truncate();
        // DB::table('users')->insert($users);

        /* `mazad`.`user_roles` */
        $user_roles = array();

        /* `mazad`.`user_translations` */
        $user_translations = array(
            array('name' => 'admin', 'user_id' => '1', 'locale' => 'en')
        );

        // DB::table('user_translations')->truncate();
        // DB::table('user_translations')->insert($user_translations);

        /* `mazad`.`winners` */
        $winners = array();
    }
}
