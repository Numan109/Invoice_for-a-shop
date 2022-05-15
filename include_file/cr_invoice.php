<div class="main">

    <div class="container">

        <div class="card">
            <div class="card-body">
                <form action="" id="invoice-form" method="post" class="invoice-form" role="form" novalidate="">
                    <div class="load-animate animated fadeInUp">

                        <input id="currency" type="hidden" value="$">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <h3>From,</h3>
                                Azmina Electronics<br>
                                Narundi Bazar, Gupalpur Road,<br>
                                Jamalpur sadar, Jamalpur<br>
                                01940-354738<br>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <h3>To,</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Customer Name.." autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="p_number" id="p_number" placeholder="Customer Phone No.." autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="1" name="address" id="address" placeholder="Address"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <table class="table table-condensed table-striped" id="invoiceItem">
                                    <tr>
                                        <th width="2%">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="checkAll" name="checkAll">
                                                <label class="custom-control-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th width="23%">Item Name</th>
                                        <th width="15%">Model</th>
                                        <th width="15%">Sl NO</th>
                                        <th width="15%">Quantity</th>
                                        <th width="15%">Price</th>
                                        <th width="15%">Total</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="itemRow custom-control-input" id="itemRow_1">
                                                <label class="custom-control-label" for="itemRow_1"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <select id="product_name" name="product_name" class="form-control" autocomplete="off" onchange="change()">
                                                <option value="" selected disabled> Seclect product</option>
                                                <option value="refrigerator">Refrigerator</option>
                                                <option value="telivision">Telivision</option>
                                                <option value="rice_cooker">Rice cooker</option>
                                                <option value="blander">Blander</option>
                                                <option value="presser_cooker">Presser cooker</option>
                                                <option value="electric_Catli">Electric Catli</option>
                                                <option value="Iron">Iron</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select id="model" name="model" class="form-control">
                                                <option value="" selected disabled> Seclect Model</option>
                                            </select>
                                        </td>
                                        <td><input type="text" name="p_sl_no[]" id="p_sl_no" class="form-control" autocomplete="off"></td>
                                        <td><input type="number" name="quantity[]" id="quantity" class="form-control quantity" autocomplete="off"></td>
                                        <td><input type="number" name="price[]" id="price" class="form-control price" autocomplete="off"></td>
                                        <td><input type="number" name="total[]" id="total" class="form-control total" autocomplete="off"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button>
                                <button class="btn btn-success" id="addRows" type="button">+ Add More</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group mt-3 mb-3 ">
                                    <label>Subtotal: &nbsp;</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text currency">$</span>
                                        </div>
                                        <input value="" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group mt-3 mb-3 ">
                                    <label>Discount: &nbsp;</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text currency">%</span>
                                        </div>
                                        <input value="" type="number" class="form-control" name="discount" id="discount" placeholder="Discount">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group mt-3 mb-3 ">
                                    <label>Discount Amount: &nbsp;</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text currency">$</span>
                                        </div>
                                        <input value="" type="number" class="form-control" name="discountAmount" id="discountAmount" placeholder="Discount Amount">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group mt-3 mb-3 ">
                                    <label>Total: &nbsp;</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text currency">$</span>
                                        </div>
                                        <input value="" type="number" class="form-control" name="totalAfterDiscount" id="totalAfterDiscount" placeholder="Total">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group mt-3 mb-3 ">
                                    <label>Amount Paid: &nbsp;</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text currency">$</span>
                                        </div>
                                        <input value="" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group mt-3 mb-3 ">
                                    <label>Amount Due: &nbsp;</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text currency">$</span>
                                        </div>
                                        <input value="" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                <h3>Notes: </h3>
                                <div class="form-group">
                                    <textarea class="form-control txt" rows="3" name="notes" id="notes" placeholder="Your Notes"></textarea>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="hidden" value="1" class="form-control" name="userId">
                                    <input data-loading-text="Saving Invoice..." type="submit" name="invoice_btn" value="Save Invoice" class="btn btn-success submit_btn invoice-save-btm">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="catagori.js"></script>
</div>