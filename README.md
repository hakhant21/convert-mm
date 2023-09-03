# Converter Myanmar Date, Number and NRC lists
[![Testing](https://github.com/hakhant21/convert-mm/actions/workflows/main.yml/badge.svg?branch=main&event=push)](https://github.com/hakhant21/convert-mm/actions/workflows/main.yml)
## Installation

You can install the package via composer:

```bash
composer require hakhant/convert-mm
```

## Usage

#### Convert number to myanmar format
```php

$number = '1234567';

$convert = Convert::mm($number);

return $convert;

// output 
'၁၂၃၄၅၆၇'
```

#### Convert date to myanmar format

```php

$today = '2023-08-07';

$convert = Convert::mmDate($today);

return $convert;

// output 
'၂၀၂၃ ခုနှစ်၊သြဂုတ်လ၊ ၀၇ ရက်'

```

### Avaliable lists 
```php

$mmDateNumber = Convert::mmDateNumber('2023-08-07') // output '၂၀၂၃-၀၈-၀၇'

$year = Convert::year('2023') // output '၂၀၂၃'

$month = Convert::month('08') // output 'သြဂုတ်'

$day = Convert::day('8') // output '၈'

$regions = Convert::regions(); // return array of regions

$citizens = Convert::citizens(); // return array of citizens (N) (နိုင်)

$townships = Convert::townships(); // return array of townships 

$number = Convert::nrcNumber('215556'); // return string '၂၁၅၅၅၆'

$fullNrc = Convert::fullNrc($region, $citizen, $township, $number); // example output '12/YaKaNa(N)215556' || '၁၂/ရကန(နိုင်)၂၁၅၅၅၆'

```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email info@hakhant.tech instead of using the issue tracker.

## Credits

-   [Htet Aung Khant](https://github.com/hakhant21)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
