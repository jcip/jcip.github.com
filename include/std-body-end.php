<?php
    $isLocal = isset($_GET["local"]);

    $minified = $debug ? "" : ".min";
    $copyright = "Copyright 2009&ndash;2015 Seat Yourself<sup>&reg;</sup>";
?>

    <footer class="footer navbar">
      <div class="container">
        <nav id="footer">
          <ul class="nav navbar-nav">
            <li><a href="/who-we-are.php"><span class="glyphicon glyphicon-user"></span> About Us</a></li>
            <li><a href="/contact.php"><span class="glyphicon glyphicon-send"></span> Contact / FAQs</a></li>
            <li><a href="/privacy.php"><span class="glyphicon glyphicon-credit-card"></span> Privacy</a></li>
            <li><a href="/security.php"><span class="glyphicon glyphicon-lock"></span> Security</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><p class="navbar-text"><span class="glyphicon glyphicon-copyright-mark"></span> <?= $copyright ?></p></li>
          </ul>
        </nav><!-- #footer -->
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery<?= $minified ?>.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie<?= $minified ?>.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.1/accounting<?= $minified ?>.js"></script>
    <script src="/js/knockout-money.js"></script>
    <script src="/js/bootstrap<?= $minified ?>.js"></script>
<?php if (!$isLocal): ?>
    <script src="/js/cookie-test.js"></script>
<?php endif; ?>
    <script src="/js/nav-tab-hash.js"></script>
    <script src="/js/navbar-search.js"></script>
