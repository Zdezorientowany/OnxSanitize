Onx Sanitize is a PHP library that provides helper method for text sanitization.

## Installation

You can install the package via Composer:

```bash
composer require onx/sanitize
```
## Usage

```bash
use Onx\Sanitize\Sanitize;

$text = '  <p>Hello, <strong>world</strong>!</p>  ';
$sanitizedText = Sanitize::text($text);

echo $sanitizedText; // Output: Hello, world!
```
