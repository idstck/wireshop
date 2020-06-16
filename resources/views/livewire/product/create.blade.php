<div class="row justify-content-center mb-2">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">

                    <div class="form-group">

                        <div class="form-row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Title">
                            </div>

                            <div class="col">
                                <input type="text" class="form-control" placeholder="Price">
                            </div>
                        </div>

                    </div>

                    <div class="form-group">

                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Description">
                            </div>
                        </div>

                    </div>

                    <div class="form-group">

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control-file" id="image">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="btn-group" role="group" aria-label="Button Form">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        <button wire:click="$emit('formClose')" type="button" class="btn btn-sm btn-secondary">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
