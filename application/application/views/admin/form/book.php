<div class="container">
    <div class="container card o-hidden border-0 shadow-lg my-1 maincard">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-xs-7 col-sm-7">
                    <div class="">
                        <div class="text-center">
                            <div style="font-size: 17px;" class="text-info"><i class="icon-book pr-3"></i>Add a new book</div>
                        </div>
                        <form class="user p-0 pl-2 pt-2" name="new-book" id="new-book">
                            <div class="form-group">
                                <input type="text" style="font-size: 14px;" id="bookname" name="bookname" placeholder="Book Name">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Grade : </label>
                                </div>
                                <select class="custom-select" id="grade" name="grade">
                                    <option selected>Choose Grade...</option>
                                    <option value="0">Nursery</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <div class="d-flex mb-3 mb-sm-0">
                                    <input type="number" class="p-2 mr-1" style="width: 130px;font-size: 14px;" id="bookprice" name="bookprice" placeholder="Price">
                                    <input type="number" class="p-2" style="width: 130px;font-size: 14px;" id="bookqty" name="bookqty" placeholder="Quantity">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="d-flex mb-3 mb-sm-0">
                                    <input type="text" class="p-2 mr-1" style="width: 130px;font-size: 14px;" id="isbn" name="isbn" placeholder="ISBN">
                                    <input type="text" class="p-2" style="width: 130px;font-size: 14px;" id="author" name="author" placeholder="Author">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="more" style="font-size: 14px;">Book More Details:</label>
                                <textarea class="form-control" rows="5" id="bookmore" name="bookmore" style="font-size: 14px;"></textarea>
                            </div>
                            <div class="form-group ">
                                <div class="d-flex mb-3 mb-sm-0">

                                    <input type="number" class="p-2 mr-1" style="width: 130px;font-size: 14px;" id="bookpage" name="bookpage" placeholder="Pages">
                                    <input type="text" class="p-2" style="width: 130px;font-size: 14px;" id="bookpub" name="bookpub" placeholder="Publication">
                                </div>
                            </div>

                            <div class=" row">
                                <div class="col-sm-5" style="text-align: center;">
                                    <label for="BookImage">Upload Image</label>
                                </div>

                                <div class="input-group mb-3 form-control-user px-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="book" name="book" accept="image/*" onchange="loadFile(event)">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <input type="submit" id="addbook" name="addbook" class="btn btn-info btn-user btn-block" value="Add New">

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>