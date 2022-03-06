<?php
$this->Breadcrumbs->add([
    [
        'title' => 'Home',
        'url' => ['controller' => 'Blogs', 'action' => 'home'],
        'options' => ['class' => 'breadcrumb-item']
    ],
    [
        'title' => 'View-' . $articles->title,
        'url' => ['controller' => 'Blogs', 'action' => 'view', $articles->id],
        'options' => [
            'class' => 'breadcrumb-item active',
            'innerAttrs' => [
                'class' => 'test-list-class',
                'id' => 'the-products-crumb'
            ]
        ]
    ]
]);
?>

<h2><?= $articles->title ?></h2>
<h2><?= $articles->details ?></h2>