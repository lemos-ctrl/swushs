<!-- subject modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Subject</h5>
            </div>
            <div class="modal-body">
                <form id="addSubjectForm">
                    <div class="mb-3">
                        <label for="subjectCode" class="form-label">Subject Code</label>
                        <input type="text" class="form-control" id="subjectCode" name="subjectCode" required>
                    </div>
                    <div class="mb-3">
                        <label for="subjectDescription" class="form-label">Subject Description</label>
                        <input type="text" class="form-control" id="subjectDescription" name="subjectDescription">
                    </div>
                    <div class="mb-3">
                        <label for="strand" class="form-label">Grade Level</label>
                        <select class="form-select" id="strand" name="strand">
                            <option value="">Select Grade Level</option>
                            <option value="Strand 1">11</option>
                            <option value="Strand 2">12</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="strand" class="form-label">Strand</label>
                        <select class="form-select" id="strand" name="strand">
                            <option value="">Select Strand</option>
                            <option value="Strand 1">Strand 1</option>
                            <option value="Strand 2">Strand 2</option>
                            <option value="Strand 3">Strand 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="creditedUnits" class="form-label">Credited Units</label>
                        <input type="text" class="form-control" id="creditedUnits" name="creditedUnits">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addSubject()">Add
                    Subject</button>
            </div>
        </div>
    </div>
</div>