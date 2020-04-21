<!-- Modal -->
<div class="modal fade" id="clueModal" tabindex="-1" role="dialog" aria-labelledby="clueModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="clueModalLabel">Pistas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        $path = "chapters/" . $chapter . "/clue.php";

        if( file_exists( $path ) ) {
        	require_once( $path );
        }
        ?>
      </div>
      <div class="modal-footer">
        <span class="text-muted">Recuerda usar las pistas sólo cuando estés realmente atascado.</span>
      </div>
    </div>
  </div>
</div>
