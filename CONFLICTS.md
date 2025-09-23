# Conflicts

This file documents conflicts defined in `composer.json`.

## `slevomat/coding-standard: >=8.23`

Incompatible with PHP_CodeSniffer 4.x due to a changed method signature in PHPCS 4, causing fatal errors:

```
Fatal error: Declaration of ... must be compatible with ...
```
