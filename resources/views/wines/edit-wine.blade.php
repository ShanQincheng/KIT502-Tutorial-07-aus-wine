<!-- Modal for Registration -->
<form id="form-edit-wine" action="" method="POST">
    @csrf
    <div class="modal fade" id="editWineModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationFormLabel">Edit wine</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="name-edit-wine" class="mb-1">Wine Name</label>
                    <input id="name-edit-wine" name="name-edit-wine" type="text" class="col-sm-12 form-control" value="" readonly>

                    <label for="type-edit-wine" class="col-sm-5 col-form-label">Type of Wine</label>
                    <select id="type-edit-wine" name="type-edit-wine" class="col-sm-12 form-select" aria-label="Default select example">
                        <option selected>Select the wine type</option>
                        <option value="Red Wine">Red Wine</option>
                        <option value="White Wine">White Wine</option>
                        <option value="Sparkling">Sparkling</option>
                    </select>

                    <label for="qty-edit-wine" class="col-sm-2 col-form-label">Quantity</label>
                    <input id="qty-edit-wine" name="qty-edit-wine" type="text" class="col-sm-12 form-control" required>

                    <label for="price-edit-wine" class="col-sm-2 col-form-label">Price</label>
                    <input id="price-edit-wine" name="price-edit-wine" type="text" class="col-sm-12 form-control" required>

                    <label for="region-edit-wine" class="col-sm-5 col-form-label">Region of wine</label>
                    <select id="region-edit-wine" name="region-edit-wine" class="col-sm-12 form-select" aria-label="Default select example">
                        <option selected>Select the region of wine</option>
                        <option value="SA">SA</option>
                        <option value="TAS">TAS</option>
                        <option value="NSW">NSW</option>
                        <option value="VIC">VIC</option>
                        <option value="NSW">NSW</option>
                        <option value="QLD">QLD</option>
                        <option value="WA">WA</option>
                        <option value="ACT">ACT</option>
                        <option value="JBT">JBT</option>
                        <option value="NT">NT</option>
                    </select>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </div>
    </div>
</form>