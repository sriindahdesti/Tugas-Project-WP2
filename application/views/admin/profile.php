<div class="container pb-4">
  <div class="profil mb-5">
    <div class="row d-flex justify-content-arround">
      <div class="col-md-4 m-auto text-center p-2" data-aos="fade-right" data-aos-once="true">
        <img src="<?= base_url('assets/images/profile/' . $user['image']); ?>" class="img-fluid img-prof m-auto img-bulet">
      </div>
      <div class="col-md-4 m-auto  p-2">
        <h2 class="card-title name-zen" data-aos="fade-left" data-aos-once="true"><?= $user['name']; ?></h2>
        <p class="card-text " data-aos="fade-right"><?= $user['email']; ?></p>
        <p class="card-text " data-aos="fade-left"><?= $user['alamat']; ?></p>

        </p>

        <p class="card-text" data-aos="fade-up" data-aos-delay="850"><small class="text-muted">member since <?= date('d F Y', $user['date_created']); ?></small></p>
      </div>
    </div>
  </div>

</div>
</div>















<!-- Modal -->
<div class="modal fade" id="topUp" tabindex="-1" aria-labelledby="topUp" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Input Nominal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('user/topup'); ?>" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="id" name="id" value="<?= $user['id']; ?>" hidden>
            <input type="text" class="form-control" id="request" name="request" value="0" hidden>
            <input type="text" class="form-control" id="money" name="money" placeholder="Rp. xxxxxxxx">

            <div class="radio-toolbar mt-4">
              <p class="col-md-8 col-form-label text-zen">Pembayaran :</p>
              <div class="container">
                <input type="radio" id="zp" name="metode" value="Zen Pay" checked />
                <label for="zp">Toko Kelontong Terdekat <span class="text-danger">TK<?= $user['id'] . $user['date_created']; ?> </span><small class="badge badge-danger"></small></label>
                <br>
                <input type="radio" id="cash" name="metode" value="cash">
                <label for="cash">Cash</label>
              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-zen">Add</button>
      </form>
    </div>
  </div>
</div>

</div>