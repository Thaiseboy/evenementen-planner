# Evenementenplanner

Een Laravel-gebaseerd evenementbeheersysteem waarmee gebruikers evenementen kunnen maken, bewerken, verwijderen en bekijken.

## Features

- Gebruikers kunnen evenementen aanmaken, bewerken en verwijderen.
- Evenementen worden opgeslagen in een relationele database.
- Gebruikers kunnen eenvoudig evenementen inzien.
- Beveiligd met gebruikersauthenticatie.
- Responsief ontwerp en eenvoudig te gebruiken.

## Technologieën

Dit project maakt gebruik van de volgende technologieën:
- Laravel voor de back-end.
- TailwindCSS voor de styling.
- MySQL voor de database.# evenementen-planner


# Installatie

Volg de onderstaande stappen om het project lokaal op je machine te draaien:

1. **Clone het repository:**
Clone het project naar je lokale machine via Git:
* git clone https://github.com/Thaiseboy/evenementen-planner.git

2. **Navigeer naar de projectmap** 
* cd evenementenplanner

3. **Installeer de benodigde PHP dependencies**
* composer install

4. **Installeer de font-end dependencies
* npm install

5. **configureer de database instelling** 
*DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=evenementenplanner
DB_USERNAME=root
DB_PASSWORD=

6. **Genereer de applicatiesleutel**
* php artisan key:generate

7. **Voer de database-migraties uit**
* php artisan migrate

8. **Start de development server**
* php artisan serve

Het project is nu te bereiken op http://localhost:8000.

**Opmerking:** Zorg ervoor dat je MySQL draait op je lokale machine of via een externe database, en dat je de juiste verbinding instelt in het .env bestand.