Onx Sanitize is a PHP library that provides helper method for text sanitization.

## Installation

You can install the package via Composer:

```bash
composer require onx/sanitize
```
## Usage

```bash
$text = '  <p>Hello, <strong>world</strong>!</p>  ';
$sanitizedText = sanitizeText($text);

echo $sanitizedText; // Output: Hello, world!
```
