<?php 
    /* insertShared('navbar','pages');  */
?>

<div class="container">
    <h1 class="welcome">¡WELCOME!</h1>
    <p>This is my framework, to start creating pages, you must create a page on "pages" folder</p>
    <p>the next step it's adding the page name to the positions array!! (It must be the same name as the file).</p>
    <p>The positions array it's located on "index.php"</p>
    <br>
    <p>NOW! This is it! Now that page already exist!</p>
    <p>Don't Forget: The first element in the array will be the home page.</p>
    <br>
    <p>As you can see, this framework uses #hashes to set the locations</p>
    <p>So for links you have to add a link tag. The first set class will be read by the framework</p>
    <p>and automatically send the user to the page named in positions array.</p> 
    <br>
    <p>One last thing. You can create PHP objects if you want more order with those forms.</p>
    <p>You only have to call one this functions:</p>
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
    <p>The target part, it's pretty obvious, but just in case it is the name of the file you will add</p>
    <p>The $from variable it's pretty obvious too, but just in case (too) it is the position where is</p>
    <p>called that object (from a page from a shared view, other object)</p>
    <br>
    <p>Or those database conections. mmm talking about database connections!!</p>
    <p>You can add a database connection to the file</p>
    <p>"_bdconnection.static.php" located in 'assets/php/includes' folder</p>
    <span class="signature">-CAZPFITL</span>
</div>
