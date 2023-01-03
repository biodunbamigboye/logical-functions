<?php

$data = (object) [
    'name' => 'Biodun Bamigboye',
    'gender' => 'male',
    'skin_color' => 'Black'
];

$objectKey = 'gender';

echo  $data->{$objectKey};

// Returns male

/**
 * @author Biodun Bamigboye
 */
