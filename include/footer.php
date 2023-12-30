
<footer class="main-footer">

  <div class="float-right d-none d-sm-inline">
  <?php $version = "3.2.0";
    echo "<b>Version</b> $version";
  ?>
  </div> 
  <?php 
    // Get the current year
    $currentYear =date("Y");
    // Copyright notice
    $copyrightNotice = "<strong>Copyright &copy; 2022- $currentYear";
    // Output the copyright notice
    echo $copyrightNotice;
  ?> 
  <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    <!-- <div class="float-right d-none d-sm-inline-block">
       
    </div> -->
</footer>

