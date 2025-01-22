<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="productform" name="productform" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <input type="hidden" class="form-control" id="hid" name="hid">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
            <span class="text-danger error-name"></span>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
            <span class="text-danger error-description"></span>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Price:</label>
            <input type="number" class="form-control" id="price" name="price">
            <span class="text-danger error-price"></span>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Image:</label>
            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
            <img src="{{url('assets/images/selectimage.png')}}" name="img_preview" id="img_preview" height="120px" width="140px" alt="No file choosen"/>
            <span class="text-danger error-photo"></span>
          </div>  
        </form>
      </div>
      <div class="modal-footer"> 
        <button type="button" class="btn btn-primary" name="submit" id="submit">Submit</button>
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>