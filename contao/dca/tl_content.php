<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $strPalette => $strFields) {

    if (in_array($strPalette, ['__selector__', 'default'])) {
        continue;
    }

    PaletteManipulator::create()
        ->addField('mobileDetect', 'type_legend', PaletteManipulator::POSITION_APPEND)
        ->applyToPalette($strPalette, 'tl_content');
}

$GLOBALS['TL_DCA']['tl_content']['fields']['mobileDetect'] = [
    'inputType' => 'select',
    'eval' => [
        'multiple' => false,
        'tl_class' => 'w50',
        'includeBlankOption' => true
    ],
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['reference']['mobileDetect'],
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