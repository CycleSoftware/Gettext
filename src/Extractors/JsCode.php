<?php
namespace Gettext\Extractors;

use Gettext\Translations;
use Gettext\Utils\JsFunctionsScanner;

/**
 * Class to get gettext strings from javascript files
 */
class JsCode extends Extractor implements ExtractorInterface
{
    public static $functions = array(
        '__' => '__',
        'n__' => 'n__',
        'p__' => 'p__',
    );

    /**
     * {@inheritDoc}
     */
    public static function fromString($string, Translations $translations = null, $file = '')
    {
        $functions = new JsFunctionsScanner($string);
        $functions->saveGettextFunctions(self::$functions, $translations, $file);
    }
}
