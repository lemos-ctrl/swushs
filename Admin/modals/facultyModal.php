<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Faculty</h5>
            </div>
            <div class="modal-body">
                <form id="addSubjectForm">
                    <div class="mb-1">
                        <h5>Faculty Name</h5>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="startDate" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="subjectCode" name="subjectCode" required>
                        </div>
                        <div class="col">
                            <label for="endDate" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="subjectCode" name="subjectCode" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Faculty Role</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="probationary" name="strand"
                                        value="Probationary">
                                    <label class="form-check-label" for="probationary">Probationary</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="regular" name="strand"
                                        value="Regular">
                                    <label class="form-check-label" for="regular">Regular</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="coordinator" name="strand"
                                        value="Coordinator">
                                    <label class="form-check-label" for="coordinator">Coordinator</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="principal" name="strand"
                                        value="Principal">
                                    <label class="form-check-label" for="principal">Principal</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="strand" class="form-label">FT / PT</label>
                        <select class="form-select" id="strand" name="strand">
                            <option value="">FT / PT</option>
                            <option value="Strand 1">FT</option>
                            <option value="Strand 2">PT</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="strand" class="form-label">Preferred Subjects</label>
                        <select class="form-select" id="strand" name="strand">
                            <option value="">Select Subject</option>
                            <option value="Strand 1">APP 003</option>
                            <option value="Strand 2">ITE 325</option>
                            <option value="Strand 2">can teach any subjects</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="strand" class="form-label">Preferred Strand</label>
                        <select class="form-select" id="strand" name="strand">
                            <option value="">Select Strand</option>
                            <option value="Strand 1">APP 003</option>
                            <option value="Strand 2">ITE 325</option>
                            <option value="Strand 2">can teach any subjects</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="subjectDescription" class="form-label">Required Hours</label>
                        <input type="number" class="form-control" id="subjectDescription" name="subjectDescription">
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