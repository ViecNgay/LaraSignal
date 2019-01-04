# LaraSignal

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]

#LaraSignal
Working with onesignal easier!

## Installation

Via Composer

``` bash
$ composer require viecngay/larasignal
```
Register the service provider and alias in your config/app.php:

``` bash

    'providers' => [

        ...
        ViecNgay\LaraSignal\LaraSignalServiceProvider::class,
    ],


    'aliases' => [
        ...
        'LaraSignal' => ViecNgay\LaraSignal\Facades\LaraSignal::class
    ],
```


Config APP ID and REST API KEY in you .env file

``` bash
ONE_SIGNAL_APP_ID=Your Onesignal App Id
ONE_SIGNAL_REST_API_KEY=Your Onesignal Rest Api Key
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
