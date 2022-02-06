<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'laravel/laravel',
  ),
  'versions' => 
  array (
    'asm89/stack-cors' => 
    array (
      'pretty_version' => 'v2.1.1',
      'version' => '2.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '73e5b88775c64ccc0b84fb60836b30dc9d92ac4a',
    ),
    'cordoval/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'davedevelopment/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'dnoegel/php-xdg-base-dir' => 
    array (
      'pretty_version' => '0.1',
      'version' => '0.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '265b8593498b997dc2d31e75b89f053b5cc9621a',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5527a48b7313d15261292c149e55e26eae771b0a',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '185b8868aa9bf7159f5f953ed5afb2d7fcdc3bda',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => 'v1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '83893c552fd2045dd78aef794c31e694c37c0b8c',
    ),
    'dragonmantank/cron-expression' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '92a2c3768d50e21a1f26a53cb795ce72806266c5',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '2.1.4',
      'version' => '2.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '8790f594151ca6a2010c6218e09d96df67173ad3',
    ),
    'erusev/parsedown' => 
    array (
      'pretty_version' => '1.7.1',
      'version' => '1.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '92e9c27ba0e74b8b028b111d1b6f956a15c01fc1',
    ),
    'fideloper/proxy' => 
    array (
      'pretty_version' => '4.0.0',
      'version' => '4.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cf8a0ca4b85659b9557e206c90110a6a4dba980a',
    ),
    'filp/whoops' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '181c4502d8f34db7aed7bfe88d4f87875b8e947a',
    ),
    'fruitcake/laravel-cors' => 
    array (
      'pretty_version' => 'v2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbfc311b25d4873c3c2382b26860be3567492bd6',
    ),
    'fzaninotto/faker' => 
    array (
      'pretty_version' => 'v1.8.0',
      'version' => '1.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f72816b43e74063c8b10357394b6bba8cb1c10de',
    ),
    'hamcrest/hamcrest-php' => 
    array (
      'pretty_version' => 'v2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '776503d3a8e85d4f9a1148614f95b7a608b046ad',
    ),
    'illuminate/auth' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/bus' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/container' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/database' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/events' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/http' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/log' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/mail' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/queue' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/redis' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/session' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/support' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/validation' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'illuminate/view' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.29',
      ),
    ),
    'jakub-onderka/php-console-color' => 
    array (
      'pretty_version' => '0.1',
      'version' => '0.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e0b393dacf7703fc36a4efc3df1435485197e6c1',
    ),
    'jakub-onderka/php-console-highlighter' => 
    array (
      'pretty_version' => 'v0.3.2',
      'version' => '0.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '7daa75df45242c8d5b75a22c00a201e7954e4fb5',
    ),
    'kodova/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v5.6.29',
      'version' => '5.6.29.0',
      'aliases' => 
      array (
      ),
      'reference' => 'acc6b5c54ab196d3358f60acc5f55d9ebaaccc02',
    ),
    'laravel/laravel' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'laravel/tinker' => 
    array (
      'pretty_version' => 'v1.0.7',
      'version' => '1.0.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e3086ee8cb1f54a39ae8dcb72d1c37d10128997d',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.0.45',
      'version' => '1.0.45.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a99f94e63b512d75f851b181afcdf0ee9ebef7e6',
    ),
    'mockery/mockery' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '99e29d3596b16dabe4982548527d5ddf90232e99',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fd8c787753b3a2ad11bc60c063cff1358a32a3b4',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.8.1',
      'version' => '1.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3e01bdad3e18354c3dce54466b7fbe33a9f9f7f8',
      'replaced' => 
      array (
        0 => '1.8.1',
      ),
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cbcf13da0b531767e39eb86e9687f5deba9857b4',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.0.3',
      'version' => '4.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bd088dc940a418f09cda079a9b5c7c478890fb8d',
    ),
    'nunomaduro/collision' => 
    array (
      'pretty_version' => 'v2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b1f606399ae77e9479b5597cd1aa3d8ea0078176',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.99',
      'version' => '9.99.99.0',
      'aliases' => 
      array (
      ),
      'reference' => '84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '45a2ec53a73c70ce41d55cedef9063630abaf1b6',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '4.3.0',
      'version' => '4.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '94fd0001232e47129dd3504189fa1c7225010d08',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '0.4.0',
      'version' => '0.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9c977708995954784726e25d0cd1dddf4e65b0f7',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => '1.7.6',
      'version' => '1.7.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '33a7e3c4fda54e912ff6338c48823bd5c0f0b712',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '6.0.7',
      'version' => '6.0.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '865662550c384bc1db7e51d29aeda1c2c161d69a',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cecbc684605bb0cc288828eb5d65d93d5c676d3c',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8b8454ea6958c3dee38453d3bd571e023108c91f',
    ),
    'phpunit/php-token-stream' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '21ad88bbba7c3d93530d93994e0a33cd45f02ace',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '7.2.7',
      'version' => '7.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e878aff7917ef66e702e03d1359b16eee254e2c',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4ebe3a8bf773a19edfe0a84b6585ba3d401b724d',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0',
        1 => '1.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.9.6',
      'version' => '0.9.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '4a2ce86f199d51b6e2524214dc06835e872f4fce',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '3.8.0',
      'version' => '3.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd09ea80159c1929d75b3f9c60504d613aeb4a1e3',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '3.8.0',
      ),
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '366541b989927187c4ca70490a35615d3fef2dce',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd0871b3975fb7fc44d11314fd1ee20925fce4f5',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '234199f4528de6d12aaa58b612e98f7d36adb937',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '7cfd9e65d11ffb5af41198476395774d4c8a84c5',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '773f97c67f28de00d397be301821b06708fca0be',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ce990bb21759f94aeafd30209e8cfcdfa8bc3f52',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '99732be0ddb3361e16ad77b68ba41efc8e979019',
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v6.1.2',
      'version' => '6.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '7d760881d266d63c5e7a1155cbcf2ac656a31ca8',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v4.1.2',
      'version' => '4.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5c31f6a97c1c240707f6d786e7e59bfacdbc0219',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v4.1.2',
      'version' => '4.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '03ac71606ecb0b0ce792faa17d74cc32c2949ef4',
    ),
    'symfony/debug' => 
    array (
      'pretty_version' => 'v4.1.2',
      'version' => '4.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a1f2118cedb8731c45e945cdd2b808ca82abc4b5',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v4.1.2',
      'version' => '4.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '00d64638e4f0703a00ab7fc2c8ae5f75f3b4020f',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v4.1.2',
      'version' => '4.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '84714b8417d19e4ba02ea78a41a975b3efaafddb',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v4.1.2',
      'version' => '4.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '8da9ea68ab2d80dfabd41e0d14b9606bb47a10c0',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v4.1.2',
      'version' => '4.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ebd28f4f88a2ca0a0488882ad73c4004f3afdbe3',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.8.0',
      'version' => '1.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7cc359f1b7b80fc25ed7796be7d96adc9b354bae',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.8.0',
      'version' => '1.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3296adf6a6454a050679cde90f95350ad604b171',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.8.0',
      'version' => '1.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a4576e282d782ad82397f3e4ec1df8e0f0cafb46',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v4.1.2',
      'version' => '4.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d1677391ecf00d1c5b9482d6050c0c27aa3ac3a',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v4.1.2',
      'version' => '4.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '73770bf3682b4407b017c2bdcb2b11cdcbce5322',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v4.1.2',
      'version' => '4.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '2dd74d6b2dcbd46a93971e6ce7d245cf3123e957',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v4.1.2',
      'version' => '4.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '9f882aed43f364de1d43038e8fb39703c577afc1',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cb2f008f3f05af2893a87208fe6a6c4985483f8b',
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.1',
      'version' => '2.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ed4a2ea4e0902dac0489e6436ebcd5bbcae9757',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v2.5.1',
      'version' => '2.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8abb4f9aa89ddea9d52112c65bbe8d0125e2fa8e',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0df1908962e7a3071564e857d86874dad1ef204a',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
