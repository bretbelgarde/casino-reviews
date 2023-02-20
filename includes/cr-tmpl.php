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
                <div class="crmhead">
                    <p>Casino</p>
                </div>
                <a href="<?php _e(site_url('/' . $review['brand_id'])) ?>">
                    <img src="<?php _e($review['logo']) ?>" alt="Casino Logo" class="crimg">
                </a>
                <p><a href="<?php _e(site_url('/' . $review['brand_id'])) ?>">Review</a></p>
            </div>
            <div class="crcell">
                <div class="crmhead">
                    <p>Bonus</p>
                </div>
                <div class="crstars">
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <?php _e(($i < $review['info']['rating']) ? '<i class="fa fa-star"></i>' : '<i class="fa fa-star-o"></i>'); ?>
                    <?php endfor; ?>
                </div>
                <p><?php _e($review['info']['bonus']); ?></p>
            </div>
            <div class="crcell">
                <div class="crmhead">
                    <p>Features</p>
                </div>
                <ul class="fa-ul crul">
                    <?php foreach ($review['info']['features'] as $feature) : ?>
                        <li> <i class="fa-li fa fa-check-circle"></i><?php _e($feature) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="crcell">
                <div class="crmhead">
                    <p>Play</p>
                </div>
                <p>
                    <a href="<?php _e($review['play_url']) ?>" class="crbtn">Play Now</a>
                </p>
                <p><small><?php _e($review['terms_and_conditions']) ?></small></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>