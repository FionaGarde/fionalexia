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
 
$cakeDescription = 'CakePHP: the rapid development php framework';
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
</head>
<body>
        <nav class="top-nav">
            <div class="top-nav-title">
                <a href="<?= $this->Url->build('/') ?>">Tips</a>
            </div>
            <div class="top-nav-links">

                <?php if($this->request->getAttribute('identity') == null) : ?>

                    <a target="_blank" rel="noopener" ></a>

                    <?= $this->Html->link('Se connecter', ['controller' => 'Users', 'action' => 'login']); ?>

                    <?= $this->Html->link('Créer un compte', ['controller' => 'Users', 'action' => 'add']); ?>

                    <?php else : 
                        $pseudo = $this->request->getAttribute('identity')->pseudo; ?>
                                
                    <?= $this->Html->link('Staffs', ['controller' => 'Staffs', 'action' => 'index']); ?>

                    <?= $this->Html->link('Tips', ['controller' => 'Tips', 'action' => 'index']); ?> 
                  
                    <?= $this->Html->link('Se déconnecter', ['controller' => 'Users', 'action' => 'logout']); ?>

                <?php endif; ?>
            </div>             
        </nav>
        
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    
    <footer>
        <ul>© MDS - 2022-03</ul>
    </footer>
</body>
</html>
 