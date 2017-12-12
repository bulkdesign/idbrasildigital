<?php /* Add to themes/[theme]/woocommerce/loop/pagination.php */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 
global $wp_query;
 
if( $_GET['view'] === 'all' ) { ?>
  <div class="woo-pagination wg-view-less"><a href=".">View Less</a></div>
<?php }
 
if ( $wp_query->max_num_pages <= 1 )
    return;
?>
 
<nav class="woocommerce-pagination woo-pagination center">
    <?php
 
        echo paginate_links( apply_filters( 'woocommerce_pagination_args', array(
            'base'          => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
            'format'        => '',
            'current'       => max( 1, get_query_var('paged') ),
            'total'         => $wp_query->max_num_pages,
            'prev_text'     => '&larr;',
            'next_text'     => '&rarr;',
            'type'          => 'list',
            'end_size'      => 2,
            'mid_size'      => 0
        ) ) );
    ?>
 
 
  <?php if (is_paged()) : ?> 
    <div class="button wg-view-all wg-view-right"><a href="../../?view=all">View All</a></div>
  <?php else: ?>
    <div class="wg-view-all wg-view-right"><a href="?view=all">View All</a></div>
  <?php endif; ?>
 
</nav>