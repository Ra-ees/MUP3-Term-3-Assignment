<?php
/**
 * Custom Search Form
 *
 * @package Elan_Wellness_Spa
 */
?>

<form role="search"
      method="get"
      class="max-w-3xl mx-auto"
      action="<?php echo esc_url( home_url( '/' ) ); ?>">

    <div class="flex flex-col md:flex-row gap-4">

        <input
            type="search"
            class="flex-1 border border-gray-300 rounded-full px-6 py-4 focus:outline-none focus:ring-2 focus:ring-secondary"
            placeholder="<?php echo esc_attr__( 'Search...', 'elan-wellness-spa' ); ?>"
            value="<?php echo get_search_query(); ?>"
            name="s"
        >

        <button
            type="submit"
            class="bg-secondary hover:bg-primary transition duration-300 text-white px-8 py-4 rounded-full shadow-lg">

            <i class="fa-solid fa-magnifying-glass mr-2"></i>

            <?php esc_html_e( 'Search', 'elan-wellness-spa' ); ?>

        </button>

    </div>

</form>