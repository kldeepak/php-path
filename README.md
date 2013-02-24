Path
====

[![Build Status](https://travis-ci.org/JosephMoniz/php-path.png?branch=master)](undefined)

Simple and care free file path concatenation and simplification.

```php
<?php
use PlasmaConduit\Path;

Path::join("wat", "lol");              // -> wat/lol
Path::join("/a", "///b");              // -> /a/b
Path::join("/a", "b", "c", "..", "d"); // -> /a/b/d

Path::normalize("/a/b/c/../d");       // -> /a/b/d
Path::normalize("/a/b/c/../../d");    // -> /a/d
Path::normalize("/b/wat//");          // -> /b/wat/
Path::normalize("/b///wat/");         // -> /b/wat/
Path::normalize("");                  // -> .
Path::normalize("/");                 // -> /
```

Public Interface
----------------
```php
namespace PlasmaConduit;

class Path {

    /**
     * This function takes a variable amount of strings and joins
     * them together so that they form a valid file path.
     *
     * @param {String ...} $peice - The peices of the file path
     * @returns {String}          - The final file path
     */
    static public function join();

    /**
     * This function takes a valid file path and nomalizes it into
     * the simplest form possible.
     *
     * @param {String} $path - The path to normalize
     * @returns {String}     - The normailized path
     */
    static public function normalize($path);

}
```