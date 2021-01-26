<section>

    <!-- The Modal -->
    <div id="modal--gdpr" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>

        <?php echo $site->cookies()->kirbytext(); ?>
        <a href="<?= $site->url() ?>/gdpr"><?php echo t('More Information') ?></a>
    </div>

    </div>
</section>