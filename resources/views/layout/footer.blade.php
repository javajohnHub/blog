<div class="text-center" id="footer"><b id="copyright">Copyright
        <?php echo date("Y", time()); ?>
        , John Edwards</b>
    <?php echo ' <b id="load">Page loaded in '; ?>
    <?php
    $num =  microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
    $dec = 3;
    $expo = pow(10,$dec);
    $num = intval($num*$expo)/$expo;
    echo $num;
    ?>
    <?php echo ' seconds!</b>'; ?>
    </div>
<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>