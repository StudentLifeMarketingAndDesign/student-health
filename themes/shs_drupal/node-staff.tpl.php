<!-- news page -->
<?php if( ($teaser)):?>
<a href="<?php print $node_url ?>" title="read more"><?php print $node->field_headshot[0]['view'] ?></a>
<h2><a href="<?php print $node_url ?>"><?php print $title; ?></a></h2>
<p class="date"><?php print $title?></p>
<p><?php print substr($node->content['body']['#value'], 0, 150);?></p>
<span class="more"><a href="<?php print $node_url ?>" title="read more">Read More</a></span>



<?php else:?>
<p class="date"><?php print $node->field_title[0]['view'] ?></p>
<p class="date"><a href="mailto:<?php print $node->field_email[0]['view'] ?>"><?php print $node->field_email[0]['view'] ?></a></p>
<?php print $node->field_headshot[0]['view'] ?>
<?php print $node->content['body']['#value']; ?>

<?php endif?>


