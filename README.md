Onx Sanitize is a PHP library that provides helper method for text sanitization.

## Installation

You can install the package via Composer:

```bash
composer require onx/sanitize
```
## Usage
You can use Facade like this:
```bash
use Onx\Sanitize\Sanitize;

$text = '  <p>Hello, <strong>world</strong>!</p>  ';
$sanitizedText = Sanitize::text($text);

echo $sanitizedText; // Output: Hello, world!
```
Or you can also directly use the sanitize function:
```bash
$text = '  <p>Hello, <strong>world</strong>!</p>  ';
$sanitizedText = sanitize($text);

echo $sanitizedText; // Output: Hello, world!
```

