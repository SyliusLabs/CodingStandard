# Conflicts

This file documents conflicts defined in `composer.json`.

## `slevomat/coding-standard: >=8.23`

Incompatible with PHP_CodeSniffer 4.x due to a changed method signature in PHPCS 4, causing fatal errors:

```
Fatal error: Declaration of ... must be compatible with ...
```

## `symplify/easy-coding-standard: >=13.1.3`

[ECS 13.1.3](https://github.com/easy-coding-standard/ecs/releases/tag/13.1.3) introduced a BC break that affected all of our CIs. The release ships a bundled `friendsofphp/php-cs-fixer` with `PhpCsFixer\Console\Application` removed from the prefixed vendor tree, while `ConfigurableFixerTrait` still imports it. Configuring any fixer that has a deprecated option triggers the deprecation path and fails with:

```
PHP Fatal error: Uncaught Error: Class "PhpCsFixer\Console\Application" not found
in vendor/symplify/easy-coding-standard/vendor/friendsofphp/php-cs-fixer/src/Fixer/ConfigurableFixerTrait.php
```
