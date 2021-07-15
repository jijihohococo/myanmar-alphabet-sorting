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
<p>You can sort Myanmar Alphabets by field name in multi dimensional array with both ascending and descending order.</p>

```php
$multiDimensionalArray=[
['name'=>'ကေကေ',"age"=>'12'],
['name'=>'ကီကီ','age'=>'14'],
['name'=>'ကူးကူး','age'=>'13']
];

Sorting::ascendingMulti($multiDimensionalArray,'name');
Sorting::descendingMulti($multiDimensionalArray,'name');
```

<p>You can also sort Myanmar Alphabets by field name which might include duplicated value sometimes in multi dimensional array with both ascending and descending order.</p>

```php
$duplicatedMultiDimensionalArray=[
['name'=>'ကေကေ',"age"=>'12'],
['name'=>'ကီကီ','age'=>'14'],
['name'=>'ကူးကူး','age'=>'13'],
['name'=>'ကီကီ','age'=>'20']
];

Sorting::ascendingMulti($duplicatedMultiDimensionalArray,'name');
Sorting::descendingMulti($duplicatedMultiDimensionalArray,'name');
```

## References

https://mcf.org.mm/myanmar-unicode/411-myanmar-code-chart.html

https://jrgraphix.net/r/Unicode/1000-109F

https://my.wiktionary.org/wiki/%E1%80%9D%E1%80%85%E1%80%BA%E1%80%9B%E1%80%BE%E1%80%84%E1%80%BA%E1%80%94%E1%80%9B%E1%80%AE:%E1%80%9E%E1%80%90%E1%80%BA%E1%80%95%E1%80%AF%E1%80%B6

https://unicode.org/charts/PDF/UAA60.pdf

### Hope you enjoy!