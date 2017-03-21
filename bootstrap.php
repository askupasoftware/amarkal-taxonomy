<?php
/**
 * WordPress Taxonomy
 *
 * A set of utility functions for taxonomies in WordPress.
 * This is a component within the Amarkal framework.
 *
 * @package   amarkal-taxonomy
 * @depends   amarkal-ui
 * @author    Askupa Software <hello@askupasoftware.com>
 * @link      https://github.com/askupasoftware/amarkal-taxonomy
 * @copyright 2017 Askupa Software
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Prevent loading the library more than once
 */
if( defined( 'AMARKAL_TAXONOMY' ) ) return;
define( 'AMARKAL_TAXONOMY', true );

/**
 * Load required classes
 */
require_once 'form.php';
require_once 'add-field.php';
require_once 'edit-field.php';

if(!function_exists('amarkal_taxonomy_add_field'))
{
    /**
     * Add a field to the add & edit forms of a given taxonomy.
     * 
     * @param string $taxonomy_name The taxonomy name, e.g. 'category'
     * @param string $field_type The type of the field to add. One of the code 
     * amarkal-ui components or a registered custom component.
     * @param array $field_props The field's properties
     */
    function amarkal_taxonomy_add_field( $taxonomy_name, $field_type, $field_props )
    {
        $form = Amarkal\Taxonomy\Form::get_instance();
        $form->add_field( $taxonomy_name, $field_type, $field_props );
    }
}