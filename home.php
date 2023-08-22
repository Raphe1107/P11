<?php get_header() ?>

<section class="hero">
    <h1 >PHOTOGRAPHE EVENT</h1>
</section>

<section class="filters">
    <div class="cate_format">
        <div class="category">
            <form action="" method="get">
                
                <select name="category" id="category-select">
                    <option value="all" hidden>CATÉGORIES</option>
                    <option value="">Toutes les catégories</option>
                    <?php
                    $categories = get_terms(array(
                        'taxonomy' => 'categorie', 
                        'hide_empty' => false,
                    ));

                    foreach ($categories as $category) {
                        echo '<option value="' . $category->slug . '">' . $category->name . '</option>';
                    }
                    ?>
                </select>
            </form>
        </div>
        <form action="" method="get">
            <select name="format" id="format-select">
                <option value="all" hidden>FORMATS</option>
                <option value="">Tous les formats</option>
                <?php
                $formats = get_terms(array(
                    'taxonomy' => 'format', 
                    'hide_empty' => false,
                ));

                foreach ($formats as $format) {
                    echo '<option value="' . $format->slug . '">' . $format->name . '</option>';
                }
                ?>
            </select>
        </form>
    </div>

    <form class="js-filter-form" method="get">	
		<select id="date-select">
            <option value="all" hidden>TRIER PAR</option>
			<option value="DESC">Nouveautés</option>
			<option value="ASC">Les plus anciennes</option>
		</select>
    </form>
	
    
</section>

















<?php get_footer() ?>
