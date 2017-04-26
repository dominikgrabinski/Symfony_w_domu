# PHP &ndash; Symfony
## Doctrine i modele

## Część C &ndash; Praca na modelu

### Zadanie C1 &ndash; tworzenie książki
Stwórz akcję `/newBook`, która ma wyświetlać formularz do tworzenia nowej książki. Formularz &ndash; póki co &ndash; napisz w normalnym HTML. Formularz ma kierować do akcji `/createBook`.

### Zadanie C2 &ndash; tworzenie książki
Stwórz akcję `/createBook`. Akcja ta ma pobierać informacje z POST-a i na jej podstawie tworzyć i zapamiętywać do bazy danych nową książkę. Na razie powinna wyświetlać statyczną informację o tym, że udało się stworzyć książkę (co zweryfikuj za pomocą PHPMyAdmin).

### Zadanie C3 &ndash; wyświetlanie książki
Stwórz akcję `/showBook/{id}`, która ma pobierać książkę o podanym **id** z bazy danych i wyświetlać jej informację na stronie. Zmodyfikuj akcję `/createBook` tak żeby po stworzeniu nowej książki przekierowywała do akcji `/showBook` dla nowo dodanej książki.

### Zadanie C4 &ndash; lista książek
Stwórz akcję podpiętą do adresu `/showAllBooks`. Powinna ona wczytać wszystkie książki i wyświetlić ich tytuły. Przy każdej książce powinien być link do wyświetlenia pełnej informacji o niej.

### Zadanie C5 &ndash; usuwanie książek
Stwórz akcję podpiętą do adresu `/deleteBook/{id}`. Powinna ona usuwać książkę o podanym **id** i pokazywać o tym informacje.


<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
