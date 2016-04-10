<?php
    function the_breadcrumb() {
         echo '<ul id="crumbs">';
         if (!is_home()) {
             echo '<a href="';
             echo get_option('home');
             echo '">';
             echo 'Trang chủ';
             echo "</a> / ";
             if (is_category() || is_single()) {
                the_category(' / ');
                 if (is_single()) {
                    the_title(' / ');
                 }
             } elseif (is_page()) {
                echo the_title(' / ');
             }
        }
         elseif (is_tag()) {
            single_tag_title();
        }
         elseif (is_day()) {
            echo"<li>Archive for ";
            the_time('F jS, Y'); 
            echo'</li>';
        }
         elseif (is_month()) {
            echo"<li>Archive for "; 
             the_time('F, Y'); 
             echo'</li>';
         }
         elseif (is_year()) {
            echo"<li>Archive for "; 
            the_time('Y'); 
            echo'</li>';
        }
         elseif (is_author()) {
            echo"<li>Author Archive"; 
            echo'</li>';
        }
         elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
            echo "<li>Blog Archives"; 
            echo'</li>';
        }
         elseif (is_search()) {
            echo"<li>Search Results"; 
            echo'</li>';
        }
         echo '</ul>';
    }
?>
<div class="breadcrumbs">
<?php the_breadcrumb(); ?>
</div>