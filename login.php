<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 ofset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
          <div ckass="container">
            <h3>Admin Login</h3>
            <hr>
            <?php if (session()-get('success')): ?>
                <div class="alert alert-success" role="alert">
                <?= session()->get('success') ?>
                </div>
            <?php endif: ?> 
            </div>
          </div>
        </div>
    </div>
</div>