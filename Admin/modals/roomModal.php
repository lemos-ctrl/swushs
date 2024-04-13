<div class="modal fade" id="addRoomModal" tabindex="-1" role="dialog" aria-labelledby="addRoomModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRoomModalTitle">Add Rooms</h5>
            </div>
            <div class="modal-body">
                <form id="addRoomForm">
                    <div class="mb-3">
                        <label for="roomName" class="form-label">Room Name</label>
                        <input type="text" class="form-control" id="roomName" name="roomName" required>
                    </div>
                    <div class="mb-3">
                        <label for="roomCode" class="form-label">Room Code</label>
                        <input type="text" class="form-control" id="roomCode" name="roomCode" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addSubject()">Add
                    Room</button>
            </div>
        </div>
    </div>
</div>