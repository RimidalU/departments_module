<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

defined('BOOTSTRAP') or die('Access denied');

/** @var array $schema */
$schema['services']['pickpoint'] = [
    'purposes' => ['strictly_necessary'],
    'name' => 'pickpoint',
    'translations' => [
        'zz' => [
            'title' => 'rus_pickpoint.pickpoint_cookies_title',
            'description' => 'rus_pickpoint.pickpoint_cookies_description'
        ],
    ],
    'required' => true,
];

return $schema;
