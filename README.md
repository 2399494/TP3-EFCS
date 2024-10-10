#Projet : EFCS

**Date** : 9 octobre 2024  

**Description** : Ce projet consiste à déployer une architecture de site Web avec équilibrage de charge en utilisant Ansible et Docker. Nginx agit comme un équilibreur de charge, Apache sert de serveur de contenu, php-fpm est utilisé pour FastCGI, et MySQL pour la base de données. Tout le déploiement est automatisé à l'aide de conteneurs.

## Infrastructure déployée :
- Nginx comme Load Balancer
- Apache (httpd) comme serveur de contenu
- php-fpm pour l'exécution de scripts PHP
- MySQL pour la gestion de base de données
- Serveurs Web (srv-web1, srv-web2) avec des configurations distinctes

### Vidéo de démonstration :
[Voir la vidéo](https://lienverslavideo.com)

## Utilisation :
1. Clonez le dépôt.
2. Assurez-vous que Docker et Ansible sont installés sur votre machine.
3. Ajoutez le fichier `.traces_d_ansible` pour traquer les commandes Ansible exécutées.
4. Lancez le déploiement avec la commande suivante :
    ```bash
    ansible-playbook deploiement.yaml
    ```

## Fichiers inclus :
- `deploiement.yaml` : Playbook principal pour déployer l'infrastructure.
- `ansible.cfg` : Configuration Ansible.
- `inventaire.yaml` : Fichier d'inventaire pour les hôtes.
- `.traces_d_ansible` : Fichier de traçage des commandes Ansible.
- `httpd.conf` : Configuration d'Apache.

## Sites de référence :
- [Documentation officielle Ansible](https://docs.ansible.com)
- [Guide d'installation Docker](https://docs.docker.com/get-docker/)
- [Nginx Load Balancing](https://nginx.org/en/docs/http/load_balancing.html)

## Collaboration :
J'ai ajouté **jpduchesneauCegep** en tant que collaborateur sur ce dépôt.

## Historique des commits :
L'utilisation des commits Git permet de retracer l'historique complet de ce projet. Utilisez la commande `git log` pour consulter les détails.
