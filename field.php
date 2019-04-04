<?php

use Carbon_Field_UniqID\UniqID_Field;
use Carbon_Fields\Carbon_Fields;

define('Carbon_Field_UniqID\\DIR', __DIR__);
Carbon_Fields::extend(UniqID_Field::class, function ($container) {
    return new UniqID_Field($container['arguments']['type'], $container['arguments']['name'], $container['arguments']['label']);
});
