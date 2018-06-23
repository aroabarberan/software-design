## Autoload

Everything is loaded with composer. If something is not automatically loaded
execute the following comand:
```
composer dumpautoload
```

Due to autoload system, everything must belong to a namespace (defined AT THE START
of the file). It is configured so the folder *src* is called **App**. Every folder inside
this one will be called **App\Subfolder**. For example, the *AddressController.php*
is located at *src/Controller/AddressController.php*, so his **namespace** will be *App\Controller*, and you must import it using *App\Controller\AddressController*.
If there are questions about it an alternative is check how it works looking at the files.

## Docker

The project can be executed from Docker using the following command inside
the **formatters** folder:
```
docker-compose up
```
After that, the application will be running on port *8080*.

In order to run it, you must select the path in your computer where it is
located using the environment variable *PROJECT_ROOT*. Copy *.env.example* to *.env*
and configure it (the file it's self explanatory).

## The project

Every route is redirected to **index.php**, and then the traffic is enrouted
to the multiples controllers depending on the path. For example, the route */languages*
will be handled by *languageController*, but the file executed is always *index.php*.

The application have three paths, */languages*, */countries*, and */addresses*. The
only that is done is the first one. They all will do the same, return a *formatted* string
with the list of languages, countries or addresses.

## Your job

1. Install docker, create the *.env* file, and start the server. Check that it works
going to http://localhost:8080/languages.

2. Understand the application.

3. Fill the methods that are about to do (marked with //TODO)
