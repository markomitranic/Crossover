<?php

    $pageId = get_the_ID();
    $type = 'article';
    $url = get_permalink();
    $title = format_page_title(get_the_title());
    $description = (null !== get_field('og_description')) ? get_field('og_description') : get_field('hero_subtitle');
    $image = get_field('og_hero_image')['sizes']['hero'];

    if (is_front_page()) {
        $type = 'website';
    } else if (is_single()) {
        if (null !== get_field('og_description')) {
	        $description = get_field('og_description');
        } else {
	        $description = excerpt(get_post($pageId)->post_content, 256);
        }

    }

    if (null === $image) {
	    $image = get_template_directory_uri().'/assets/crossover-home-og-image.png';
    }

?>

<!-- Google Meta Description -->
<meta name="description" content="<?=$description?>" />

<!-- Facebook OpenGraph -->
<meta property="og:url" content="<?=$url?>" />
<meta property="og:type" content="<?=$type?>" />
<meta property="og:title" content="<?=$title?>" />
<meta property="og:locale" content="sr-RS" />
<?=(null !== $description) ? '<meta property="og:description" content="'.$description.'" />' : '';?>
<?=(null !== $image) ? '<meta property="og:image" content="'.$image.'" />' : '';?>


<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@BFPE_BFPI">
<meta name="twitter:creator" content="@BFPE_BFPI">
<meta name="twitter:title" content="<?=$title?>">
<meta name="twitter:image:alt" content="<?=$title?>">
<?=(null !== $description) ? '<meta name="twitter:description" content="'.$description.'">' : '';?>
<?=(null !== $description) ? '<meta name="twitter:image" content="'.$image.'">' : '';?>
