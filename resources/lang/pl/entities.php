<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Ostatnio utworzone',
    'recently_created_pages' => 'Ostatnio utworzone strony',
    'recently_updated_pages' => 'Ostatnio zaktualizowane strony',
    'recently_created_chapters' => 'Ostatnio utworzone rozdziały',
    'recently_created_books' => 'Ostatnio utworzone książki',
    'recently_created_shelves' => 'Ostatnio utworzone półki',
    'recently_update' => 'Ostatnio zaktualizowane',
    'recently_viewed' => 'Ostatnio wyświetlane',
    'recent_activity' => 'Ostatnia aktywność',
    'create_now' => 'Utwórz teraz',
    'revisions' => 'Wersje',
    'meta_revision' => 'Wersja #:revisionCount',
    'meta_created' => 'Utworzono :timeLength',
    'meta_created_name' => 'Utworzono :timeLength przez :user',
    'meta_updated' => 'Zaktualizowano :timeLength',
    'meta_updated_name' => 'Zaktualizowano :timeLength przez :user',
    'entity_select' => 'Wybór obiektu',
    'images' => 'Obrazki',
    'my_recent_drafts' => 'Moje ostatnie wersje robocze',
    'my_recently_viewed' => 'Moje ostatnio wyświetlane',
    'no_pages_viewed' => 'Nie przeglądałeś jeszcze żadnych stron',
    'no_pages_recently_created' => 'Nie utworzono ostatnio żadnych stron',
    'no_pages_recently_updated' => 'Nie zaktualizowano ostatnio żadnych stron',
    'export' => 'Eksportuj',
    'export_html' => 'Plik HTML',
    'export_pdf' => 'Plik PDF',
    'export_text' => 'Plik tekstowy',

    // Permissions and restrictions
    'permissions' => 'Uprawnienia',
    'permissions_intro' => 'Jeśli włączone są indywidualne uprawnienia, to te uprawnienia będą miały priorytet względem pozostałych ustawionych uprawnień ról.',
    'permissions_enable' => 'Włącz własne uprawnienia',
    'permissions_save' => 'Zapisz uprawnienia',

    // Search
    'search_results' => 'Wyniki wyszukiwania',
    'search_total_results_found' => ':count znalezionych wyników|:count ogółem znalezionych wyników',
    'search_clear' => 'Wyczyść wyszukiwanie',
    'search_no_pages' => 'Brak stron spełniających zadane kryterium',
    'search_for_term' => 'Szukaj :term',
    'search_more' => 'Więcej wyników',
    'search_advanced' => 'Wyszukiwanie zaawansowane',
    'search_terms' => 'Szukane frazy',
    'search_content_type' => 'Rodzaj treści',
    'search_exact_matches' => 'Dokładne frazy',
    'search_tags' => 'Tagi wyszukiwania',
    'search_options' => 'Opcje',
    'search_viewed_by_me' => 'Wyświetlone przeze mnie',
    'search_not_viewed_by_me' => 'Niewyświetlone przeze mnie',
    'search_permissions_set' => 'Zbiór uprawnień',
    'search_created_by_me' => 'Utworzone przeze mnie',
    'search_updated_by_me' => 'Zaktualizowane przeze mnie',
    'search_date_options' => 'Opcje dat',
    'search_updated_before' => 'Zaktualizowane przed',
    'search_updated_after' => 'Zaktualizowane po',
    'search_created_before' => 'Utworzone przed',
    'search_created_after' => 'Utworzone po',
    'search_set_date' => 'Ustaw datę',
    'search_update' => 'Zaktualizuj wyszukiwanie',

    // Shelves
    'shelf' => 'Półka',
    'shelves' => 'Półki',
    'x_shelves' => ':count Półek|:count Półek',
    'shelves_long' => 'Półki',
    'shelves_empty' => 'Brak utworzonych półek',
    'shelves_create' => 'Utwórz półkę',
    'shelves_popular' => 'Popularne półki',
    'shelves_new' => 'Nowe półki',
    'shelves_new_action' => 'Nowa półka',
    'shelves_popular_empty' => 'Najpopularniejsze półki pojawią się w tym miejscu.',
    'shelves_new_empty' => 'Tutaj pojawią się ostatnio utworzone półki.',
    'shelves_save' => 'Zapisz półkę',
    'shelves_books' => 'Książki na tej półce',
    'shelves_add_books' => 'Dodaj książkę do tej półki',
    'shelves_drag_books' => 'Przeciągnij książki tutaj aby dodać je do półki',
    'shelves_empty_contents' => 'Ta półka nie ma przypisanych żadnych książek',
    'shelves_edit_and_assign' => 'Edytuj półkę aby przypisać książki',
    'shelves_edit_named' => 'Edytuj półkę :name',
    'shelves_edit' => 'Edytuj półkę',
    'shelves_delete' => 'Usuń półkę',
    'shelves_delete_named' => 'Usuń półkę :name',
    'shelves_delete_explain' => "Ta operacja usunie półkę o nazwie ':name'. Książki z tej półki nie zostaną usunięte.",
    'shelves_delete_confirmation' => 'Czy jesteś pewien, że chcesz usunąć tę półkę?',
    'shelves_permissions' => 'Uprawnienia półki',
    'shelves_permissions_updated' => 'Uprawnienia półki zostały zaktualizowane',
    'shelves_permissions_active' => 'Uprawnienia półki są aktywne',
    'shelves_copy_permissions_to_books' => 'Skopiuj uprawnienia do książek',
    'shelves_copy_permissions' => 'Skopiuj uprawnienia',
    'shelves_copy_permissions_explain' => 'To spowoduje zastosowanie obecnych ustawień uprawnień dla tej półki do wszystkich książek w niej zawartych. Przed aktywacją upewnij się, że wszelkie zmiany w uprawnieniach do tej półki zostały zapisane.',
    'shelves_copy_permission_success' => 'Uprawnienia półki zostały skopiowane do :count książek',

    // Books
    'book' => 'Książka',
    'books' => 'Książki',
    'x_books' => ':count Książka|:count Książki',
    'books_empty' => 'Brak utworzonych książek',
    'books_popular' => 'Popularne książki',
    'books_recent' => 'Ostatnie książki',
    'books_new' => 'Nowe książki',
    'books_new_action' => 'Nowa księga',
    'books_popular_empty' => 'Najpopularniejsze książki pojawią się w tym miejscu.',
    'books_new_empty' => 'Tutaj pojawią się ostatnio utworzone książki.',
    'books_create' => 'Utwórz książkę',
    'books_delete' => 'Usuń książkę',
    'books_delete_named' => 'Usuń książkę :bookName',
    'books_delete_explain' => 'To spowoduje usunięcie książki \':bookName\', Wszystkie strony i rozdziały zostaną usunięte.',
    'books_delete_confirmation' => 'Czy na pewno chcesz usunąc tę książkę?',
    'books_edit' => 'Edytuj książkę',
    'books_edit_named' => 'Edytuj książkę :bookName',
    'books_form_book_name' => 'Nazwa książki',
    'books_save' => 'Zapisz książkę',
    'books_permissions' => 'Uprawnienia książki',
    'books_permissions_updated' => 'Zaktualizowano uprawnienia książki',
    'books_empty_contents' => 'Brak stron lub rozdziałów w tej książce.',
    'books_empty_create_page' => 'Utwórz nową stronę',
    'books_empty_sort_current_book' => 'posortuj bieżącą książkę',
    'books_empty_add_chapter' => 'Dodaj rozdział',
    'books_permissions_active' => 'Uprawnienia książki są aktywne',
    'books_search_this' => 'Wyszukaj w tej książce',
    'books_navigation' => 'Nawigacja po książce',
    'books_sort' => 'Sortuj zawartość książki',
    'books_sort_named' => 'Sortuj książkę :bookName',
    'books_sort_name' => 'Sortuj według nazwy',
    'books_sort_created' => 'Sortuj według daty utworzenia',
    'books_sort_updated' => 'Sortuj według daty modyfikacji',
    'books_sort_chapters_first' => 'Rozdziały na początku',
    'books_sort_chapters_last' => 'Rozdziały na końcu',
    'books_sort_show_other' => 'Pokaż inne książki',
    'books_sort_save' => 'Zapisz nową kolejność',

    // Chapters
    'chapter' => 'Rozdział',
    'chapters' => 'Rozdziały',
    'x_chapters' => ':count Rozdział|:count Rozdziały',
    'chapters_popular' => 'Popularne rozdziały',
    'chapters_new' => 'Nowy rozdział',
    'chapters_create' => 'Utwórz nowy rozdział',
    'chapters_delete' => 'Usuń rozdział',
    'chapters_delete_named' => 'Usuń rozdział :chapterName',
    'chapters_delete_explain' => 'To spowoduje usunięcie rozdziału \':chapterName\', Wszystkie strony zostaną usunięte
        i dodane bezpośrednio do książki.',
    'chapters_delete_confirm' => 'Czy na pewno chcesz usunąć ten rozdział?',
    'chapters_edit' => 'Edytuj rozdział',
    'chapters_edit_named' => 'Edytuj rozdział :chapterName',
    'chapters_save' => 'Zapisz rozdział',
    'chapters_move' => 'Przenieś rozdział',
    'chapters_move_named' => 'Przenieś rozdział :chapterName',
    'chapter_move_success' => 'Rozdział przeniesiony do :bookName',
    'chapters_permissions' => 'Uprawienia rozdziału',
    'chapters_empty' => 'Brak stron w tym rozdziale.',
    'chapters_permissions_active' => 'Uprawnienia rozdziału są aktywne',
    'chapters_permissions_success' => 'Zaktualizowano uprawnienia rozdziału',
    'chapters_search_this' => 'Przeszukaj ten rozdział',

    // Pages
    'page' => 'Strona',
    'pages' => 'Strony',
    'x_pages' => ':count stron',
    'pages_popular' => 'Popularne strony',
    'pages_new' => 'Nowa strona',
    'pages_attachments' => 'Załączniki',
    'pages_navigation' => 'Nawigacja po stronie',
    'pages_delete' => 'Usuń stronę',
    'pages_delete_named' => 'Usuń stronę :pageName',
    'pages_delete_draft_named' => 'Usuń wersje robocze dla strony :pageName',
    'pages_delete_draft' => 'Usuń wersje roboczą',
    'pages_delete_success' => 'Strona usunięta pomyślnie',
    'pages_delete_draft_success' => 'Werjsa robocza usunięta pomyślnie',
    'pages_delete_confirm' => 'Czy na pewno chcesz usunąć tę stronę?',
    'pages_delete_draft_confirm' => 'Czy na pewno chcesz usunąć wersje roboczą strony?',
    'pages_editing_named' => 'Edytowanie strony :pageName',
    'pages_edit_draft_options' => 'Ustawienia wersji roboczej',
    'pages_edit_save_draft' => 'Zapisano wersje roboczą o ',
    'pages_edit_draft' => 'Edytuj wersje roboczą',
    'pages_editing_draft' => 'Edytowanie wersji roboczej',
    'pages_editing_page' => 'Edytowanie strony',
    'pages_edit_draft_save_at' => 'Wersja robocza zapisana ',
    'pages_edit_delete_draft' => 'Usuń wersje roboczą',
    'pages_edit_discard_draft' => 'Porzuć wersje roboczą',
    'pages_edit_set_changelog' => 'Ustaw dziennik zmian',
    'pages_edit_enter_changelog_desc' => 'Opisz zmiany, które zostały wprowadzone',
    'pages_edit_enter_changelog' => 'Wyświetl dziennik zmian',
    'pages_save' => 'Zapisz stronę',
    'pages_title' => 'Tytuł strony',
    'pages_name' => 'Nazwa strony',
    'pages_md_editor' => 'Edytor',
    'pages_md_preview' => 'Podgląd',
    'pages_md_insert_image' => 'Wstaw obrazek',
    'pages_md_insert_link' => 'Wstaw łącze do obiektu',
    'pages_md_insert_drawing' => 'Wstaw rysunek',
    'pages_not_in_chapter' => 'Strona nie została umieszczona w rozdziale',
    'pages_move' => 'Przenieś stronę',
    'pages_move_success' => 'Strona przeniesiona do ":parentName"',
    'pages_copy' => 'Skopiuj stronę',
    'pages_copy_desination' => 'Skopiuj do',
    'pages_copy_success' => 'Strona została pomyślnie skopiowana',
    'pages_permissions' => 'Uprawnienia strony',
    'pages_permissions_success' => 'Zaktualizowano uprawnienia strony',
    'pages_revision' => 'Wersja',
    'pages_revisions' => 'Wersje strony',
    'pages_revisions_named' => 'Wersje strony :pageName',
    'pages_revision_named' => 'Wersja strony :pageName',
    'pages_revisions_created_by' => 'Utworzona przez',
    'pages_revisions_date' => 'Data wersji',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'Wersja #:id',
    'pages_revisions_numbered_changes' => 'Zmiany w wersji #:id',
    'pages_revisions_changelog' => 'Dziennik zmian',
    'pages_revisions_changes' => 'Zmiany',
    'pages_revisions_current' => 'Obecna wersja',
    'pages_revisions_preview' => 'Podgląd',
    'pages_revisions_restore' => 'Przywróć',
    'pages_revisions_none' => 'Ta strona nie posiada żadnych wersji',
    'pages_copy_link' => 'Kopiuj link',
    'pages_edit_content_link' => 'Edytuj zawartość',
    'pages_permissions_active' => 'Uprawnienia strony są aktywne',
    'pages_initial_revision' => 'Pierwsze wydanie',
    'pages_initial_name' => 'Nowa strona',
    'pages_editing_draft_notification' => 'Edytujesz obecnie wersje roboczą, która była ostatnio zapisana :timeDiff.',
    'pages_draft_edited_notification' => 'Od tego czasu ta strona była zmieniana. Zalecane jest odrzucenie tej wersji roboczej.',
    'pages_draft_edit_active' => [
        'start_a' => ':count użytkowników rozpoczęło edytowanie tej strony',
        'start_b' => ':userName edytuje stronę',
        'time_a' => 'od czasu ostatniej edycji',
        'time_b' => 'w ciągu ostatnich :minCount minut',
        'message' => ':start :time. Pamiętaj by nie nadpisywać czyichś zmian!',
    ],
    'pages_draft_discarded' => 'Wersja robocza odrzucona, edytor został uzupełniony najnowszą wersją strony',
    'pages_specific' => 'Określona strona',
    'pages_is_template' => 'Szablon strony',

    // Editor Sidebar
    'page_tags' => 'Tagi strony',
    'chapter_tags' => 'Tagi rozdziału',
    'book_tags' => 'Tagi książki',
    'shelf_tags' => 'Tagi półki',
    'tag' => 'Tag',
    'tags' =>  'Tagi',
    'tag_name' =>  'Nazwa tagu',
    'tag_value' => 'Wartość tagu (opcjonalnie)',
    'tags_explain' => "Dodaj tagi by skategoryzować zawartość. \n W celu dokładniejszej organizacji zawartości możesz dodać wartości do tagów.",
    'tags_add' => 'Dodaj kolejny tag',
    'tags_remove' => 'Usuń ten tag',
    'attachments' => 'Załączniki',
    'attachments_explain' => 'Prześlij kilka plików lub załącz linki. Będą one widoczne na pasku bocznym strony.',
    'attachments_explain_instant_save' => 'Zmiany są zapisywane natychmiastowo.',
    'attachments_items' => 'Załączniki',
    'attachments_upload' => 'Dodaj plik',
    'attachments_link' => 'Dodaj link',
    'attachments_set_link' => 'Ustaw link',
    'attachments_delete' => 'Jesteś pewien, że chcesz usunąć ten załącznik?',
    'attachments_dropzone' => 'Upuść pliki lub kliknij tutaj by przesłać pliki',
    'attachments_no_files' => 'Nie przesłano żadnych plików',
    'attachments_explain_link' => 'Możesz załączyć link jeśli nie chcesz przesyłać pliku. Może być to link do innej strony lub link do pliku w chmurze.',
    'attachments_link_name' => 'Nazwa linku',
    'attachment_link' => 'Link do załącznika',
    'attachments_link_url' => 'Link do pliku',
    'attachments_link_url_hint' => 'Strona lub plik',
    'attach' => 'Załącz',
    'attachments_edit_file' => 'Edytuj plik',
    'attachments_edit_file_name' => 'Nazwa pliku',
    'attachments_edit_drop_upload' => 'Upuść pliki lub kliknij tutaj by przesłać pliki i nadpisać istniejące',
    'attachments_order_updated' => 'Kolejność załączników zaktualizowana',
    'attachments_updated_success' => 'Szczegóły załączników zaktualizowane',
    'attachments_deleted' => 'Załącznik usunięty',
    'attachments_file_uploaded' => 'Plik załączony pomyślnie',
    'attachments_file_updated' => 'Plik zaktualizowany pomyślnie',
    'attachments_link_attached' => 'Link pomyślnie dodany do strony',
    'templates' => 'Szablony',
    'templates_set_as_template' => 'Strona jest szablonem',
    'templates_explain_set_as_template' => 'Możesz ustawić tę stronę jako szablon, tak aby jej zawartość była wykorzystywana przy tworzeniu innych stron. Inni użytkownicy będą mogli korzystać z tego szablonu, jeśli mają uprawnienia do przeglądania tej strony.',
    'templates_replace_content' => 'Zmień zawartość strony',
    'templates_append_content' => 'Dodaj do zawartośći strony na końcu',
    'templates_prepend_content' => 'Dodaj do zawartośći strony na początku',

    // Profile View
    'profile_user_for_x' => 'Użytkownik od :time',
    'profile_created_content' => 'Utworzona zawartość',
    'profile_not_created_pages' => ':userName nie utworzył żadnych stron',
    'profile_not_created_chapters' => ':userName nie utworzył żadnych rozdziałów',
    'profile_not_created_books' => ':userName nie utworzył żadnych książek',
    'profile_not_created_shelves' => ':userName nie utworzył żadnych półek',

    // Comments
    'comment' => 'Komentarz',
    'comments' => 'Komentarze',
    'comment_add' => 'Dodaj komentarz',
    'comment_placeholder' => 'Napisz swój komentarz tutaj',
    'comment_count' => '{0} Brak komentarzy |{1} 1 komentarz|[2,*] :count komentarzy',
    'comment_save' => 'Zapisz komentarz',
    'comment_saving' => 'Zapisywanie komentarza...',
    'comment_deleting' => 'Usuwanie komentarza...',
    'comment_new' => 'Nowy komentarz',
    'comment_created' => 'Skomentowano :createDiff',
    'comment_updated' => 'Zaktualizowano :updateDiff przez :username',
    'comment_deleted_success' => 'Komentarz usunięty',
    'comment_created_success' => 'Komentarz dodany',
    'comment_updated_success' => 'Komentarz zaktualizowany',
    'comment_delete_confirm' => 'Czy na pewno chcesz usunąc ten komentarz?',
    'comment_in_reply_to' => 'W odpowiedzi na :commentId',

    // Revision
    'revision_delete_confirm' => 'Czy na pewno chcesz usunąć tę wersję?',
    'revision_restore_confirm' => 'Czu ma pewno chcesz przywrócić tą wersję? Aktualna zawartość strony zostanie nadpisana.',
    'revision_delete_success' => 'Usunięto wersję',
    'revision_cannot_delete_latest' => 'Nie można usunąć najnowszej wersji.'
];