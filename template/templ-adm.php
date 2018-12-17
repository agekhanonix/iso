
<?php 
    /*= ----------------------------------------------------------------- ===
    === LOADING OF THE “HEADER”                                           ===
    === ----------------------------------------------------------------- =*/ 
    include 'view/backend/header.html';
    /*= ----------------------------------------------------------------- ===
    === LOADING SIDEBAR                                                   ===
    === ----------------------------------------------------------------- =*/
    include 'view/backend/sidebar.html';
?>
                    <!-- Your sidebar here -->
                    </ul>
                </div>
            </div>
            <div class="main-panel">
<?php
    /*= ----------------------------------------------------------------- ===
    === LOADING OF THE BAR OF NAVIGATION                                  ===
    === ----------------------------------------------------------------- =*/
?> 
    <header>
<?php
    include 'view/backend/nav.html';
?>
    </header>
    <!-- End navbar-->
    <div class="content">
        <div class="container-fluid">
            <?= $content ?>
        </div>
    </div>
<?php
    /*= ----------------------------------------------------------------- ===
    === LOADING OF THE "FOOTER"                                           ===
    === ----------------------------------------------------------------- =*/ 
    include 'view/backend/footer.php';