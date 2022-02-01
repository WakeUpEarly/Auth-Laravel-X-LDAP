## **About**
This is make project authentication with Laravel 8 mixing LDAP (LDAPRecord)

##
##

## **Requirements**
> _PHP >= 7.2_ and _Laravel >= 5.6_

##
##

## **Steps**
1. Clone this repository to your directory project (`git clone https://github.com/WakeUpEarly/Auth-Laravel-X-LDAP.git`)
2. Setting `php.ini` file:
```
.......
extension=gettext
;extension=gmp
;extension=intl
;extension=imap
extension=ldap  //please delete ";"
extension=mbstring
extension=exif      ; Must be after mbstring as it depends on it
extension=mysqli
......
```
3. Restart your Apache
4. Run `composer install`
5. Create `.env` file, copy from `.env.example` 
6. Create table `testLDAP`   
7. Run `composer require directorytree/ldaprecord-laravel`
8. Run `php artisan vendor:publish --provider="LdapRecord\Laravel\LdapServiceProvider"`
9. Setup LDAP connections, paste the following in your `.env` file:
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
10. Run `php artisan migrate`
11. Run `php artisan serve`
12. Open your browser and access your URL project (*default URL: `localhost:8000`*) 
13. login with account from [Online LDAP Test Server](https://www.forumsys.com/2014/02/22/online-ldap-test-server/) (*username:`tesla` password:`password`*)
14. Congratulation.

##
##

# Thanks You For Your Visited
![x-removebg-preview](https://user-images.githubusercontent.com/48183946/151840611-ac4fb7a4-d2c1-4ba3-9893-17dc28fa9d6a.png)
