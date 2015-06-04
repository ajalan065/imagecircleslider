<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<?php
/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<div id="wrapper">
            <section class="block">
                <div id="circleslider3">
                    <div class="viewport">

  <?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>


  <ul class="overview">
  <?php foreach ($rows as $id => $row): 
	?>
    <li><?php print $row;?></li>
          <?php endforeach; 
    ?>
</ul>
</div>
 					<div class="dot"></div>
                    <div class="overlay"></div>
                    <div class="thumb"></div>
                    </section>
                    </div>
     </div>

