<!-- Svävande knapp som länkar till kontaka oss formuläret -->
<a href="<?php echo get_permalink(get_page_by_path('about')); ?>">
    <div id="contact-button">Kontakta</div>
</a>
</main>
</div>


<!--Footer med länkar-->
<footer class="footer">
    <div><a href="<?php echo get_permalink(get_page_by_path('about')); ?>">Kontakta oss</a></div>
</footer>
<?php
wp_footer();
?>
</div>
</body>

</html>