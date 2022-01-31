## **About**
This is make project authentication with Laravel 8 mixing LDAP (LDAPRecord)


## **Requirements**
> _PHP >= 7.2_ and _Laravel >= 5.6_


## **Steps**
1. Run `composer require directorytree/ldaprecord-laravel`
2. Run `php artisan vendor:publish --provider="LdapRecord\Laravel\LdapServiceProvider"`
3. Setup LDAP connections, or paste the following in your .env file:
```
LDAP_LOGGING=true
LDAP_CONNECTION=default
LDAP_HOST=ldap.forumsys.com
LDAP_USERNAME=
LDAP_PASSWORD=
LDAP_PORT=389
LDAP_BASE_DN="dc=example,dc=com"
LDAP_TIMEOUT=5
LDAP_SSL=false
LDAP_TLS=false  
```
4. Run `php artisan migrate`
5. Run `php artisan serve`
6. Open your browser and access your URL project (*default URL: `localhost:8000`*) 
7. login with account from [Online LDAP Test Server](https://www.forumsys.com/2014/02/22/online-ldap-test-server/) (*username:`tesla` password:`tesla`*)

##
##

# Thanks You For Your Visited
![x-removebg-preview](https://user-images.githubusercontent.com/48183946/151840611-ac4fb7a4-d2c1-4ba3-9893-17dc28fa9d6a.png)
