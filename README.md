# Myanmar Alphabet Sorting for PHP
<p>This library is aimed to sort Myanmar Alphabets Array in PHP</p>
<i>It is only supported for Pyidaung Hsu Unicode Font. Other unicode formats are not tested yet.</i>

## Usage
<p>You can sort Myanmar Alphabets like below</p>

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
Sorting::sort($array);
```

<p>Above code will sort in ascending order. If you want to sort descending order, you can do like below</p>

```php
Sorting::sort($array,'desc');
```