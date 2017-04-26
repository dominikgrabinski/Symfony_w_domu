# PHP &ndash; Symfony
## Widoki i Twig

## Część B &ndash; podstawowa składnia Twig

### Zadanie B1 &ndash; przekazywanie danych do szablonu
Stwórz nową akcję przypisaną do adresu `/render/{username}`. Podepnij do niej widok `view_ex_b1.html.twig` (który możesz znaleźć w katalogu z zadaniami). Widok ten przyjmuje jedną zmienną o nazwie `username`. Przekaż ją.

### Zadanie B2 &ndash; adnotacje
Przerób zadania A3 i B1 w taki sposób, żeby skorzystać z adnotacji @Template. Nie usuwaj starego rozwiązania, tylko je zakomentuj.

### Zadanie B3 &ndash; pierwszy szablon
Stwórz akcję podpiętą do adresu `/repeatSentence/{n}`.
Do akcji dopisz widok, który powtórzy **n** razy zdanie „Symfony jest fajne” . Pętle wykonaj w szablonie, przekaż do niego liczbę powtórzeń.

Zmodyfikuj swoje rozwiązanie w taki sposób, żeby zdanie, które wyświetlasz, było przekazane z kontrolera. Dopiero w chwili, w której zdanie nie jest przekazane, ma się wyświetlić napis „Symfony jest fajne”.

### Zadanie B4 &ndash; zaawansowany szablon
Stwórz akcję podpiętą do adresu `/createRandoms/{start}/{end}/{n}`.
Akcja ma generować tablicę z `n` losowymi liczbami z zakresu `start` do `end` którą prześlesz do swojego widoku. Nastepnie w Twigu użyj pętli `for` żeby wyświetlić wszystkie przesłane liczby.
Jeżeli tablica jest pusta (czyli podane `n` jest mniejsze lub równe 0) powinieneś wyświetlić odpowiednią informacje.

### Zadanie B5 &ndash; artykuł
Stwórz szablon, który powinien wyświetlić artykuł. Klasę artykułu możesz znaleźć w katalogu z ćwiczeniami.
Umieść go w folderze: `/yourBundle/Entity` (jeżeli go nie ma, to go stwórz).

Pamiętaj o zmianie namespace na poprawny + dołączenia klasy `Article` do Twojego kontrolera:
```
use <your_bundle>\Entity\Article;
```
Następnie dopisz akcję `/showArticle/{n}`, która wczyta artykuł o podanym **ID** i go wyświetli.


<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
