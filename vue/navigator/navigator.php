
<?php
include($_SESSION['language'] . '.php');
?>

<nav id="main_nav">
    <a href="<?php echo $GLOBALS['host'];?>/home.php">
        <img src="<?php echo $GLOBALS['host'];?>/vue/image/logo_sweettable.png"/>
    </a>


    <section>
        <nav>
            <a href="<?php echo $GLOBALS['host'];?>/search.php"> <?php echo $nav_search; ?> </a>
            <a href="<?php echo $GLOBALS['host'];?>/profil.php"> <?php echo $nav_profil; ?> </a>
            <a href="<?php echo $GLOBALS['host'];?>/write-a-review.php"> <?php echo $nav_write_a_review; ?> </a>
            <a href="<?php echo $GLOBALS['host'];?>/inviter-amis.php"> <?php echo $nav_inviter_amis; ?> </a>
            <a href="<?php echo $GLOBALS['host'];?>/about-us.php"> <?php echo $nav_about_us; ?> </a>
        </nav>


        <form action="search.php" methode="GET" id="recherche_restau_form">
            <ul>
                <li>
                    <label for="search"> <?php echo $nav_search_label; ?> </label>
                    <input type="search" name="search" id="search" placeholder="<?php echo $nav_search_placeholder; ?>"
                           autocomplete="off" value="<?php if(isset($_GET['search'])) echo $_GET['search'];?>" />
                    <ul id="ajax_search" class="like_input" style="display: none;"> </ul>
                </li>

                <li>
                    <label for="where"> <?php echo $nav_where_label; ?> </label>
                    <input type="search" name="where" id="where" placeholder="<?php echo $nav_where_placeholder; ?>"
                           autocomplete="off" value="<?php if(isset($_GET['where'])) echo $_GET['where'];?>"/>
                    <ul id="ajax_where" class="like_input" style="display: none;"> </ul>
                </li>

                <li>
                    <button value="submit" type="submit" id="submit_nav">
                        <i class="fa fa-search"></i>
                    </button>
                </li>

                <!-- pour les filtres -->
                <input type="hidden" name="cuisine" id="cuisine_HI"/>
                <input type="hidden" name="tags" id="tags_HI"/>
                <input type="hidden" name="maxPrice" id="maxPrice_HI" value="5"/>
                <input type="hidden" name="minPrice" id="minPrice_HI" value="0"/>

            </ul>
        </form>

    </section>

    <div>
        <i class="fa fa-bars"></i>
        <ul>
            <a href="home.php?session_destroy=true"><li> <?php echo $nav_logout; ?> </li></a>
        </ul>
    </div>

</nav>

<script src="<?php echo $GLOBALS['host'];?>/controller/js_function/add_event.js"></script>
<script src="<?php echo $GLOBALS['host'];?>/controller/js_function/auto_complexion.js">  </script>
<script>
    autoComplexion('search', 'ajax_search', '<?php echo $GLOBALS['host'];?>/controller/navigator/lieu.php');
    autoComplexion('where', 'ajax_where', '<?php echo $GLOBALS['host'];?>/controller/navigator/lieu.php');
</script>
