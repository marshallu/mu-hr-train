<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit579f01a5a9949b122c3d84469bcc2685
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        'a1105708a18b76903365ca1c4aa61b02' => __DIR__ . '/..' . '/symfony/translation/Resources/functions.php',
        '524ac6b21329cb008bd2db60ee1704ac' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\Translation\\' => 30,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Clock\\' => 10,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
        'C' => 
        array (
            'Carbon\\Doctrine\\' => 16,
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation-contracts',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Clock\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/clock/src',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
        'Carbon\\Doctrine\\' => 
        array (
            0 => __DIR__ . '/..' . '/carbonphp/carbon-doctrine-types/src/Carbon/Doctrine',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'CAS_AuthenticationException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/AuthenticationException.php',
        'CAS_Client' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Client.php',
        'CAS_CookieJar' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/CookieJar.php',
        'CAS_Exception' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Exception.php',
        'CAS_GracefullTerminationException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/GracefullTerminationException.php',
        'CAS_InvalidArgumentException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/InvalidArgumentException.php',
        'CAS_Languages_Catalan' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/Catalan.php',
        'CAS_Languages_ChineseSimplified' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/ChineseSimplified.php',
        'CAS_Languages_English' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/English.php',
        'CAS_Languages_French' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/French.php',
        'CAS_Languages_Galego' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/Galego.php',
        'CAS_Languages_German' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/German.php',
        'CAS_Languages_Greek' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/Greek.php',
        'CAS_Languages_Japanese' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/Japanese.php',
        'CAS_Languages_LanguageInterface' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/LanguageInterface.php',
        'CAS_Languages_Portuguese' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/Portuguese.php',
        'CAS_Languages_Spanish' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Languages/Spanish.php',
        'CAS_OutOfSequenceBeforeAuthenticationCallException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/OutOfSequenceBeforeAuthenticationCallException.php',
        'CAS_OutOfSequenceBeforeClientException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/OutOfSequenceBeforeClientException.php',
        'CAS_OutOfSequenceBeforeProxyException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/OutOfSequenceBeforeProxyException.php',
        'CAS_OutOfSequenceException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/OutOfSequenceException.php',
        'CAS_PGTStorage_AbstractStorage' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/PGTStorage/AbstractStorage.php',
        'CAS_PGTStorage_Db' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/PGTStorage/Db.php',
        'CAS_PGTStorage_File' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/PGTStorage/File.php',
        'CAS_ProxiedService' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService.php',
        'CAS_ProxiedService_Abstract' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Abstract.php',
        'CAS_ProxiedService_Exception' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Exception.php',
        'CAS_ProxiedService_Http' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Http.php',
        'CAS_ProxiedService_Http_Abstract' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Http/Abstract.php',
        'CAS_ProxiedService_Http_Get' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Http/Get.php',
        'CAS_ProxiedService_Http_Post' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Http/Post.php',
        'CAS_ProxiedService_Imap' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Imap.php',
        'CAS_ProxiedService_Testable' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxiedService/Testable.php',
        'CAS_ProxyChain' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxyChain.php',
        'CAS_ProxyChain_AllowedList' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxyChain/AllowedList.php',
        'CAS_ProxyChain_Any' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxyChain/Any.php',
        'CAS_ProxyChain_Interface' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxyChain/Interface.php',
        'CAS_ProxyChain_Trusted' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxyChain/Trusted.php',
        'CAS_ProxyTicketException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ProxyTicketException.php',
        'CAS_Request_AbstractRequest' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Request/AbstractRequest.php',
        'CAS_Request_CurlMultiRequest' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Request/CurlMultiRequest.php',
        'CAS_Request_CurlRequest' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Request/CurlRequest.php',
        'CAS_Request_Exception' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Request/Exception.php',
        'CAS_Request_MultiRequestInterface' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Request/MultiRequestInterface.php',
        'CAS_Request_RequestInterface' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Request/RequestInterface.php',
        'CAS_ServiceBaseUrl_AllowedListDiscovery' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ServiceBaseUrl/AllowedListDiscovery.php',
        'CAS_ServiceBaseUrl_Base' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ServiceBaseUrl/Base.php',
        'CAS_ServiceBaseUrl_Interface' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ServiceBaseUrl/Interface.php',
        'CAS_ServiceBaseUrl_Static' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/ServiceBaseUrl/Static.php',
        'CAS_Session_PhpSession' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/Session/PhpSession.php',
        'CAS_TypeMismatchException' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS/TypeMismatchException.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PHPCSUtils\\AbstractSniffs\\AbstractArrayDeclarationSniff' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/AbstractSniffs/AbstractArrayDeclarationSniff.php',
        'PHPCSUtils\\BackCompat\\BCFile' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/BackCompat/BCFile.php',
        'PHPCSUtils\\BackCompat\\BCTokens' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/BackCompat/BCTokens.php',
        'PHPCSUtils\\BackCompat\\Helper' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/BackCompat/Helper.php',
        'PHPCSUtils\\Exceptions\\InvalidTokenArray' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Exceptions/InvalidTokenArray.php',
        'PHPCSUtils\\Exceptions\\TestFileNotFound' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Exceptions/TestFileNotFound.php',
        'PHPCSUtils\\Exceptions\\TestMarkerNotFound' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Exceptions/TestMarkerNotFound.php',
        'PHPCSUtils\\Exceptions\\TestTargetNotFound' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Exceptions/TestTargetNotFound.php',
        'PHPCSUtils\\Fixers\\SpacesFixer' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Fixers/SpacesFixer.php',
        'PHPCSUtils\\Internal\\Cache' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/Cache.php',
        'PHPCSUtils\\Internal\\IsShortArrayOrList' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/IsShortArrayOrList.php',
        'PHPCSUtils\\Internal\\IsShortArrayOrListWithCache' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/IsShortArrayOrListWithCache.php',
        'PHPCSUtils\\Internal\\NoFileCache' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/NoFileCache.php',
        'PHPCSUtils\\Internal\\StableCollections' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/StableCollections.php',
        'PHPCSUtils\\TestUtils\\UtilityMethodTestCase' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/TestUtils/UtilityMethodTestCase.php',
        'PHPCSUtils\\Tokens\\Collections' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Tokens/Collections.php',
        'PHPCSUtils\\Tokens\\TokenHelper' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Tokens/TokenHelper.php',
        'PHPCSUtils\\Utils\\Arrays' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Arrays.php',
        'PHPCSUtils\\Utils\\Conditions' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Conditions.php',
        'PHPCSUtils\\Utils\\Context' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Context.php',
        'PHPCSUtils\\Utils\\ControlStructures' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/ControlStructures.php',
        'PHPCSUtils\\Utils\\FunctionDeclarations' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/FunctionDeclarations.php',
        'PHPCSUtils\\Utils\\GetTokensAsString' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/GetTokensAsString.php',
        'PHPCSUtils\\Utils\\Lists' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Lists.php',
        'PHPCSUtils\\Utils\\MessageHelper' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/MessageHelper.php',
        'PHPCSUtils\\Utils\\Namespaces' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Namespaces.php',
        'PHPCSUtils\\Utils\\NamingConventions' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/NamingConventions.php',
        'PHPCSUtils\\Utils\\Numbers' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Numbers.php',
        'PHPCSUtils\\Utils\\ObjectDeclarations' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/ObjectDeclarations.php',
        'PHPCSUtils\\Utils\\Operators' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Operators.php',
        'PHPCSUtils\\Utils\\Orthography' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Orthography.php',
        'PHPCSUtils\\Utils\\Parentheses' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Parentheses.php',
        'PHPCSUtils\\Utils\\PassedParameters' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/PassedParameters.php',
        'PHPCSUtils\\Utils\\Scopes' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Scopes.php',
        'PHPCSUtils\\Utils\\TextStrings' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/TextStrings.php',
        'PHPCSUtils\\Utils\\UseStatements' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/UseStatements.php',
        'PHPCSUtils\\Utils\\Variables' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Variables.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
        'phpCAS' => __DIR__ . '/..' . '/jasig/phpcas/source/CAS.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit579f01a5a9949b122c3d84469bcc2685::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit579f01a5a9949b122c3d84469bcc2685::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit579f01a5a9949b122c3d84469bcc2685::$classMap;

        }, null, ClassLoader::class);
    }
}
