</main>

<?php
    $footer_message = get_post_meta($post->ID, 'footer_message');
    $button_message = get_post_meta($post->ID, 'button_message');

    if($post->post_name != 'contact') {
?>

<article class="closing-statement">
    <section class="centerpiece">
        <h2><?php if($footer_message) { echo($footer_message[0]); } else { echo('Ready to build your experience?'); }?></h2>
        <a href="/rausch/contact"><button><?php if($button_message) { echo($button_message[0]); } else { echo("Let's Do It"); } ?></button></a>
    </section>
</article>
<?php
    }
?>

<footer>
  <section class="centerpiece">
    <div>
        <em href="tel:3192949410">(319) 294-9410</em>
        <em>2037 North Towne Lane NE
        <br/> Cedar Rapids, Iowa 52402</em>
    </div>
    <div>
        <a class="fa fa-facebook fa-3x" href="http://www.facebook.com/RauschProductions" target="_blank"></a>
        <a class="fa fa-twitter fa-3x" href="https://twitter.com/RauschPros" target="_blank"></a>
        <a class="fa fa-instagram fa-3x" href="https://instagram.com/rauschpros/" target="_blank"></a>
        <a class="fa fa-vimeo-square fa-3x" href="http://vimeopro.com/rauschproductions/showcase" target="_blank"></a>
    </div>
    <h1 class="copyright">&copy; 2015 Rausch Productions, Inc. All Rights Reserved.</h1>
  </section>
</footer>

<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- JavaScript Includes -->
<?php wp_footer(); ?>
<script>
    objectFit.polyfill({
        selector: 'img', // this can be any CSS selector
        fittype: 'cover', // either contain, cover, fill or none
        disableCrossDomain: 'true' // either 'true' or 'false' to not parse external CSS files.
    });
</script>
</body>
</html>