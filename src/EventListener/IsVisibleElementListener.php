<?php

namespace Alnv\ContaoMobileDetectBundle\EventListener;

use Alnv\ContaoMobileDetectBundle\Classes\Helper;
use Contao\Model;

class IsVisibleElementListener
{

    public function __invoke(Model $objElement, bool $blnIsVisible): bool
    {

        if (!$objElement->mobileDetect) {
            return $blnIsVisible;
        }

        return Helper::resolveMobileDetectString($objElement->mobileDetect);
    }
}