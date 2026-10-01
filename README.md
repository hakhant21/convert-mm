# Convert Myanmar Date, Number and Get NRC Regions, Citizens and Townships

[![Test Suite Status](https://github.com/hakhant21/convert-mm/actions/workflows/main.yml/badge.svg?branch=main)](https://github.com/hakhant21/convert-mm/actions/workflows/main.yml)

## Installation

Install the package via Composer:

```bash
composer require hakhant/convert-mm
```

## Publish the configuration

```bash
php artisan vendor:publish --tag=convert
```

## Usage

### Convert a number to Myanmar format

```php
$number = '1234567';
$convert = Convert::mm($number);

return $convert;
// Output: '၁၂၃၄၅၆၇'
```

### Convert a date to Myanmar format

```php
$today = '2023-08-07';
$convert = Convert::mmDate($today);

return $convert;
// Output: '၂၀၂၃ ခုနှစ်၊သြဂုတ်လ၊ ၀၇ ရက်'
```

### Date available lists

```php
$mmDateNumber = Convert::mmDateNumber('2023-08-07');
// Output: '၂၀၂၃-၀၈-၀၇'

$year = Convert::year('2023');
// Output: '၂၀၂၃'

$month = Convert::month('08');
// Output: 'သြဂုတ်'

$day = Convert::day('8');
// Output: '၈'
```

### NRC available lists

```php
$regions = Convert::regions();
// Returns an array of regions in English.

$mmRegions = Convert::mmRegions();
// Returns an array of regions in Myanmar.

$citizens = Convert::citizens();
// Returns an array of citizens.

$mmCitizens = Convert::mmCitizens();
// Returns an array of citizens in Myanmar.

$townships = Convert::townships();
// Returns an array of townships.

$mmTownships = Convert::mmTownships();
// Returns an array of townships in Myanmar.

$number = Convert::nrcNumber('215556');
// Returns '215556'.

$mmNumber = Convert::mmNrcNumber('215556');
// Returns '၂၁၅၅၅၆'.

$fullNrc = Convert::fullNrc('12/', 'YaKaNa', '(N)', 215556);
// Or: Convert::fullNrc('12', 'YaKaNa', 'N', 215556);
// Example output: '12/YaKaNa(N)215556'

$mmFullNrc = Convert::mmFullNrc('၁၂/', 'ရကန', '(နိုင်)', 215556);
// Or: Convert::mmFullNrc('၁၂', 'ရကန', 'နိုင်', 215556);
// Example output: '၁၂/ရကန(နိုင်)၂၁၅၅၅၆'
```

## Test Suite Status

The badge at the top reports the status of the GitHub Actions test workflow on pushes to `main`.

Run the test suite locally with:

```bash
composer test
```

## Changelog

See [CHANGELOG](CHANGELOG.md) for details about recent changes.

## Contributing

See [CONTRIBUTING](CONTRIBUTING.md) for contribution details.

## Security

For security issues, email [info@hakhant.tech](mailto:hahant21@gmail.com) instead of using the issue tracker.

## Credits

- [Htet Aung Khant](https://github.com/hakhant21)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). See [LICENSE](LICENSE.md) for details.
