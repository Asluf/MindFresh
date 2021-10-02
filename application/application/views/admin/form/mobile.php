<div class="container">
    <div class="container card o-hidden border-0 shadow-lg my-1 maincard">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-xs-7 col-sm-7">
                    <div class="">
                        <div class="text-center">
                            <div style="font-size: 17px;" class="text-info">Add a new Mobile</div>
                        </div>
                        <form class="user p-0 pl-2 pt-2" name="new-mobile" id="new-mobile">
                            <div class="form-group">
                                <input type="text" style="font-size: 14px;" id="bname" name="bname" placeholder="Brand Name">
                            </div>
                            <div class="form-group">
                                <input type="text" style="font-size: 14px;" id="mname" name="mname" placeholder="Model Name">
                            </div>
                            <div class="form-group ">
                                <div class="d-flex mb-3 mb-sm-0">

                                    <input type="number" class="p-2 mr-1" style="width: 130px;font-size: 14px;" id="price" name="price" placeholder="Price">
                                    <input type="number" class="p-2" style="width: 130px;font-size: 14px;" id="nprice" name="nprice" placeholder="Net Price">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="more" style="font-size: 14px;">More Details:</label>
                                <textarea class="form-control" rows="5" id="mmore" name="mmore" style="font-size: 14px;"></textarea>
                            </div>
                            

                            <div class=" row">
                                <div class="col-sm-5" style="text-align: center;">
                                    <label for="BookImage">Upload Image</label>
                                </div>

                                <div class="input-group mb-3 form-control-user px-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="mobile1" name="mobile1" accept="image/*" onchange="loadFile(event)">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                </div>
                                <div class="input-group mb-3 form-control-user px-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="mobile2" name="mobile2" accept="image/*" onchange="loadFile(event)">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                </div>
                                <div class="input-group mb-3 form-control-user px-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="mobile3" name="mobile3" accept="image/*" onchange="loadFile(event)">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                </div>
                                <div class="input-group mb-3 form-control-user px-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="mobile4" name="mobile4" accept="image/*" onchange="loadFile(event)">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                </div>
                                <div class="input-group mb-3 form-control-user px-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="mobile5" name="mobile5" accept="image/*" onchange="loadFile(event)">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">
                                    Select the type :
                                </label>
                                <select name="type" id="type">
                                    <option value="New">New</option>
                                    <option value="Used">Used</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" style="font-size: 14px;" id="oname" name="oname" placeholder="Owner Name">
                            </div>
                            <hr>
                            <input type="submit" id="addm" name="addm" class="btn btn-info btn-user btn-block" value="Add New">

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>