# Convert Myanmar Date, Number and Get NRC Regions, Citizens and Townships
[![Testing](https://github.com/hakhant21/convert-mm/actions/workflows/main.yml/badge.svg?branch=main&event=push)](https://github.com/hakhant21/convert-mm/actions/workflows/main.yml)
## Installation

You can install the package via composer:

```bash
composer require hakhant/convert-mm
```

## Publish the configuration:
```bash
php artisan vendor:publish --tag=convert
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

### Date Avaliable lists 
```php

$mmDateNumber = Convert::mmDateNumber('2023-08-07') 
// output '၂၀၂၃-၀၈-၀၇'

$year = Convert::year('2023') 
// output '၂၀၂၃'

$month = Convert::month('08') 
// output 'သြဂုတ်'

$day = Convert::day('8') 
// output '၈'

```

### NRC Avaliable Lists

```php

$regions = Convert::regions(); 
// return array of regions english format 

$mmRegions = Convert::mmRegions(); 
// return array of regions myanmar format

$citizens = Convert::citizens(); 
// return array of citizens 

$mmCitizens = Convert::mmCitizens(); 
// return array of citizens myanmar format

$townships = Convert::townships(); 
// return array of townships 

$mmTownships = Convert::mmTownships(); 
// return array of townships 

$number = Convert::nrcNumber('215556'); 
// return string '215556'

$mmNumber = Convert::mmNrcNumber('215556') 
// return string '၂၁၅၅၅၆'

$fullNrc = Convert::fullNrc('12/', 'YaKaNa', '(N)', 123456); 
// Or 
$fullNrc = Convert::fullNrc('12', 'YaKaNa', 'N', 123456);
// Example out  '12/YaKaNa(N)215556'

$mmFullNrc = Convert::mmFullNrc('၁၂/', 'ရကန', '(နိင်)', 123456); 
// Or
$mmFullNrc = Convert::mmFullNrc('၁၂', 'ရကန', 'နိင်', 123456); 
// example output '၁၂/ရကန(နိုင်)၂၁၅၅၅၆'

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
