# maqe
maqe backend

1. Run composer to setup autoloading. 
<code> composer install </code>

2. To generate the tokens,

create an instance of App\CodeGenerator
The parameters that must be passed in are token length, number of tokens
Optional parameters are prefix and file location.


<code> $generator = new App\CodeGenerator(10, 250, 'MY'); </code>

<code> $generator->generateTokens();	</code>

OR 
You can run the index.php file on the command line which will run this code for you. 

The generated tokens will be available at /storage/section2.txt

<b>Note</b>

3. To view the buttons , open the file buttons.html on a browser.

The project source is on https://github.com/Ashan-FCC/maqe.git