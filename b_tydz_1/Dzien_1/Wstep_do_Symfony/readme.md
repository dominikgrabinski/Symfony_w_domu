# PHP &ndash; Symfony
## Wstęp do Symfony

### Zadanie 1 &ndash; tworzenie projektu - rozwiązywane z wykładowcą
Stwórz nowy projekt o nazwie **projekt_1**.
Następnie wykonaj następujące kroki:
  1. Uruchom serwer deweloperski.
  2. Sprawdź czy wyświetli Ci się strona strona startowa Symfony.
  3. Jeśli strona startowa się wyświetla, to wejdź do profilera. Zobacz, jakie ma opcje i czego możesz się z niego dowiedzieć.
  4. Wejdź na stronę, której jeszcze nie ma np. http://localhost:8080/noSuchPage. 
  5. Zobacz, w jaki sposób Symfony komunikuje błąd oraz to co go spowodowało

### Zadanie 2 &ndash; dodawanie bundla korzystając z komendy konsolowej
W projekcie o nazwie **projekt_1** wykonaj następujące kroki:
  1. Dodaj nowego bundla o nazwie CodersLabBundle. Pamiętaj o wybraniu annotacji, stworzeniu automatyczne całego katalogu i automatycznego dopisania informacji do Kernela i Routingu.
  2. Wejdź pod adres http://localhost:8080/hello/world. Jeżeli widzisz stronę, która wyświetla napis **Hello World** &ndash; Twój bundle działa poprawnie.
  3. Otwórz projekt w edytorze i przejrzyj katalog nowo utworzonego bundla.

### Zadanie 3 &ndash; usuwanie bundla
W projekcie o nazwie **projekt_1** usuń domyślnego bundla o nazwie AppBundle wykonując trzy kroki:
  1. Usuń odpowiedni wpis w pliku routingu (`/app/config/routing.yml`),
  2. Usuń kod tworzący nowy obiekt Bundla w kernelu (`/app/AppKernel.php`),
  3. Usuń katalog Bundla.

Żeby potwierdzić, że domyślny Bundle został poprawnie usunięty, wykonaj następujące czynności:
  1. Wejdź na stronę http://localhost:8080/ &ndash; powinien się pokazać błąd: No route found for "GET /"
  2. Wejdź pod adres http://localhost:8080/hello/world. Strona powinna się poprawnie ładować.


<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
