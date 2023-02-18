<div class="casino-review-container">
    <div>
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
        <div>
            <div>
                <img src="<?= $review['logo'] ?>" alt="Casino Logo">
                <p><a href="<?= site_url('/' . $review['brand_id']) ?>">Review</a></p>
            </div>
            <div>
                <div>
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <?= ($i < $review['info']['rating']) ? '<i class="fa fa-star"></i>' : '<i class="fa fa-star-o"></i>'; ?>
                    <?php endfor; ?>
                </div>
                <p><?= $review['info']['bonus'] ?></p>
            </div>
            <div>
                <ul class="fa-ul">
                    <?php foreach ($review['info']['features'] as $feature) : ?>
                        <li> <i class="fa-li fa fa-check-circle"></i><?= $feature ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div>
                <p><a href="<?= $review['play_url'] ?>">Play Now</a></p>
                <p><?= $review['terms_and_conditions'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>