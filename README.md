# SavePoint&trade;

Originally created for our students, but _free for all_.

SavePoint&trade; is a very simple front-end starter boilerplate that we created to introduce a few core concepts to our students:

1. PHP includes and basic PHP syntax.
2. SCSS basic syntax and compiling with a third party app.
3. The power of creating your own boilerplate and not having to start from scratch every time you work on a new project.

## Wait, what's a boilerplate?

A boilerplate is basically a starting point.

It's the save point in your favourite video game _just_ past the tutorial, so you don't have to keep repeating the tutorial every time you start the game from scratch. It's why we called it SavePoint&trade;.

A boilerplate stops you from having to write the same old boring code over and over, and gets you straight to the fun stuff.

A front-end boilerplate like this one usually includes stuff like a [CSS reset][1], a [grid][2] to make things quicker to position, and some starter HTML that you'll usually use on every project.

If you're one for reading theory, [Wikipedia is the place to go][3] to read more about boilerplate code.

## Features

- Baked in [normalize.css][4] to straighten out all those browser inconsistencies. We're using this instead of a CSS reset, but the results are similar.
- A modified version of [Simple Grid][2] is provided as an excellent example of a grid, but it's easy to swap out.
- A simple and fully commented SCSS structure to help you understand how it all works.
- A simple and fully commented [PHP include][5] structure with example pages to help you understand how PHP includes work. This knowledge is useful to learn as it can easily be transferred to popular CMSs like [WordPress][6].

## Requirements to make the magic happen

1. You'll need a local server environment to get this working. We recommend [Valet][7], but if that gets a little heavy, try [MAMP][8].
2. You'll need an SCSS compiler. [Koala][9] is great _and_ it's free. [CodeKit][10] is lovely too.
3. This should go without saying, but you'll need a text editor. We like [Atom][11], but you wouldn't go wrong if you used [Sublime Text][12], [Brackets][13] or [PhpStorm][14] either. [Visual Studio Code][15] from Microsoft is also surprisingly nice.

## Recommendations

- We recommend you spend a bit of time learning how git works. It isn't required to use SavePoint&trade;, but you'll be expected to know it when you get a job. Have a read through [GitHub's guide about their workflow][16], and [this excellent resource][17] from @blackfalcon.

## Structure

We like keeping things neat, so you'll find everything you need in the **assets** folder.

```
index.php
- assets
    - img (your folder for images)
    - inc (where the PHP includes are for headers, footers and sidebars)
    - scss (your core SCSS - the bit you edit)
    - css (where your SCSS will get compiled to - don't mess with this folder)
```

## Roadmap

1. Add in some JavaScript magic so you can learn some JS basics.
2. Create examples that use SavePoint&trade; so you can see how it works.
3. Develop further versions that introduce more complicated topics like task runners and advanced git commands like branches.

[1]: https://meyerweb.com/eric/tools/css/reset/
[2]: https://simplegrid.io/
[3]: https://en.wikipedia.org/wiki/Boilerplate_code
[4]: https://necolas.github.io/normalize.css/
[5]: http://php.net/manual/en/function.include.php
[6]: https://wordpress.org/
[7]: https://laravel.com/docs/5.7/valet
[8]: https://www.mamp.info/en/
[9]: http://koala-app.com/
[10]: https://codekitapp.com/
[11]: https://atom.io/
[12]: https://www.sublimetext.com/
[13]: http://brackets.io/
[14]: https://www.jetbrains.com/phpstorm/
[15]: https://code.visualstudio.com/
[16]: https://guides.github.com/introduction/flow/
[17]: https://gist.github.com/blackfalcon/8428401
