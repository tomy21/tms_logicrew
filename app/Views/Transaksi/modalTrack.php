<div class="modal fade" id="modalList" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <section>
                    <button type="button" class="btn-close float-md-right" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="container">
                        <h2 class="font-weight-bold text-center d-none d-sm-flex">
                            Tracking Parcel
                        </h2>
                        <?php foreach ($listData as $z) : ?>
                            <div class="row">
                                <div class="col-auto text-center flex-column d-none d-sm-flex">
                                    <div class="row h-50">
                                        <div class="col border-end">&nbsp;</div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                    <div class="m-2">
                                        <span class="badge rounded-circle bg-info border">&nbsp;</span>
                                    </div>
                                    <div class="row h-50">
                                        <div class="col border-end">&nbsp;</div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <div class="col py-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="float-end font-weight-bold">
                                                <?= isset($z->date) ? $z->date : $z->date_time; ?>
                                            </div>
                                            <h4 class="card-title text-muted  font-weight-bold"><?= isset($z->receiver) ? $z->status." ". $z->receiver : (isset($z->status) ? $z->status: "-") ?></h4>
                                            <p class="card-text text-muted"><?= isset($z->city) ? $z->city : (isset($z->receiver_name) ? $z->receiver_name : (isset($z->desc) ? $z->desc :"-")) ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </section>
            </div>
        </div>
    </div>
</div>