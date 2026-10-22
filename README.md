<div align="left">
    <a href="https://spatie.be/open-source?utm_source=github&utm_medium=banner&utm_campaign=piper">
      <picture>
        <source media="(prefers-color-scheme: dark)" srcset="https://spatie.be/packages/header/piper/html/dark.webp?1776851353">
        <img alt="Logo for scotty" src="https://spatie.be/packages/header/piper/html/light.webp?1776851353">
      </picture>
    </a>

<h1>Pipe operator-first utility library</h1>

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/piper.svg?style=flat-square)](https://packagist.org/packages/spatie/piper)
[![GitHub Tests Action Status](https://github.com/spatie/piper/actions/workflows/run-tests.yml/badge.svg)](https://github.com/spatie/piper/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://github.com/spatie/piper/actions/workflows/fix-php-code-style-issues.yml/badge.svg)](https://github.com/spatie/piper/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/piper.svg?style=flat-square)](https://packagist.org/packages/spatie/piper)

</div>

Piper is a pipe operator-first PHP utility library for array and string manipulation. It ports Laravel's collection and string utility methods to standalone functions.

It comes with array helpers:

```php
use function Spatie\Piper\Arr\{filter, map};

$popular = $posts
    |> filter(fn (Post $post) => $post->views > 1000)
    |> map(fn (Post $post) => $post->title);

// ["Claude Talk Small. Code Still Big.", …]
```

And string helpers:

```php
use function Spatie\Piper\Str\{lower, replace};

'Hello, world!'
    |> lower()
    |> replace('world', 'Piper');

// "hello, Piper!"
```

Since all functions work with primitives, you can mix and match:

```php
use function Spatie\Piper\Arr\{filter, join, map, values};
use function Spatie\Piper\Str\{prefix, suffix};

[1, 2, 3, 4, 5, 6]
    |> filter(fn (int $i) => $i % 2 === 0)
    |> map(fn (int $i) => pow($i, 2))
    |> values()
    |> join(', ', ', and ')
    |> prefix('The winning numbers are ')
    |> suffix('.');

// "The winning numbers are 4, 16, and 36."
```

## Installation

You can install the package via composer:

```bash
composer require spatie/piper
```

## Documentation

All documentation is available [on our documentation site](https://spatie.be/docs/piper).

## Support us

[<img src="https://spatie.be/github-ad-image/piper.jpg" width="419px" />](https://spatie.be/github-ad-click/piper)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source).

You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Testing

You can run the tests with:

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

Piper is a port of Laravel's collection & string helpers. All methods, tests, and documentation examples are derived from the Laravel source. The porting strategy is described in [PORT.md](https://github.com/spatie/piper/blob/main/PORT.md).

- [Sebastian De Deyne](https://github.com/sebastiandedeyne)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
