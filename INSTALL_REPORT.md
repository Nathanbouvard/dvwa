# Rapport d'Installation DVWA

**Date :** 13 Janvier 2026
**Système :** macOS (Darwin)
**Méthode :** Installation manuelle sur pile MAMP

## 1. Vue d'ensemble
L'application DVWA (Damn Vulnerable Web Application) a été installée manuellement à partir du code source PHP et est hébergée par le serveur local MAMP. L'utilisation de Docker a été contournée au profit d'une exécution directe sur la machine hôte.

## 2. Environnement Technique

*   **Serveur Web :** Apache (fourni par MAMP)
*   **Base de Données :** MySQL 8.0 (fournie par MAMP)
*   **Langage :** PHP 8.x
*   **Dossier Racine (Project Root) :** `/Applications/MAMP/htdocs/dvwa/`
*   **URL d'accès :** [http://localhost:8888/dvwa/](http://localhost:8888/dvwa/)

## 3. Configuration Appliquée

Le fichier de configuration `/config/config.inc.php` a été modifié pour s'adapter aux spécificités de MAMP sur macOS :

*   **Hôte Base de Données :** `127.0.0.1` (Force l'usage TCP/IP pour éviter les conflits de socket Unix)
*   **Port Base de Données :** `8889` (Port standard MySQL pour MAMP)
*   **Utilisateur BDD :** `root`
*   **Mot de passe BDD :** `root`
*   **Base de Données :** `dvwa`

## 4. Identifiants par défaut

### Accès Application Web
*   **URL :** `http://localhost:8888/dvwa/login.php`
*   **Utilisateur :** `admin`
*   **Mot de passe :** `password`

### Accès Base de Données (Interne)
*   **Hôte :** `127.0.0.1`
*   **Port :** `8889`
*   **Utilisateur :** `root`
*   **Mot de passe :** `root`

## 5. Notes de maintenance
Pour redémarrer l'application, assurez-vous simplement que l'application **MAMP** est lancée et que les serveurs (Apache & MySQL) sont actifs (bouton "Start Servers" dans MAMP).
