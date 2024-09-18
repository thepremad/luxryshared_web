@extends('frontend.layouts.app')

@section('content')




<section>

    <div class="listitem-wp">
        <div class="container">
            <div class="listitem-headsec pt-3 pb-3 mb-5">
                <div class="listitem-head">
                    <h5>MIDDLE EAST FIRST PEER TO PEER FASHION SHARING COMMUNITY</h5>    
                </div>    
            </div>  
            <br>
              <div class="listitem-sec mb-5">
                <div class="listitem-twosec">
                    <h2>List an Item</h2>
                    <ul>
                        <li>
                            <hr>
                        </li>
                        <li>
                            <strong>ITEM DETAILS</strong>
                        </li>
                        <li>
                            <hr>
                        </li>
                    </ul>
                </div>
                <form action="">
                    <div class="row mt-3">
                        <div class="col-md-6 mb-5">
                            <label for="basic-url" class="form-label">Category</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Category</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="basic-url" class="form-label">Sub Category</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Sub - Category</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="basic-url" class="form-label">Brand</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Brand</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="basic-url" class="form-label">Item Title</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Enter Item Name</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="basic-url" class="form-label">Color</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Color</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="question-bg">
                                <label for="basic-url" class="form-label">Size</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Size</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <img src="{{ asset('frontend/images/question-icon.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Upload Main Image for your Item <span>*</span></label>
                                <div class="uploadimg-onelistitem">
                                    <img id="oneImage" src="{{ asset('frontend/images/uploadfile.png') }}" alt="">
                                    <br><br>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="uploadimg-twolistitem mb-3">
                                <label for="basic-url" class="form-label">Upload Main Image for your Item <span>*</span></label>
                                <ul>
                                    <li><img id="uploadimgBG" src="{{ asset('frontend/images/uploadfile.png') }}" alt=""></li>
                                    <li><img id="uploadimgBG2" src="{{ asset('frontend/images/uploadfile.png') }}" alt=""></li>
                                    <li><img id="uploadimgBG3" src="{{ asset('frontend/images/uploadfile.png') }}" alt=""></li>
                                    <li><img id="uploadimgBG4" src="{{ asset('frontend/images/uploadfile.png') }}" alt=""></li>
                                </ul>
                                <br>
                                <input type="file" class="form-control" id="file-input" aria-describedby="basic-addon3 basic-addon4">                          
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-5">
                        <label for="basic-url" class="form-label">Item Description <span>*</span></label>
                        <div class="input-group">
                            <textarea class="form-control" placeholder="Describe your item and include fitting notes eg. perfect sizing, or item comes longer in length" rows="5" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                    <a href="{{ url('list-itemtwo') }}">NEXT</a>
                </form>
              </div>
        </div>    
    </div>    

</section>

<script>
    document.getElementById('basic-url').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('oneImage').src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });
</script>

<script>
    let imageElements = ['uploadimgBG', 'uploadimgBG2', 'uploadimgBG3', 'uploadimgBG4'];
    let currentImageIndex = 0;
    function showCurrentImage() {
        if (currentImageIndex < imageElements.length) {
            document.getElementById(imageElements[currentImageIndex]).style.display = 'block';
        }
    }

    document.getElementById('file-input').addEventListener('change', function(event) {
        if (event.target.files && event.target.files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                let currentImageElement = document.getElementById(imageElements[currentImageIndex]);
                currentImageElement.src = e.target.result;
                currentImageElement.style.display = 'block';
                currentImageIndex++;
                showCurrentImage();
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    });
    showCurrentImage();
</script>




@endsection