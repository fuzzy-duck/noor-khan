<?php
/*
 * Template Name: About
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="about">
    <header>
        <?php include ("nav.php"); ?>
    </header>
    <section class="upper">
        <h3>Noor Inayat-Khan</h3>
        <div class="border"></div>
        <h1><span>A</span> Woman <span>of</span><br />Conspicuous<br />Courage</h1>
    </section>
    <section class="logos">
        <div class="logo-1"></div>
        <div class="logo-2"></div>
        <div class="logo-3"></div>
    </section>
    <section class="lower">
        <p>This digital exhibition has been developed by the Commonwealth War Graves Foundation (CWGF) as part of the History Makers programme.</p>
        <p>The History Makers scheme funds museums to create new exhibitions that will inspire the public through the lives and achievements of extraordinary, historical figures. The scheme is managed by the Association of Independent Museums (AIM) and Biffa Award, a multi-million-pound fund that helps to build communities and transform lives through awarding grants to communities and environmental projects across the UK as part of the Landfill Communities Fund.</p> 
        <p>The exhibition tells the story of Noor Inayat-Khan, a Second World War secret agent and one of the most highly decorated women in British military history. In addition, the exhibition aims to help visitors better understand the memorial and discover more about the other 20,000 Airmen and Women who were lost during operations from bases in the United Kingdom and North and Western Europe, who have no known grave. CWGF has been working with young women and girls from the Girlguiding organisation to reinterpret the story of Noor, helping to make it relevant and engaging for a younger generation of visitors.</p>

    </section>
</main>

    <a href="<?php echo home_url(); ?>/intro" class="btn-back">
        <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
    </a>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>