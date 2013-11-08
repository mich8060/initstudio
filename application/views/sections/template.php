<?php $this->load->view('sections/head'); ?>
<?php $this->load->view('sections/header'); ?>
<article>
	<?php $this->load->view($template); ?>
	<?php $this->load->view('sections/footer'); ?>
</article>
<!-- Begin Google Analytics -->
<script type="text/javascript">
	document.addEventListener("touchstart", function(){}, true);
  	var _gaq = _gaq || [];
  	_gaq.push(['_setAccount', 'UA-11309241-1']);
  	_gaq.push(['_trackPageview']);

  	(function() {
    	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  	})();
</script>
<!-- Begin Google Analytics -->
