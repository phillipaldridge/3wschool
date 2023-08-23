<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = '3wschool';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <style>select {
    padding-right: 3rem;
    height: fit-content;
}</style>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>PHP</a>
        </div>
        <div class="top-nav-links">
            <a href="http://localhost/w3school/w3defaults">Defaults</a>

            <a href="http://localhost/w3school/w3courses">Courses</a>
            <a href="http://localhost/w3school/w3course-types">Course Types</a>
            <a href="http://localhost/w3school/w3classes">Classes</a>
            <a href="http://localhost/w3school/w3class-types">Class Types</a>
            <a href="http://localhost/w3school/w3lessons">Lessons</a>
            <a href="http://localhost/w3school/w3lesson-types">Lesson Types</a><br>
            <a href="http://localhost/w3school/w3chapters">Chapters</a>
            <a href="http://localhost/w3school/w3chapter-types">Chapter Types</a>
            <a href="http://localhost/w3school/w3chapter-paths">Chapter paths</a>
            <a href="http://localhost/w3school/w3chapter-rules">Chapter rules</a>
            <a href="http://localhost/w3school/w3chapter-actions">Chapter actions</a>
            <br>
            <a href="http://localhost/w3school/w3programs">Programs</a>
            <a href="http://localhost/w3school/w3program-types">Program Types</a>
            <a href="http://localhost/w3school/w3programruns">Program Runs</a>
            <a href="http://localhost/w3school/w3programrun-types">Program Run Types</a>
            <br>
            <a href="http://localhost/w3school/w3users">Users</a>
            <a href="http://localhost/w3school/w3user-profiles">User profiles</a>
            <a href="http://localhost/w3school/w3user-addresses">User addreses</a>
            <a href="http://localhost/w3school/w3user-trackings">User trackings</a>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
