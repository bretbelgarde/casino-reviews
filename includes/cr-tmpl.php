<div class="casino-review-container">
    <div class="crrow crhead">
        <div>
            <p>Casino</p>
        </div>
        <div>
            <p>Bonus</p>
        </div>
        <div>
            <p>Features</p>
        </div>
        <div>
            <p>Play</p>
        </div>
    </div>
    <?php foreach ($reviews as $review) :   ?>
        <div class="crrow">
            <div class="crcell">
                <a href="<?= site_url('/' . $review['brand_id']) ?>">
                    <img src="<?= $review['logo'] ?>" alt="Casino Logo" class="crimg">
                </a>
                <p><a href="<?= site_url('/' . $review['brand_id']) ?>">Review</a></p>
            </div>
            <div class="crcell">
                <div class="crstars">
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <?= ($i < $review['info']['rating']) ? '<i class="fa fa-star"></i>' : '<i class="fa fa-star-o"></i>'; ?>
                    <?php endfor; ?>
                </div>
                <p><?= $review['info']['bonus'] ?></p>
            </div>
            <div class="crcell">
                <ul class="fa-ul crul">
                    <?php foreach ($review['info']['features'] as $feature) : ?>
                        <li> <i class="fa-li fa fa-check-circle"></i><?= $feature ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="crcell">
                <p>
                    <a href="<?= $review['play_url'] ?>" class="crbtn">Play Now</a>
                </p>
                <p><small><?= $review['terms_and_conditions'] ?></small></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>