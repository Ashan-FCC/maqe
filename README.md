# maqe
maqe backend

To generate the tokens,

create an instance of src\CodeGenerator
The parameters that must be passed in are token length, number of tokens
Optional parameters are prefix and file location.


<code> $generator = new src\CodeGenerator(10, 250, 'MY'); </code>

<code> $generator->generateTokens();	</code>

The generated tokens will be available at /storage/section2.txt

<b>Note</b>

If you want to run the tests, install phpunit using composer.
At the root folder of the project type this in the terminal.
<code> composer install </code>


To view the buttons , open the file buttons.html on a browser.

