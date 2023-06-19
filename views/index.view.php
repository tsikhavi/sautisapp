<?php

require_once 'partials/head.php';

$heading = 'HOME';

require_once 'partials/nav.php';

#require_once 'partials/header.php';


require_once 'partials/sidebar.php';
?>

<div class="container mx-4 mb-0 md:w-4/5 w-11/12 bg-white dark:bg-slate-950">
    <div class="w-full h-full rounded ">
        <main>
            
        <?php 
        require_once 'partials/banner.php';
        require_once 'views/features.php';
        require_once 'views/subscribe.php';
        ?>
            
        </main>

    </div>
</div>
</div>

<?php

require_once 'partials/footer.php';
?>