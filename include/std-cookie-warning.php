<?php
    $isLocal = isset($_GET["local"]);
    if (!$isLocal) {
?>

    <div id="cookie-alert" class="alert alert-danger alert-dismissable fade in hidden" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong>Warning!</strong>
      Cookies have been disabled in your browser for this site,
      so you probably won't be able to use it successfully.
      Make sure you have enabled cookies for this site before
      trying again.
    </div>
<?php
    }
?>