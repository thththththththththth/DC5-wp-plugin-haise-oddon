<?php
/*
Plugin Name: Réservation ++
Description: est un plugin WordPress intuitif et complet pour toutes vos besoins en matière de réservation en ligne. Conçu spécialement pour les hôtels, restaurants, agences de location, et tout autre business nécessitant un système de réservation, ce plugin offre une interface utilisateur épurée et facile à naviguer.
Version: 1.0
Author: Haise Tom & Oddon Maxime
*/

// Fonction pour afficher le formulaire
function afficher_formulaire_reservation() {
    $contenu_html = '
    <form id="reservation-form" method="post">
   
        <div class="form-group">
            <label for="text">Votre prénom :</label>
            <input type="text" id="text" name="text" required>
        </div>

        <div class="form-group">
            <label for="text">Votre nom :</label>
            <input type="text" id="text" name="text" required>
        </div>

        <div class="form-group">
            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="date">Sélectionnez un jour :</label>
            <input type="date" id="date" name="date" required>
        </div>

        <div class="form-group">
            <label for="horaire">Sélectionnez un créneau :</label>
            <select id="horaire" name="horaire" required>
                <option value="">Choisissez un horaire</option>
                <option value="09:00-10:00">09:00 - 10:00</option>
                <option value="10:00-11:00">10:00 - 11:00</option>
                <option value="11:00-12:00">11:00 - 12:00</option>
            </select>
        </div>

        <input type="submit" id="submit-reservation" value="Réserver">
    </form>';

    return $contenu_html;
}

// Créer un shortcode pour intégrer le formulaire dans des pages ou des articles
function shortcode_formulaire_reservation() {
    return afficher_formulaire_reservation();
}

add_shortcode('formulaire_reservation', 'shortcode_formulaire_reservation');

function charger_styles_formulaire() {
    wp_enqueue_style('style-formulaire', get_template_directory_uri() . '/style-formulaire.css');
}
add_action('wp_enqueue_scripts', 'charger_styles_formulaire');
?>
