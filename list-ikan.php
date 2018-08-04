<?php 

$fishes = query("SELECT * FROM komoditas");

?>

<div class="modal fade" id="list-ikan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Daftar List Komoditi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <table class="table">
              <tr>
                <th>Nama Ikan</th>
                <th>Harga Ikan</th>
              </tr>
              <?php foreach ($fishes as $fish): ?>
              <tr>
                <td><?= $fish['nama']; ?></td>
                <td><?= $fish['harga']; ?></td>
              </tr>
              <?php endforeach; ?>
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>