jQuery(document).ready(function($) {
    $('#croatia-ip-logger-accept').click(function() {
        // Logika za prihvaćanje
        // Ovdje možete dodati kod za bilježenje IP adrese u txt datoteku
        
        // Preusmjeravanje na istu stranicu
        location.reload();
    });
    
    $('#croatia-ip-logger-decline').click(function() {
        // Preusmjeravanje na definirani URL za odbijanje
        window.location.href = croatia_ip_logger.redirect_url;
    });
});
