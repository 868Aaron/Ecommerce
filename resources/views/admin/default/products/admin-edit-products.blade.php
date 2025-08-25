<x-mylayouts.layout-admin-default>

    <!-- Header Section -->
    <div style="background: linear-gradient(to right, #1e3c72, #2a5298); padding: 60px 20px; text-align: center; color: #fff;">
         <h1 style="font-size: 2.5rem; font-weight: 600; color: #ffffff;">✍️ Edit Product</h1>
        <p style="font-size: 1.2rem; color: #bbdefb; margin-top: 10px;">Refine Your Product with Precision</p>
    </div>

    <!-- Container -->
    <div style="padding: 50px 20px; max-width: 1200px; margin: auto;">

        <!-- Card Section -->
        <div class="card" style="border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); margin-bottom: 30px;">
            <div class="card-body" style="padding: 30px;">
                <div class="card-title" style="margin-bottom: 30px;">
                    <h2 style="font-size: 2rem; font-weight: bold; color: #0D47A1;">Edit Product</h2>
                </div>

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger" style="margin-bottom: 20px; padding: 15px; border-radius: 8px;">
                        <ul style="margin: 0; padding: 0;">
                            @foreach ($errors->all() as $error)
                                <li style="list-style: none;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form Start -->
                <form action="{{ route('admin.products.update', ['product' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Product Title -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="title" style="font-size: 1rem; font-weight: 600;">Product Title:</label>
                        <input type="text" value="{{ $data->title }}" class="form-control" id="title" name="title" style="border-radius: 8px; padding: 12px; font-size: 1rem;">
                    </div>

                    <!-- Short Description -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="short_description" style="font-size: 1rem; font-weight: 600;">Short Description:</label>
                        <textarea class="form-control" id="short_description" name="short_description"
                            style="width: 100%; min-height: 120px; resize: vertical; overflow-y: auto; border-radius: 8px; padding: 12px; font-size: 1rem;">
                            {{ $data->short_description }}
                        </textarea>
                    </div>

                    <!-- Long Description -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="full_description" style="font-size: 1rem; font-weight: 600;">Long Description:</label>
                        <textarea class="form-control" id="full_description" name="full_description"
                            style="width: 100%; min-height: 200px; resize: vertical; overflow-y: auto; border-radius: 8px; padding: 12px; font-size: 1rem;">
                            {{ $data->full_description }}
                        </textarea>
                    </div>

                    <!-- Price -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="price" style="font-size: 1rem; font-weight: 600;">Price:</label>
                        <input type="text" value="{{ $data->price }}" class="form-control" id="price" name="price" style="border-radius: 8px; padding: 12px; font-size: 1rem;">
                    </div>

                    <!-- Quantity -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="quantity" style="font-size: 1rem; font-weight: 600;">Quantity:</label>
                        <input type="text" value="{{ $data->quantity }}" class="form-control" id="quantity" name="quantity" style="border-radius: 8px; padding: 12px; font-size: 1rem;">
                    </div>

                    <!-- Image Path -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="image_path" style="font-size: 1rem; font-weight: 600;">Image Path:</label>
                        <input type="text" value="{{ $data->image_path }}" class="form-control" id="image_path" name="image_path" style="border-radius: 8px; padding: 12px; font-size: 1rem;">
                    </div>

                    <!-- Image Upload -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="image" style="font-size: 1rem; font-weight: 600;">Image:</label>
                        <input type="text" value="{{ $data->image }}" class="form-control" id="image" name="image" style="border-radius: 8px; padding: 12px;">
                        <input type="file" class="form-control" id="image_upload" name="image_upload" style="margin-top: 15px; border-radius: 8px; font-size: 1rem;">
                        <div class="card d-flex" style="margin-top: 20px; display: flex; align-items: center;">
                            <span style="font-size: 1rem; font-weight: 600;">Current Image:</span>
                            <img style="width: 80px; height: 90px; border-radius: 8px; margin-left: 10px;" src="{{ $data->getImage() }}" alt="current image">
                            <span style="font-size: 1rem; font-weight: 600; margin-left: 20px;">New Image Preview:</span>
                            <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image" style="width: 80px; height: 90px; display: none; margin-left: 10px; border-radius: 8px;">
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="category" style="font-size: 1rem; font-weight: 600;">Category:</label>
                        <input type="text" value="{{ $data->category }}" class="form-control" id="category" name="category" style="border-radius: 8px; padding: 12px; font-size: 1rem;">
                    </div>

                    <!-- Classification -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="classification" style="font-size: 1rem; font-weight: 600;">Classification:</label>
                        <select class="form-control" id="classification" name="classification" style="border-radius: 8px; padding: 12px; font-size: 1rem;">
                            <option value="{{ $data->classification }}">{{ Str::ucfirst($data->classification) }}</option>
                            <option value="exclusive">Exclusive</option>
                            <option value="featured">Featured</option>
                            <option value="upcoming">Upcoming</option>
                            <option value="none">None</option>
                        </select>
                    </div>

                    <!-- Status -->
                    <div class="form-group" style="margin-bottom: 30px;">
                        <label for="status" style="font-size: 1rem; font-weight: 600;">Status:</label>
                        <select class="form-control" id="status" name="status" style="border-radius: 8px; padding: 12px; font-size: 1rem;">
                            <option value="active" {{ $data->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $data->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <!-- Buttons -->
                    <div class="form-group" style="text-align: center;">
                        <button type="submit" class="btn btn-primary"
                            style="border-radius: 8px; padding: 10px 20px; font-size: 1.1rem;
                                background-color: #90CAF9; border-color: #64B5F6; color: #0D47A1; margin-right: 20px;">
                            💾 Save Changes
                        </button>
                        <a class="btn btn-secondary" href="{{ route('admin.products.index') }}"
                            style="border-radius: 8px; padding: 10px 20px; font-size: 1.1rem;
                                background-color: #E3F2FD; border-color: #BBDEFB; color: #1E88E5;">
                            ❌ Cancel
                        </a>
                    </div>

                </form>
            </div>
        </div>

    </div>

    <!-- Script to preview image before upload -->
    <script>
        document.getElementById('image_upload').addEventListener('change', function(e) {
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('preview-image-before-upload').style.display = 'block';
                document.getElementById('preview-image-before-upload').src = reader.result;
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    </script>

</x-mylayouts.layout-admin-default>
