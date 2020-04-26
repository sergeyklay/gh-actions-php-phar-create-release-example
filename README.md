# PPCRE (PHP PHAR Create Release Example)

[![Build Status][build badge]][actions link]
[![Release Status][release badge]][actions link]

An example project to show how to create release using GitHub Actions and PHP
PHAR.

Use this example if you have the following workflow:

1. Creating a tag `git tag ...` && `git push --tags` should create a GitHub
   Release from this tag
2. You can use the web interface to manually create a GitHub Release
3. When creating a GitHub Release (1 or 2 from above), the artifact should be
   attached to release

[build badge]: https://github.com/sergeyklay/gh-actions-php-phar-create-release-example/workflows/build/badge.svg
[release badge]: https://github.com/sergeyklay/gh-actions-php-phar-create-release-example/workflows/release/badge.svg
[actions link]: https://github.com/sergeyklay/gh-actions-php-phar-create-release-example/actions
