<div class="clearfix"></div>
<footer>
    created by <?php echo author; ?>
</footer>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/js.js"></script>
<?php
    if (isset($this->js)) {
        foreach ($this->js as $js) {
            echo '<script type="text/javascript" src="views/'.$js.'"></script>';
        }
    }
?>
</body>
</html>