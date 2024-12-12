<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

PaletteManipulator::create()
    ->addField('mobileDetect', 'author')
    ->applyToPalette('default', 'tl_article');

$GLOBALS['TL_DCA']['tl_article']['fields']['mobileDetect'] = [
    'inputType' => 'select',
    'eval' => [
        'multiple' => false,
        'tl_class' => 'w50',
        'includeBlankOption' => true
    ],
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['reference']['mobileDetect'],
    'options' => [
        'mobile-only',
        'tablet-only',
        'mobile-n-tablet-only',
        'mobile-exclude',
        'tablet-exclude',
        'mobile-n-tablet-exclude'
    ],
    'exclude' => true,
    'sql' => "varchar(32) NOT NULL default ''"
];