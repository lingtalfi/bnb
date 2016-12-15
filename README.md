Bnb app
==================
2016-12-15


This is the app I use for testing my code.




[![bnb.png](https://s19.postimg.org/l5ulbeqjn/bnb.png)](https://postimg.org/image/to41fqx27/)





Features
-------------
This implements the [beauty'n'beast](https://github.com/lingtalfi/Dreamer/blob/master/UnitTesting/BeautyNBeast/pattern.beautyNBeast.eng.md) pattern,
and therefore I have the following benefits:


- gui to browse my tests (I just need to open a browser window, then I can select which tests to execute)
- language agnostic (well actually almost all my tests are php, but I could use js as well)
- unit test framework agnostic (so far, I've only used [phpBeast](https://github.com/lingtalfi/PhpBeast), but everything is possible, I could use [phpUnit](https://phpunit.de/) if I wanted to)





How to use?
-------------

This app is created using the [kif framework](https://github.com/lingtalfi/kif).

To use it, open the **app/www/bnb** directory, and remove the symlinks that you may find in it (I'm using this repo as a backup so these
symlinks are only useful for me).


Then, create your own symlinks.

Each symlink should point to a directory that you want to test.

By default, test are files that must end with the **test.php** extension, or the **test.html** extension (for instance **myfile.test.php**).

This can be changed in the **app/pages/home.php** file.


For more information, please read the comments in the **app/pages/home.php** file.

You can also find more information about the testing pattern here:

- [beauty'n'beast](https://github.com/lingtalfi/Dreamer/blob/master/UnitTesting/BeautyNBeast/pattern.beautyNBeast.eng.md)
- [PhpBeast](https://github.com/lingtalfi/PhpBeast)
- [Beauty](https://github.com/lingtalfi/Beauty)
 
