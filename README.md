# Myanmar Alphabet Sorting for PHP
<p>This library is aimed to sort Myanmar Alphabets Array in PHP</p>
<i>It is only supported for Pyidaung Hsu Unicode Font. Other unicode formats are not tested yet.</i>

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
