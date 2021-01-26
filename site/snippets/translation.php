<!-- Check for Language and display Modal only on certain languages -->
<?php $language = $kirby->language();

if ( $language == 'it' OR $language == 'es' ) {?>

<!-- The Modal -->
<section id="modal--translation" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>

        <?php echo $site->translation_info(); ?>
        <img class="translation--img" src="<?= $site->url('index') ?>/dist/img/<?php echo t('Flag') ?>.webp" alt="Country Flag showing the language the site is currently viewed in">
    </div>

</section>
<?php } ?>