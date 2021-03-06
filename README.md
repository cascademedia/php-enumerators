PHP Enumerators
===============
This library provides an abstraction to emulate enumerators in PHP.

Installation
------------
To install php-enumerators, simply require the library by executing the following composer command.

```
$ composer require cascademedia/php-enumerators:dev-master
```

Alternatively, you can clone/download this repository and install the package manually.

Usage
-----
```php
class TokenType extends AbstractEnumerator
{
    const STRING = 'token_string';
    const NUMBER = 'token_number';
}

function read_token_type(TokenType $type)
{
    switch ($type) {
        case TokenType::STRING():
            // The token type is a string!
            break;
        case TokenType::NUMBER():
            // The token type is a number!
            break;
        default:
            break;
    }
}

$tokenType = TokenType::STRING();

read_token_type($tokenType);
```

License
-------
This library is MIT licensed, meaning it is free for anyone to use and modify.

```
Copyright (c) 2015 Cascade Media, LLC

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
