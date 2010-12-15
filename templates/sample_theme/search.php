<?php
	get_header();
?>

<?php
	if ( !$result ):
?>
	无搜索结果!
<?php
	else:
?>
	有搜索结果!
<?php
	endif;
?>



<?php
	get_footer();
?>

<!--
<style type="text/css">
@import url(http://www.google.com/cse/api/branding.css);
</style>
<div class="cse-branding-bottom" style="background-color:#FFFFFF;color:#000000">
  <div class="cse-branding-form">
    <form action="<?=site_url('search');?>" id="cse-search-box">
      <div>
        <input type="hidden" name="cx" value="partner-pub-9928587148743461:1128897508" />
        <input type="hidden" name="cof" value="FORID:9" />
        <input type="hidden" name="ie" value="UTF-8" />
        <input type="text" name="q" size="55" />
        <input type="submit" name="sa" value="&#x641c;&#x7d22;" />
      </div>
    </form>
  </div>
</div>
 



<div id="cse-search-results"></div>
<script type="text/javascript">
  var googleSearchIframeName = "cse-search-results";
  var googleSearchFormName = "cse-search-box";
  var googleSearchFrameWidth = 800;
  var googleSearchDomain = "www.google.com.hk";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>

-->

