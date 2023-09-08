<?php $socials = get_field('socials', 'options');?>
<ul class="social">
    <?php if(isset($socials)):
        foreach($socials as $social) { ?>
            <li>
                <a href="<?php echo $social['link'];?>" target="blank">
                    <?php echo getImage($social['icon'], 'social-img');?>
                    <span class="title">
                        <?php echo ($social['title']) ;?>
                    </span>
                </a>
            </li>
        <?php } ;?>
    <?php endif ;?>
</ul>