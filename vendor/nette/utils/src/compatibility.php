<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace VendorPatches202301\Nette\Utils;

use VendorPatches202301\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, IHtmlString::class);
}
namespace VendorPatches202301\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends Translator
    {
    }
} elseif (!\interface_exists(ITranslator::class)) {
    \class_alias(Translator::class, ITranslator::class);
}
