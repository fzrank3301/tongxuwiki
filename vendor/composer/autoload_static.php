<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita19a915ee98347a0c787119619d2ff9b
{
    public static $files = array (
        'fdc0e9724ddc47859c8bf0c1ea0a623a' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/constants.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'splitbrain\\phpcli\\' => 18,
            'splitbrain\\PHPArchive\\' => 22,
        ),
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'splitbrain\\phpcli\\' => 
        array (
            0 => __DIR__ . '/..' . '/splitbrain/php-cli/src',
        ),
        'splitbrain\\PHPArchive\\' => 
        array (
            0 => __DIR__ . '/..' . '/splitbrain/php-archive/src',
        ),
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SimplePie' => 
            array (
                0 => __DIR__ . '/..' . '/simplepie/simplepie/library',
            ),
        ),
        'E' => 
        array (
            'EmailAddressValidator' => 
            array (
                0 => __DIR__ . '/..' . '/aziraphale/email-address-validator',
            ),
        ),
    );

    public static $classMap = array (
        'AtomCreator03' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Creator/AtomCreator03.php',
        'AtomCreator10' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Creator/AtomCreator10.php',
        'FeedCreator' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Creator/FeedCreator.php',
        'FeedDate' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Element/FeedDate.php',
        'FeedHtmlField' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Element/FeedHtmlField.php',
        'FeedImage' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Element/FeedImage.php',
        'FeedItem' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Element/FeedItem.php',
        'GPXCreator' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Creator/GPXCreator.php',
        'GeSHi' => __DIR__ . '/..' . '/geshi/geshi/src/geshi.php',
        'HTMLCreator' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Creator/HTMLCreator.php',
        'HtmlDescribable' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Element/HtmlDescribable.php',
        'JSCreator' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Creator/JSCreator.php',
        'KMLCreator' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Creator/KMLCreator.php',
        'MBOXCreator' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Creator/MBOXCreator.php',
        'OPMLCreator' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Creator/OPMLCreator.php',
        'PHPCreator' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Creator/PHPCreator.php',
        'PIECreator01' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Creator/PIECreator01.php',
        'RSSCreator091' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Creator/RSSCreator091.php',
        'RSSCreator10' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Creator/RSSCreator10.php',
        'RSSCreator20' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/Creator/RSSCreator20.php',
        'UniversalFeedCreator' => __DIR__ . '/..' . '/openpsa/universalfeedcreator/lib/UniversalFeedCreator.php',
        'lessc' => __DIR__ . '/..' . '/marcusschwarz/lesserphp/lessc.inc.php',
        'lessc_formatter_classic' => __DIR__ . '/..' . '/marcusschwarz/lesserphp/lessc.inc.php',
        'lessc_formatter_compressed' => __DIR__ . '/..' . '/marcusschwarz/lesserphp/lessc.inc.php',
        'lessc_formatter_lessjs' => __DIR__ . '/..' . '/marcusschwarz/lesserphp/lessc.inc.php',
        'lessc_parser' => __DIR__ . '/..' . '/marcusschwarz/lesserphp/lessc.inc.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita19a915ee98347a0c787119619d2ff9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita19a915ee98347a0c787119619d2ff9b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita19a915ee98347a0c787119619d2ff9b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita19a915ee98347a0c787119619d2ff9b::$classMap;

        }, null, ClassLoader::class);
    }
}