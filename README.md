# cazpfitl-framework

# ¡WELCOME!
This is my micro-framework, It allows you a fast deployment of pages using an array to declare.

it have a system that allows to create dynamic html link tags (it uses the first class setted to call the page with the same name)

# ¡START!
To start creating pages you must create a page on "pages" folder

the next step it's adding the page name to the positions array!! (it must be the same name as the file).

the positions array it's located on "index.php"


NOW!, this is it! now that page already exist!

Don't Forget: The first element in the array will be the home page.


As you can see, this framework uses #hashes to set the locations

So for links you have to add a link tag. The first class setted will be readed by the framework

and automatically send the user to the page named in positions array.


One las thing. you can create php objects if you want more order with those forms.

You only have to call this functions:


< ?php

insertShared($target,$from)

insertPage($target)

insertObject($target)

?>


the target part it's pretty obvious, but just in case it is the name of the file you will add

the from variable it's pretty obvious too, but just in case (too) it is the position where is called that object

(from a pagem from a shared view, or another object)


Or those database conections. mmm talking about database connections!!

You can add a database connection to the file "_bdconnection.static.php" located in 'assets/php/includes' folder

-CAZPFITL