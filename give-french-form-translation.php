<?php
/*
 * Plugin Name: Give - French Form Translation
 * Plugin URI: https://github.com/impress-org/givewp-snippet-library/blob/master/translation-snippets/change-text-locally-per-form.php
 * Description: Additional functionality for Stand Ahead French Donation Page. Translates text on that page.
 * Author: WordImpress
 * Author URI: https://wordimpress.com
 * Version: 0.1
 * Text Domain: give
 * Domain Path: /languages
 * GitHub Plugin URI: https://github.com/impress-org/givewp-snippet-library/blob/master/translation-snippets/change-text-locally-per-form.php
 *
 * Translation strings.
 *
 */

/**
 * A local translation snippet for making text changes to only one of the forms.
 * Change 'YOUR TEXT HERE' to your desired text, and the "964" to the form ID you'd like to modify.
 *
 * Also, ensure that all functions here have unique names to avoid conflicts.
 *
 * @param $translations
 * @param $text
 * @param $domain
 *
 * @return mixed|string
 */
 
function my_give_picky_text_switcher( $translations, $text, $domain ) {
	// Only for the 'give' text domain.

	//Form Elements

	if ( $domain == 'give' && $text == 'Personal Info' ) { return __( 'Renseignements personnels', 'give' ); }	
	if ( $domain == 'give' && $text == 'First Name' ) { return __( 'Prénom', 'give' ); 	}
	if ( $domain == 'give' && $text == 'Last Name' ) { return __( 'Nom', 'give' ); 	}
	if ( $domain == 'give' && $text == 'Email Address' ) { return __( 'Courriel', 'give' ); }
	
	if ( $domain == 'give' && $text == 'Credit Card Info' ) { return __( 'Carte de crédit', 'give' ); }
	if ( $domain == 'give' && $text == 'This is a secure SSL encrypted payment.' ) { return __( 'Paiement encrypté et sécurisé par protocole SSL.', 'give' ); }
	if ( $domain == 'give' && $text == 'Card Number' ) { return __( 'Numéro de carte de crédit', 'give' ); }
	if ( $domain == 'give' && $text == 'CVC' ) { return __( 'Code de sécurité', 'give' ); }
	if ( $domain == 'give' && $text == 'Cardholder Name' ) { return __( 'Titulaire de la carte', 'give' ); }
	if ( $domain == 'give' && $text == 'MM / YY' ) { return __( 'MM / AA', 'give' ); }

	if ( $domain == 'give' && $text == 'Billing Details' ) { return __( 'Renseignements de facturation', 'give' ); }
	if ( $domain == 'give' && $text == 'Country' ) { return __( 'Pays', 'give' ); }
	if ( $domain == 'give' && $text == 'Address line 1' ) { return __( 'Adresse ligne 1', 'give' ); }
	if ( $domain == 'give' && $text == 'Address line 2' ) { return __( 'Adresse ligne 2', 'give' ); }
	if ( $domain == 'give' && $text == 'City' ) { return __( 'Ville', 'give' ); }
	if ( $domain == 'give' && $text == 'Province' ) { return __( 'Province/État', 'give' ); }
	if ( $domain == 'give' && $text == 'Zip / Postal Code' ) { return __( 'Code postal', 'give' ); }
	
	if ( $domain == 'give' && $text == 'Donation Total:' ) { return __( 'Montant total du don', 'give' ); }

	// Error messages
/*
	if ( $domain == 'give' && $text == 'Please enter your first name.' ) { return __( 'Erreur avec prenom', 'give' ); }


	if ( $domain == 'give' && $text == 'Your card number is incomplete.' ) { return __( 'Erreur avec carte de credit.', 'give' ); }

	if ( $domain == 'give' && $text == 'Please enter a name of your credit card account holder.' ) { return __( 'Erreur!', 'give' ); }
	if ( $domain == 'give' && $text == 'Error: Please enter a name of your credit card account holder.' ) { return __( 'Erreur!', 'give' ); }
	if ( $domain == 'give' && $text == 'Please enter a name for the credit card.' ) { return __( 'Erreur', 'give' ); }
*/
	//Donation Confirmation page
/*

	if ( $domain == 'give' && $text == 'Please verify your email to access your donation history.' ) { return __( 'Please verify your email to access your donation history. / Verifiez votre courriel...', 'give' ); }

*/

	
	
	return $translations;
}
/**
 * Conditional for gettext.
 *
 * @param $form_id
 */
function my_give_confirm_form( $form_id ) {
	// Customize form title here or remove conditional for all forms.
	if ( $form_id == 37266 ) {
		add_filter( 'gettext', 'my_give_picky_text_switcher', 10, 3 );
	}
}
add_action( 'give_pre_form_output', 'my_give_confirm_form', 10, 1 );


?>
