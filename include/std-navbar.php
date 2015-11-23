<?php
    $isLocal = isset($_GET["local"]);
    $prefix = $isLocal ? "" : "/";
    $dashboardUrl = "https://tix.seatyourself.biz/legacy/accounts/null";
    $dashboardTarget = "sy-dashboard";
?>

    <header class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
              aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/" target="sy-admin"
             data-toggle="tooltip" data-placement="bottom" title="Top">
            <img src="<?= $prefix ?>img/sy-logo-brand-thin.png" class="img-responsive" alt="Seat Yourself On-line Ticketing">
          </a>
        </div>
        <nav id="navbar" class="navbar-collapse collapse">
          <!-- <ul class="nav navbar-nav"><li><p class="navbar-text navbar-title"><?= $title ?></p></li></ul> -->
          <form id="navbar-search-form" class="navbar-form navbar-right" role="search">
            <div class="input-group">
                <div class="form-group">
                  <input id="navbar-search-text" type="text" class="form-control input-sm" placeholder="Search help docs"
                      data-bind="textInput: searchText">
                </div>
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-sm btn-default"
                        data-bind="disable: noSearchText"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= $dashboardUrl ?>"
                   class="navbar-link"
                   target="<?= $dashboardTarget ?>"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
            <li><a href="/how-to.php"
                   class="navbar-link"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
          </ul>
        </nav><!--/.navbar-collapse -->
      </div>
    </header>
