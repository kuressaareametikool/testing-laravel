# Testides Laraveli

##Kuidas installida

1)  WSL 2
    Kontrolli kas WSL 2 on tõmmatud
    Ava powershell ja kirjuta
    `wsl --list --verbose`
    Peaks ütlema
```
   NAME                   STATE           VERSION
   Ubuntu-20.04           Running         2. 
```
Kui ütleb version 1, siis jälgi
https://docs.microsoft.com/en-us/windows/wsl/install-win10

2) Installi Docker

https://docs.docker.com/get-started/

3) Klooni repo

4) Testide jooksutamiseks vajaliku tarvara saamiseks kirjuta terminali:

``` composer install ```

Kui composer puudub saab selle siit

https://getcomposer.org/download/


##Serveri käivitamine

```
mv .env.example .env
```
```
./vendor/bin/sail up -d
```
```
./vendor/bin/sail artisan key:generate
```

Testite jooksutamine

```
./vendor/bin/sail test
```
