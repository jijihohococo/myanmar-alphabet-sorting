# Myanmar Alphabet Sorting for PHP
<p>This library is aimed to sort Myanmar Alphabets Array in PHP</p>
<i>It is only supported for Pyidaung Hsu Unicode Font. Other unicode formats are not tested yet.</i>

## License

This package is Open Source According to [MIT license](LICENSE.md)

## Installing Library Via Composer

<p>Firstly, you need to add some data in your repositories of composer.json as shown as below</p>

```php
"repositories": [
        {
            "name": "jijihohococo/myanmar-alphabet-sorting",
            "type": "vcs",
            "url": "git@github.com:jijihohococo/myanmar-alphabet-sorting.git"
        }
    ],
```
<p>And then, run below code in command line.</p>

```php
composer require jijihohococo/myanmar-alphabet-sorting
```

## Usage
<p>You can sort Myanmar Alphabets like below in ascending order</p>

```php
use JiJiHoHoCoCo\MyanmarAlphabetSorting\Sorting;
$array=[ "က",
"ကား",
"ကိ",
"ကီ",
"ကေ",
"ကု",
"ကူ",
"ကူး",
"ကာ"];
Sorting::ascendingOrder($array);
```

<p>You can sort Myanmar Alphabets like below in descending order</p>

```php
Sorting::descendingOrder($array);
```
## References

https://mcf.org.mm/myanmar-unicode/411-myanmar-code-chart.html

https://jrgraphix.net/r/Unicode/1000-109F

https://my.wiktionary.org/wiki/%E1%80%9D%E1%80%85%E1%80%BA%E1%80%9B%E1%80%BE%E1%80%84%E1%80%BA%E1%80%94%E1%80%9B%E1%80%AE:%E1%80%9E%E1%80%90%E1%80%BA%E1%80%95%E1%80%AF%E1%80%B6