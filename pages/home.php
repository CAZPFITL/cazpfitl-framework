<div class="container">
    <h1 class="welcome">¡WELCOME!</h1>
    <p>This is my micro-framework, It allows you a fast deployment of pages using an array to declare.</p>
    <p>It has a system that allows to create dynamic html link tags (it uses the first class_</p>
    <p>used in the link tag to call the page with the same name)</p>
    <br>
    <br>
    <h2 class="welcome">¡READY TO START!</h2>
    <p>To start creating pages, you must create a page on "pages" folder.</p>
    <p>The next step it's adding the page name to the positions array!! (It must be the same name as the file).</p>
    <p>The positions array it's located on "index.php" This is it! Now that page already exist!</p>
    <br>
    <p>Don't Forget: The first element in the array will be the home page.</p>
    <br>
    <h2 class="welcome">¡LINKS!</h3>
    <br>
    <p>As you can see, this framework uses #hashes to set the locations</p>
    <p>So for links you have to add a link tag <?php echo htmlspecialchars(' <a> ') ?>. The first class setted will be read by the framework</p>
    <p>and will automatically update all those locations in the page at load process:</p> 
    <br>
    <div style="display:flex;flex-direction:column;align-items:center;">
        <img src="assets/images/1.png" alt="1">
        <p>▼</p>
        <img src="assets/images/2.png" alt="2">
    </div>
    <br>
    <p>This only if the href attribute is not set, because if the href is set</p>
    <p>this url will have priority on the action.</p>
    <br>
    <blockquote>
        <?php echo htmlspecialchars('<a class="link">link</a>') ?>
        <a class="link">link</a>

    </blockquote>
    <br>
    <blockquote>
        <?php echo htmlspecialchars('<a class="nofile">no file</a>') ?>
        <a class="nofile">no file</a>
    </blockquote>
    <br>
    <blockquote>
        <?php echo htmlspecialchars('<a class="404">404</a>') ?>
        <a class="404">404</a>
    </blockquote>
    <br>
    <blockquote>
        <?php echo htmlspecialchars('<a href="https://www.google.com/" class="venta">External Link</a>') ?>
        <a href="https://www.google.com/" class="venta">External Link</a>
    </blockquote>
    <br>
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
