<?php

namespace Carbon_Field_UniqID;

use Carbon_Fields\Field\Field;

class UniqID_Field extends Field
{
    /**
     * Minimum value.
     *
     * @var null|float
     */
    protected $min;

    /**
     * Maximum value.
     *
     * @var null|float
     */
    protected $max;

    /**
     * Step/interval between allowed values.
     *
     * @var null|float
     */
    protected $step;

    /**
     * Prepare the field type for use
     * Called once per field type when activated.
     */
    public static function field_type_activated()
    {
        $dir = \Carbon_Field_UniqID\DIR.'/languages/';
        $locale = get_locale();
        $path = $dir.$locale.'.mo';
        load_textdomain('carbon-field-uniqid', $path);
    }

    /**
     * Enqueue scripts and styles in admin
     * Called once per field type.
     */
    public static function admin_enqueue_scripts()
    {
        $root_uri = \Carbon_Fields\Carbon_Fields::directory_to_url(\Carbon_Field_UniqID\DIR);

        // Enqueue field styles.
        wp_enqueue_style(
            'carbon-field-uniqid',
            $root_uri.'/build/bundle'.((defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min').'.css'
        );

        // Enqueue field scripts.
        wp_enqueue_script(
            'carbon-field-uniqid',
            $root_uri.'/build/bundle'.((defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min').'.js',
            ['carbon-fields-core']
        );
    }

    /**
     * Load the field value from an input array based on its name.
     *
     * @param array $input array of field names and values
     */
    public function set_value_from_input($input)
    {
        parent::set_value_from_input($input);
        $value = $this->get_value();
        $this->set_value($value);
    }

    /**
     * Returns an array that holds the field data, suitable for JSON representation.
     *
     * @param bool $load should the value be loaded from the database or use the value from the current instance
     *
     * @return array
     */
    public function to_json($load)
    {
        $field_data = parent::to_json($load);

        return array_merge($field_data, [
        ]);
    }
}
