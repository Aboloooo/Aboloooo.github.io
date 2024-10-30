<?php
function NavigationBar($DedicatedPage)
{
?>

    <nav class="navigationBar">
        <div>
            <h1>ABO Market</h1>
            <div class="links">
                <a href="Home.php" <?php
                                    if ($DedicatedPage == "Home") {
                                        print("class='active'");
                                    } ?>>Home</a>

                <a href="Product.php" <?php
                                        if ($DedicatedPage == "Product") {
                                            print("class='active'");
                                        } ?>>Product</a>

                <a href="Contact.php" <?php
                                        if ($DedicatedPage == "Contact") {
                                            print("class='active'");
                                        } ?>>Contact</a>

                <a href="About.php"
                    <?php
                    if ($DedicatedPage == "About") {
                        print("class='active'");
                    }
                    ?>>About</a>
            </div>

        </div>
    </nav>

<?php
};

?>

<?php
function background_img() {}

?>