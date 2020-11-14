# cazpfitl-framework

# ¡WELCOME!
This is my micro-framework, It allows you a fast deployment of pages using an array to declare.

it have a system that allows to create dynamic html link tags (it uses the first class setted to call the page with the same name)

# ¡START!

To start creating pages, you must create a page on "pages" folder

the next step it's adding the page name to the positions array!! (It must be the same name as the file).

The positions array it's located on "index.php"


NOW! This is it! Now that page already exist!

Don't Forget: The first element in the array will be the home page.


As you can see, this framework uses #hashes to set the locations

So for links you have to add a link tag. The first set class will be read by the framework

and automatically send the user to the page named in positions array.


One last thing. You can create PHP objects if you want more order with those forms.

You only have to call one this functions:


< ?php

insertShared($target,$from)

insertPage($target)

insertObject($target)

?>


The target part, it's pretty obvious, but just in case it is the name of the file you will add

The $from variable it's pretty obvious too, but just in case (too) it is the position where is

called that object (from a page from a shared view, other object)


Or those database conections. mmm talking about database connections!!

You can add a database connection to the file

"_bdconnection.static.php" located in 'assets/php/includes' folder
-CAZPFITL