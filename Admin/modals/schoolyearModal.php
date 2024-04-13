<div class="modal fade" id="addSchoolYear" tabindex="-1" role="dialog" aria-labelledby="addSchoolYearTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSchoolYearTitle">Add School Years</h5>
            </div>
            <div class="modal-body">
                <form id="addSchoolYearForm">
                    <div class="mb-3">
                        <label for="schoolYearName" class="form-label">School Year Name:</label>
                        <input type="text" class="form-control" id="schoolYearName" name="schoolYearName" required>
                    </div>
                    <div class="mb-1">
                        <h5>School Year Duration</h5>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="startDate" class="form-label">Start Date:</label>
                            <input type="date" class="form-control" id="schoolYearStartDate" name="schoolYearStartDate">
                        </div>
                        <div class="col">
                            <label for="endDate" class="form-label">End Date:</label>
                            <input type="date" class="form-control" id="schoolYearSndDate" name="schoolYearEndDate">
                        </div>
                    </div>
                    <div class="mb-1">
                        <h6>1st Semester</h6>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="startDate" class="form-label">Start Date:</label>
                            <input type="date" class="form-control" id="1stSemStartDate" name="1stSemStartDate">
                        </div>
                        <div class="col">
                            <label for="endDate" class="form-label">End Date:</label>
                            <input type="date" class="form-control" id="1stSemEndDate" name="1stSemEndDate">
                        </div>
                    </div>
                    <div class="mb-1">
                        <h6>2nd Semester</h6>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="startDate" class="form-label">Start Date:</label>
                            <input type="date" class="form-control" id="2ndSemStartDate" name="2ndSemStartDate">
                        </div>
                        <div class="col">
                            <label for="endDate" class="form-label">End Date:</label>
                            <input type="date" class="form-control" id="2ndSemEndDate" name="2ndSemEndDate">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addSubject()">Add
                    School Year</button>
            </div>
        </div>
    </div>
</div>