<?php

declare (strict_types=1);
namespace VendorPatches202302\Symplify\PackageBuilder\Console\Input;

use VendorPatches202302\Symfony\Component\Console\Input\ArgvInput;
/**
 * @api
 */
final class StaticInputDetector
{
    public static function isDebug() : bool
    {
        $argvInput = new ArgvInput();
        return $argvInput->hasParameterOption(['--debug', '-v', '-vv', '-vvv']);
    }
}
