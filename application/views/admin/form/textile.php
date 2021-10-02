<div class="container">
    <div class="container card o-hidden border-0 shadow-lg my-1 maincard">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-xs-7 col-sm-7">
                    <div class="">
                        <div class="text-center">
                            <div style="font-size: 17px;" class="text-info">Add a new textile item</div>
                        </div>
                        <form class="user p-0 pl-2 pt-2" name="new-textile" id="new-textile">
                            <div class="form-group">
                                <input type="text" style="font-size: 14px;" id="tname" name="tname" placeholder="Textile item Name">
                            </div>
                            <div class="form-group ">
                                <div class="d-flex mb-3 mb-sm-0">

                                    <input type="number" class="p-2 mr-1" style="width: 130px;font-size: 14px;" id="tprice" name="tprice" placeholder="Price">
                                    <input type="number" class="p-2" style="width: 130px;font-size: 14px;" id="tqty" name="tqty" placeholder="Quantity">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="more" style="font-size: 14px;">More Details:</label>
                                <textarea class="form-control" rows="5" id="tmore" name="tmore" style="font-size: 14px;"></textarea>
                            </div>
                            

                            <div class=" row">
                                <div class="col-sm-5" style="text-align: center;">
                                    <label for="BookImage">Upload Image</label>
                                </div>

                                <div class="input-group mb-3 form-control-user px-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="textile" name="textile" accept="image/*" onchange="loadFile(event)">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <input type="submit" id="addt" name="addt" class="btn btn-info btn-user btn-block" value="Add New">

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>