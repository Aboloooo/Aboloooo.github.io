<?php
function NavigationBar($DedicatedPage){
    ?> 

    <nav class="navigationBar">
    <div>
        <h1>ABO Market</h1>
        <div class="links">
            <a href="Home.html" <?php 
                if($DedicatedPage == $Home){
                    print(class='active');
                }?>  >Home</a>
            <a href="*.html">Product</a>
            <a href="*.html">Contact</a>
            <a href="*.html">About</a>
        </div>
        
    </div>
    </nav>

    <?php
            };

        ?>
class="active"