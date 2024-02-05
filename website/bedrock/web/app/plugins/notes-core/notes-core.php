<?php

/*
 * Plugin Name: Notes core
 */


if (!class_exists('NotesPlugin')) {
    class NotesPlugin
    {
        public function __construct()
        {
            add_action('init', [$this, "init"]);
        }
        public function init()
        {
            $this->register_post_types();
            $this->register_taxonomies();
        }

        public function register_post_types()   
        {
            register_post_type('notes', [
                'labels' => [
                    'name'          => __("Notes", 'textdomain'),
                    "singular_name" => __("Note",  'textdomain')
                ],
                'public'        => true,
                'has_archive'   => true,
                'menu_icon' => "dashicons-format-aside"
            ]);
        }

        public function register_taxonomies() {
            register_taxonomy('type', [ 'notes' ], [
                'hierarchical' => true,
                'show_ui' => true,
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => ["slug" => "type"],
                'labels' => [
                    'name' => _x("Types", "taxonomy general name"),
                    'singular_name' => _x("Type", "taxonomy singular name"),
                    'search_items' => __("Search Type"),
                    "all_items" => __("All Types"),
                    "parent_item" => __("Type"),
                    "parent_item_colon" => __("Type:"),
                    "edit_item" => __("Edit Type"),
                    "update_item" => __("Update Type"),
                    "add_new_item" => __("Add new type"),
                    "new_item_name" => __("New Type name"),
                    "menu_name" => __("Type")
                ]
            ]);
        }
    }

    new NotesPlugin();
}
