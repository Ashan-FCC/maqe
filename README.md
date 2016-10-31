# maqe
maqe backend

To generate the tokens,

create an instance of App\CodeGenerator
The parameters that must be passed in are token length, number of tokens
Optional parameters are prefix and file location.

<code> $generator = new App\CodeGenerator(10, 250, 'MY'); </code>

<code> $generator->generateTokens();	</code>

The generated tokens will be available at /storage/section2.txt

<b>Note</b>


