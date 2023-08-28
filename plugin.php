<?php
/*
Plugin Name: Croatia IP Logger
Description: Prati tko je što sumnjivo radio.
Version: 1.0.1
Author: SNC SECURITY d.o.o.
*/


function croatia_ip_logger_banner() {
    $message = 'Ova webstranica radi unaprjeđenja kvalitete usluge uz pomoć umjetne inteligencije i plugina CROATIA-IP LOGGER bilježi IP adresu zbog zaštite osobnih podataka i DDoS zaštite stranice. Ukoliko ne prihvaćate biti ćete vraćeni na prethodnu stranicu.';
    echo '<div id="croatia-ip-logger-banner" style="background-color: #f2f2f2; padding: 10px; text-align: center;">';
    echo $message . '<br>';
    echo '<button id="croatia-ip-logger-accept">PRIHVAĆAM</button>';
    echo '<button id="croatia-ip-logger-decline">ODBIJAM</button>';
    echo '</div>';
}

function croatia_ip_logger_script() {
    wp_enqueue_script('croatia-ip-logger', plugin_dir_url(__FILE__) . 'croatia-ip-logger.js', array('jquery'), '1.0.0', true);

    $script_data = array(
        'redirect_url' => 'https://www.google.hr' // Promijenite ovo na željeni URL
    );

    wp_localize_script('croatia-ip-logger', 'croatia_ip_logger', $script_data);
}

add_action('wp_footer', 'croatia_ip_logger_banner');
add_action('wp_enqueue_scripts', 'croatia_ip_logger_script');

?>
