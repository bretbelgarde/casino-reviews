<div class="casino-review-container">
    <div class="crrow crhead">
        <div class="crtac">
            <p>Casino</p>
        </div>
        <div class="crtac">
            <p>Bonus</p>
        </div>
        <div class="crtac">
            <p>Features</p>
        </div>
        <div class="crtac">
            <p>Play</p>
        </div>
    </div>
    <?php foreach ($reviews as $review) :   ?>
        <div class="crrow">
            <div class="crcell">
                <img src="<?= $review['logo'] ?>" alt="Casino Logo">
                <p class="crtac"><a href="<?= site_url('/' . $review['brand_id']) ?>">Review</a></p>
            </div>
            <div class="crcell">
                <div class="crstars">
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <?= ($i < $review['info']['rating']) ? '<i class="fa fa-star"></i>' : '<i class="fa fa-star-o"></i>'; ?>
                    <?php endfor; ?>
                </div>
                <p class="crtac"><?= $review['info']['bonus'] ?></p>
            </div>
            <div class="crcell">
                <ul class="fa-ul">
                    <?php foreach ($review['info']['features'] as $feature) : ?>
                        <li> <i class="fa-li fa fa-check-circle"></i><?= $feature ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="crcell">
                <p class="crtac">
                    <a href="<?= $review['play_url'] ?>" class="crbtn">Play Now</a>
                </p>
                <p class="crtac"><small><?= $review['terms_and_conditions'] ?></small></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>