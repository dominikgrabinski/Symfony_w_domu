# PHP &ndash; Symfony
## kontrolery i routing

## Część B &ndash; Podstawowy Routing

### Zadanie B1 &ndash; slug 1 - rozwiązywane z wykładowcą
Stwórz nową akcję przypisaną do adresu `/goodbye/{username}`, gdzie `{username}` jest slugiem. Akcja ma wyświetlać napis: „Goodbye ” + nazwa przekazana przez slug.

### Zadanie B2 &ndash; slug 2
Stwórz nową akcję przypisaną do adresu `/welcome/{name}/{surname}`, gdzie `{name}` i `{surname}` są slugami. Akcja ma wyświetlać napis: „Welcome ” + dane przekazane przez slugi.
Nadaj slugom wartości domyślne (np. Twoje imię i nazwisko).

### Zadanie B3 &ndash; slug 3
Stwórz nową akcję przypisaną do adresu `/showPost/{id}` gdzie `{id}` jest slugiem. Akcja ma wyświetlać napis: „Showing post ” + **id**. Dodaj odpowiednie adnotacje, tak aby **id** było liczbą.

### Zadanie B4 &ndash; metody
Stwórz dwie akcje:
  1. Pierwsza akcja ma być przypisana do adresu `/form` i metody `GET`. Ma ona wyświetlać formularz zawarty wpliku form.html.twig z polem tesktowym.
  2. Druga akcja ma być przypisana do adresu `/form` i metody `POST`. Akcja ma &ndash; póki co &ndash; wyświetlać napis „Formularz przyjęty”. Nie przejmuj się &ndash; na tym etapie &ndash; przesłanymi danymi.

### Zadanie B5 &ndash; przedrostek
Dodaj do całego kontrolera przedrostek `/first`. Zobacz, jak zmieniły się adresy wszystkich do tej pory stworzonych przez Ciebie stron.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
