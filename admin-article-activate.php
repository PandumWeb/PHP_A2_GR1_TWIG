<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header-admin.php';


if (!empty($_GET['id']) && !empty($_GET['activate'])) {
    $id = (int)$_GET['id'];
    $type = 1 === (int)$_GET['activate'] ? 1 : 0;

    enableArticle($link, $id, $type);
}

header('Location: admin-article-list.html.twig');

require __DIR__.'/_footer.php';
