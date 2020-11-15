<style>
    blockquote {
        background: #f3f3f3;
        padding: 20px;
    }
    .a {
        color:#c70101;
    }
    .b {
        color:#448244;
    }
    .c {
        color:#c79d00;
    }
    .d,a {
        color:#0088ff;
    }
    p{
        line-height: 200%;
    }
</style>
<div class="container" style="padding:40px;">
    <h1 class="welcome">¡WELCOME!</h1>
    <p>This is my micro-framework, It allows you a fast deployment of pages using an array to declare.
    It has a system that allows to create dynamic html link tags (it uses the first class 
    used in the link tag to call the page with the same name)</p>
    <br>
    <h2 class="welcome">¡READY TO START!</h2>
    <p>To start creating pages, you must create a page on "pages" folder.
    The next step it's adding the page name to the positions array!! (It must be the same name as the file).
    The positions array it's located on "index.php" This is it! Now that page already exist!</p>
    <p>Don't Forget this: The first element in the array will be the home page.</p>
    <br>
    <h2 class="welcome">¡LINKS!</h2>
    <p>As you can see, this framework uses #hashes to set the locations.
    So for links you have to add a link tag <?php echo htmlspecialchars(' <a> ') ?>. The first class setted will be read by the framework
    and will automatically update all those locations in the page at load process:</p> 
    <br>
    <div style="display:flex;flex-direction:column;align-items:center;">
        <img src="assets/images/1.png" alt="1" style="max-width:50%;">
        <p>▼</p>
        <img src="assets/images/2.png" alt="2" style="max-width:100%;">
    </div>
    <br>
    <p>This only if the href attribute is not set, because if the href is set
    this url will have priority on the action.</p>
    <br>
    <blockquote>
        <span><</span><span class="a">a</span><span> </span><span class="b">class</span><span>=</span><span class="c">"link"</span><span>>link<</span>/<span class="a">a</span>>
        <a class="link">link</a>
    </blockquote>
    <blockquote>
        <span><</span><span class="a">a</span><span> </span><span class="b">class</span><span>=</span><span class="c">"nofile"</span><span>>no file<</span>/<span class="a">a</span>>
        <a class="nofile">no file</a>
    </blockquote>
    <blockquote>
        <span><</span><span class="a">a</span><span> </span><span class="b">class</span><span>=</span><span class="c">"404"</span><span>>404<</span>/<span class="a">a</span>>
        <a class="404">404</a>
    </blockquote>
    <blockquote>
        <span><</span><span class="a">a</span><span> </span><span class="b">href</span><span>=</span><span class="d">"https://www.google.com/" </span><span class="b">class</span><span>=</span><span class="c">"link"</span><span>>External Link<</span>/<span class="a">a</span><span>></span>
        <a href="https://www.google.com/" class="venta">External Link</a>
    </blockquote>
    <br>
    <br>
    <h2 class="welcome">One last thing</h3>
    <p>You can create PHP objects if you want more order with those forms.</p>
    <p>You only have to call one this functions:</p>
    <br>
    <blockquote>
        <p><?php echo htmlspecialchars('<?php') ?></p>
            <blockquote>
            <p>insertShared($target,$from);</p>
            <p>insertPage($target);</p>
            <p>insertObject($target);</p>
            </blockquote>
        <p><?php echo htmlspecialchars('?>') ?></p>
    </blockquote>
    <br>
    <p>-The target part, it's pretty obvious, but just in case, it's the name of the file you will add</p>
    <p>-The $from variable it's pretty obvious too, but just in case (too), it's the position where is</p>
    <p>called that object (from a page from a shared view, other object)</p>
    <br>
    <br>
    <h2 class="welcome">Databases</h3>
    <p>Mmm talking about database connections!!</p>
    <p>You can add a database connection to the file</p>
    <p>"_bdconnection.static.php" located in 'assets/php/includes' folder</p>
    <br>
    <br>
    <p>you can download a copy here:</p>
    <a href="http://cmonroy.pro/cazpfitl-framework.zip">DOWNLOAD</a>
    <span class="signature">-CAZPFITL</span>
</div>
