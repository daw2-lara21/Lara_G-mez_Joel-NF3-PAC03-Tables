<?php
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db( $db, 'moviesite') or die(mysqli_error($db));

$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 
    (4, "2008-09-05", "El fary", "Pasados 20 minutos, sin saber cómo y el por qué, con el aroma del humo también me coloqué. La próxima poner más seguridad", 5),
    (4, "2008-09-23", "El asies", "asies", 2),
    (4, "2008-09-28", "Laura Aspas", "El otro día entré en el meet de Jordi Qbits, la película está bien", 3),
    (5, "2008-09-23", "Fernando Simón", "Buena película, pero no había distanciamiento social", 1),
    (5, "2008-09-23", "Joel Lara Gómez", "No me gusta, al igual que PHP", 2),
    (5, "2008-09-23", "El yoni", "Quieresh sentirla en el pesho?", 1),
    (6, "2008-09-23", "Pedro Gómez", "Las películas del Juan son mejores, que las pone en clase.", 5),
    (6, "2008-09-23", "Los Chunguitos", "Dame veneno que quiero morir, dame veneno que antes prefiero la muerte que ver esta película, dame veneno ay para morir", 1),
    (6, "2008-09-23", "El asinoes.", "asinoes.", 3)
    
ENDSQL;
mysqli_query($db, $query) or die(mysqli_error($db));

echo 'Movie database successfully updated!';


?>