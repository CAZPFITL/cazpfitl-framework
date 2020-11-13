<?php 
    /* insertShared('navbar','pages');  */
?>

<div class="container">
    <h1 class="welcome">¡WELCOME!</h1>
    <p>This is my framework, to start creating pages you must create a page on "pages" folder</p>
    <p>the next step it's adding the page name to the positions array!! (it must be the same name as the file).</p>
    <p>the positions array it's located on "index.php"</p>
    <br>
    <p>NOW!, this is it! now that page already exist!</p>
    <p>Don't Forget: The first element in the array will be the home page.</p>
    <br>
    <p>As you can see, this framework uses #hashes to set the locations</p>
    <p>So for links you have to add a link tag. The first class setted will be readed by the framework</p>
    <p>and automatically send the user to the page named in positions array.</p> 
    <br>
    <p>One las thing. you can create php objects if you want more order with those forms.</p>
    <p>You only have to call this functions:</p>
    <br>
    <blockquote>
        <p>< ?php</p>
            <blockquote>
            <p>insertShared($target,$from)</p>
            <p>insertPage($target)</p>
            <p>insertObject($target)</p>
            </blockquote>
        <p>?></p>
    </blockquote>
    <br>
    <p>the target part it's pretty obvious, but just in case it is the name of the file you will add</p>
    <p>the from variable it's pretty obvious too, but just in case (too) it is the position where is called that object</p>
    <p>(from a pagem from a shared view, or another object)</p>
    <br>
    <p>Or those database conections. mmm talking about database connections!!</p>
    <p>You can add a database connection to the file "_bdconnection.static.php" located in 'assets/php/includes' folder</p>
    <span class="signature">-CAZPFITL</span>
</div>
