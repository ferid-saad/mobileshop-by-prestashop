# 📱 MobileShop - E-commerce de Téléphones

<div align="center">

![PrestaShop](https://img.shields.io/badge/PrestaShop-8.x-orange?style=for-the-badge&logo=prestashop)
![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-8.0%2B-4479A1?style=for-the-badge&logo=mysql)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-purple?style=for-the-badge&logo=bootstrap)

**Boutique en ligne spécialisée dans la vente de téléphones mobiles - Développée avec PrestaShop**

[Installation](#-installation-rapide) • [Fonctionnalités](#-fonctionnalités) • [Admin](#-accès-à-ladministration) • [Structure](#-structure-du-projet)

</div>

## 📖 Aperçu du Projet

**MobileShop** est une boutique en ligne complète spécialisée dans la vente de téléphones mobiles, développée avec PrestaShop. La plateforme offre une expérience d'achat optimale avec un catalogue de produits riche, un système de paiement sécurisé et une interface administrateur complète.

### 🚀 Accès Rapide

| Composant | Détails |
|-----------|---------|
| **🛒 Boutique** | `http://localhost/mobileshop-by-prestashop/` |
| **⚙️ Admin** | `http://localhost/mobileshop-by-prestashop/admin/` |
| **📧 Admin Email** | `admin@mobileshop.com` |
| **🔑 Admin Password** | `admin123` |
| **🗄️ Base de données** | `mobileshop_db` |

## 🛠 Technologies Utilisées

- **PrestaShop 8.x** - Plateforme e-commerce
- **PHP 8.1+** - Langage de programmation
- **MySQL 8.0+** - Base de données
- **Apache 2.4+** - Serveur web
- **Bootstrap 5** - Framework CSS
- **JavaScript/jQuery** - Interactivité

## 📋 Prérequis Système

### Serveur Web
- **Apache 2.4+** avec mod_rewrite activé
- **PHP 8.1+** (recommandé 8.2)
- **MySQL 8.0+** ou MariaDB 10.6+

### Extensions PHP Requises
```ini
extension=curl
extension=gd
extension=intl
extension=mbstring
extension=mysql
extension=openssl
```
### ⚡ Installation Rapide
1. Téléchargement et Déploiement
extension=zip
extension=xml
extension=fileinfo

# Cloner le dépôt
 ```ini
git clone https://github.com/ferid-saad/mobileshop-by-prestashop.git
cd mobileshop-by-prestashop

2. Configuration de la Base de Données
  
Création de la base MySQL
CREATE DATABASE mobileshop_db;
CREATE USER 'mobileshop_user'@'localhost' IDENTIFIED BY 'password123';
GRANT ALL PRIVILEGES ON mobileshop_db.* TO 'mobileshop_user'@'localhost';
FLUSH PRIVILEGES;
```
### 🏗️ Structure du Projet

```ini
mobileshop-by-prestashop/
├── 📁 app/                          # Application Core
├── 📁 cache/                        # Cache
├── 📁 classes/                      # Classes PHP
├── 📁 config/                       # Configuration
├── 📁 controllers/                  # Contrôleurs
├── 📁 img/                          # Images
│   ├── 📁 p/                        # Images produits
│   └── 📁 c/                        # Images catégories
├── 📁 install/                      # Installateur
├── 📁 js/                           # JavaScript
├── 📁 modules/                      # Modules
│   ├── 📁 ps_banner/               # Bannières
│   ├── 📁 ps_imageslider/          # Slider images
│   └── 📁 ps_featuredproducts/     # Produits en vedette
├── 📁 themes/                       # Thèmes
│   └── 📁 classic/                 # Thème classique
├── 📁 upload/                       # Uploads
├── 📁 var/                          # Logs et cache
├── 📁 vendor/                       # Dépendances
├── 📄 .htaccess                     # Règles Apache
├── 📄 index.php                     # Point d'entrée
└── 📄 prestashop.sql               # Dump base de données
```

### 👨‍💻 Auteur

Ferid Saad

GitHub: @ferid-saad

Projet: Boutique e-commerce MobileShop


