<?php

namespace Alnv\ContaoMobileDetectBundle\Classes;

use Detection\MobileDetect;

class Helper
{

    public static function resolveMobileDetectString($strMobileDetectString): bool
    {

        $objDetect = new MobileDetect();

        switch ($strMobileDetectString) {

            case 'mobile-only':
                return $objDetect->isMobile();
            case 'tablet-only':
                return $objDetect->isTablet();
            case 'mobile-n-tablet-only':
                return $objDetect->isTablet() && $objDetect->isMobile();
            case 'mobile-exclude':
                return !$objDetect->isMobile();
            case 'tablet-exclude':
                return !$objDetect->isTablet();
            case 'mobile-n-tablet-exclude':
                return !$objDetect->isTablet() && !$objDetect->isMobile();
        }

        return false;
    }
}