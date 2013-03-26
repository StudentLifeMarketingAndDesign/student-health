<!-- home page feature -->

<?php if( ($teaser) && ($is_front)):?>
<div style="background:url('<?php echo $node->field_image[0]['filepath'];?>');" class="panel panel-text panel <?php print $id; ?>">
<div class="feature-content">

<?php if( ($node->field_external_link[0]['value'])){?>
<h3><a href="<?php print $node->field_external_link[0]['view'] ?>"><?php print $title; ?></a></h3>
<?php }else{?>
<h3><a href="<?php print $node_url ?>"><?php print $title; ?></a></h3>
<?php }?>

<p><?php print trim_text( $node->content['body']['#value'], 13 ); ?></p>


<?php if( ($node->field_external_link[0]['value'])){?>
<a class="more" href="<?php print $node->field_external_link[0]['view'] ?>" title="read more">Read More</a>
<?php }else{?>
<a class="more" href="<?php print $node_url ?>" title="read more">Read More</a>
<?php }?>


</div><!--end feature content-->
</div>
<?php else:?>



<?php print $node->field_image[0]['view'] ?>

<?php print $node->content ['body']['#value']?>
<?php endif?>


