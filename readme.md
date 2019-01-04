# LaraSignal

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require viecngay/larasignal
```

## Usage

Send notification to segment
``` bash
LaraSignal::sendToSegments($segments = [], $title = 'Title', $subTitle = 'Default Subtitle', $payload = [], $url = [], $imageUrl = null, $options = [])
```

Send notification to Player
``` bash
LaraSignal::sendToDevice($deviceIds = [], $title = 'Title', $subTitle = 'Default Subtitle', $payload = [], $url = [], $imageUrl = null, $options = [])
```


## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.


## Credits

- [Quyet Tran][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/viecngay/larasignal.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/viecngay/larasignal.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/viecngay/larasignal/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/viecngay/larasignal
[link-downloads]: https://packagist.org/packages/viecngay/larasignal
[link-travis]: https://travis-ci.org/viecngay/larasignal
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/viecngay
[link-contributors]: ../../contributors]
