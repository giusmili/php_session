# Les sessions utilisateur en PHP
![cover](./asset/session-PHP-905x509.jpg)
Une session en PHP correspond à une façon de stocker des données différentes pour chaque utilisateur 
en utilisant un identifiant de session unique.

## Exemple : 
```php
    <?php
        session_start();
        $_id_session = session_id();
    ?>