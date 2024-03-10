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

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'custom']) ?>

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
            <a href="http://localhost/3wschool/systemdefaults">System defaults</a>
            <a href="http://localhost/3wschool/programs">Programs</a>
            <a href="http://localhost/3wschool/program-types">Program Types</a>
            <a href="http://localhost/3wschool/programruns">Program Runs</a>
            <a href="http://localhost/3wschool/programrun-types">Program Run Types</a>
            <br>
            
            <a href="http://localhost/3wschool/courses">Courses</a>
            <a href="http://localhost/3wschool/course-types">Course Types</a>
            <a href="http://localhost/3wschool/classrooms">Classrooms</a>
            <a href="http://localhost/3wschool/classroom-types">Classroom Types</a>
            <a href="http://localhost/3wschool/lessons">Lessons</a>
            <a href="http://localhost/3wschool/lesson-types">Lesson Types</a>
            <br>
            <a href="http://localhost/3wschool/chapters">Chapters</a>
            <a href="http://localhost/3wschool/chapter-types">Chapter Types</a>
            <a href="http://localhost/3wschool/chapter-paths">Chapter paths</a>
            <a href="http://localhost/3wschool/chapter-rules">Chapter rules</a>
            <a href="http://localhost/3wschool/chapter-actions">Chapter actions</a>
            <a href="http://localhost/3wschool/chapter-accesses">Chapter accesses</a>
            <br>

            <a href="http://localhost/3wschool/users">Users</a>
            <a href="http://localhost/3wschool/user-profiles">User profiles</a>
            <a href="http://localhost/3wschool/user-addresses">User addreses</a>
            <a href="http://localhost/3wschool/user-trackings">User trackings</a>
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?= $this->fetch('jquery'); ?>
</html>