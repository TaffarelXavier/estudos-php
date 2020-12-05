<?php

  session_start();

  if(isset($_SESSION['mensagem'])): ?>
    
  <script type="text/javascript">
    window.onload = () => {
      M.toast({ html: '<?php echo $_SESSION['mensagem']; ?>' });
    };
  </script>

  <?php

  endif;
  session_unset();

?>