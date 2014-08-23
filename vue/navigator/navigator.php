
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



        <ul>
            <li>
                <label for="search"> <?php echo $nav_search_label; ?> </label>
                <input type="search" name="search" id="search" placeholder="<?php echo $nav_search_placeholder; ?>" autocomplete="off"/>
                <ul id="ajax_search" class="like_input" style="display: none;"> </ul>
            </li>

            <li>
                <label for="where"> <?php echo $nav_where_label; ?> </label>
                <input type="search" name="where" id="where" placeholder="<?php echo $nav_where_placeholder; ?>" autocomplete="off"/>
                <ul id="ajax_where" class="like_input" style="display: none;"> </ul>
            </li>

            <li>
                <button value="submit" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </li>

        </ul>

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
