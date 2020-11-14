<?php 
    /* insertShared('navbar','pages');  */
?>

<div class="container">
    <h1 class="welcome">¡WELCOME!</h1>
    <p>This is my micro-framework, It allows you a fast deployment of pages using an array to declare.</p>
    <p>It has a system that allows to create dynamic html link tags (it uses the first class_</p>
    <p>used in the link tag to call the page with the same name)</p>
    <br>
    <h2 class="welcome">¡START!</h2>
    <p>To start creating pages, you must create a page on "pages" folder</p>
    <p>the next step it's adding the page name to the positions array!! (It must be the same name as the file).</p>
    <p>The positions array it's located on "index.php"</p>
    <br>
    <h2 class="welcome">NOW!</h3>
    <p>This is it! Now that page already exist!</p>
    <p>Don't Forget: The first element in the array will be the home page.</p>
    <br>
    <p>As you can see, this framework uses #hashes to set the locations</p>
    <p>So for links you have to add a link tag. The first set class will be read by the framework</p>
    <p>and automatically send the user to the page named in positions array.</p> 
    <br>
    <h2 class="welcome">One last thing</h3>
    <p>You can create PHP objects if you want more order with those forms.</p>
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
    <p>-The target part, it's pretty obvious, but just in case, it's the name of the file you will add</p>
    <p>-The $from variable it's pretty obvious too, but just in case (too), it's the position where is</p>
    <p>called that object (from a page from a shared view, other object)</p>
    <br>
    <h2 class="welcome">Databases</h3>
    <p>Or those database conections. mmm talking about database connections!!</p>
    <p>You can add a database connection to the file</p>
    <p>"_bdconnection.static.php" located in 'assets/php/includes' folder</p>
    <span class="signature">-CAZPFITL</span>
</div>
