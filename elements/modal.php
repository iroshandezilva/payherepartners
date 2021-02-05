
<!-- Modal -->
<div class="modal fade registration-modal" aria-labelledby="staticBackdropLabel" id="registration-modal" tabindex="-1" role="dialog"  data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="row">
                <div class="col-4 pr-0 modal-navigation">
                    <div class="form-header">
                        <h5>Partner Registration</h5>
                        <p>Complete & submit the form to enroll in PayHere Partners Program </p>
                    </div>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-home" aria-selected="true">Personal Details <i class="fas fa-check"></i></a>
                        <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Bank Account </a>
                        <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Recommendation</a>
                        <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Verification</a>
                    </div>
                </div>
                <div class="col-8 pl-0">
                    <div class="form-right-content">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <?php include "elements/form/personal -details.php" ?>
                            </div>
                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab"> <?php include "elements/form/bank-details.php" ?></div>
                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab"> <?php include "elements/form/recommendation.php" ?></div>
                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab"> <?php include "elements/form/verification.php" ?></div>
                        </div>
                        <div class="modal-foot text-right">
                            <a href="#" class="btn-ph">
                                Next
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>