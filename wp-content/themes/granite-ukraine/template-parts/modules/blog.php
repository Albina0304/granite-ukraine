<?php 
$categories = get_terms( 
    array(
        'taxonomy'   => 'category',
        'hide_empty' => true
    ) 
);
$serchParam = isset($_GET) && isset($_GET['s']) ? esc_html($_GET['s']) : '';
$catParam = isset($_GET) && isset($_GET['cat']) ? esc_html($_GET['cat']) : '';
$tagParam = isset($_GET) && isset($_GET['tag']) ? esc_html($_GET['tag']) : '';
$tagsItem = get_terms( 
    array(
        'taxonomy'   => 'post_tag',
        'hide_empty' => true,
    ) 
);
$page_for_posts = get_option( 'page_for_posts' );?>
<form action="<?php the_permalink($page_for_posts);?>">
    <div class="filter">
        <div class="filter-search">
            <input class="input-search" type="text" name="s" value="<?php echo $serchParam;?>">
            <div class="filter-btn">
                <button class="btn btn-secondary">
                    Пошук
                </button>
            </div>
        </div>
        <div class="filter-options">
            <div class="filter-option">
                <select class="filter-selection" name="cat" id="">
                    <option value="all" name=""> Всі категорії </option>
                    <?php foreach($categories as $category) {?>
                        <option class="selection-option" value="<?php echo $category->slug;?>"
                            <?php if($catParam === $category->slug) {
                                echo 'selected';
                            };?>
                            ><?php echo $category->name;?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="filter-option">
                <select class="filter-selection" name="tag" id="">
                    <option value="all"> Всі позначки </option>
                    <?php foreach($tagsItem as $tag) {?>
                        <option class="selection-option" value="<?php echo $tag->slug;?>"
                            <?php if($tagParam === $tag->slug) {
                                echo 'selected';
                            };?>
                            ><?php echo $tag->name;?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
</form>