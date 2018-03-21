<!-- ******************  MODALS ***************************** -->
@include('logs.modals.logbook-add-modal')
@include('logs.modals.logbook-delete-modal')
@include('logs.modals.logbook-save-modal')

<div class="panel panel-default">
    <div class="panel-body">


        <div class="row">
            <div class="col-sm-12" id="custom-template">

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="title" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="act">Date:</label>
                            <input type="text" class="form-control" id="datePicker" maxlength="10">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="radio-inline" style="font-weight: bold; pointer-events: none;">Trip Debrief:
                                <input type="radio" name="" style="visibility: hidden;"></label>
                            <form>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">Option 1
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">Option 2
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">Option 3
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="radio-inline" style="font-weight: bold; pointer-events: none;">Water Levels:
                                <input type="radio" name="" style="visibility: hidden;"></label>
                            <form>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">1
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">2
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">3
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">4
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">5
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">6
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">7
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">8
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">9
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">10
                                </label>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

