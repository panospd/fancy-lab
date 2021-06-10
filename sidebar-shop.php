<?php 

/**
 * 
 * The template for the sidebar containing the Woocommerce widgets area
 * 
 * @package Fancy Lab
 * 
 */
?>

<?php if(is_active_sidebar('fancy-lab-sidebar-1')): ?>
  <?php dynamic_sidebar('fancy-lab-sidebar-shop'); ?>
<?php endif; ?>