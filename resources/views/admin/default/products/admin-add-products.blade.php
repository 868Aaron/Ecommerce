<x-mylayouts.layout-admin-default>

    <!-- Header Section -->
    <div style="background: linear-gradient(to right, #1e3c72, #2a5298); padding: 60px 20px; text-align: center; color: #fff;">
        <h1 style="font-size: 2.5rem; font-weight: 600; color: #ffffff;">📦 Add Product</h1>
        <p style="font-size: 1.2rem; color: #bbdefb; margin-top: 10px;">Organized & Stylish Inventory Management</p>
    </div>

    <!-- Container -->
    <div style="padding: 50px 20px; max-width: 1200px; margin: auto;">

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger" style="margin-bottom: 20px; padding: 15px; border-radius: 8px;">
                <ul style="margin: 0; padding: 0;">
                    @foreach ($errors->all() as $error)
                        <li style="list-style: none;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Card Section -->
        <div class="card" style="border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); margin-bottom: 30px;">
            <div class="card-body" style="padding: 30px;">
                <div class="card-title" style="margin-bottom: 30px;">
                    <h2 style="font-size: 2rem; font-weight: bold; color: #1e3c72;">Add Product</h2>
                </div>

                <!-- Add Product Form -->
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Product Title -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="title" style="font-size: 1rem; font-weight: 600;">Product Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required
                               style="border-radius: 8px; padding: 12px; font-size: 1rem;">
                    </div>

                    <!-- Short Description -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="short_description" style="font-size: 1rem; font-weight: 600;">Short Description:</label>
                        <textarea class="form-control" id="short_description" name="short_description" required
                                  style="width: 100%; min-height: 120px; resize: vertical; border-radius: 8px; padding: 12px; font-size: 1rem;"></textarea>
                    </div>

                    <!-- Full Description -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="full_description" style="font-size: 1rem; font-weight: 600;">Long Description:</label>
                        <textarea class="form-control" id="full_description" name="full_description" required
                                  style="width: 100%; min-height: 200px; resize: vertical; border-radius: 8px; padding: 12px; font-size: 1rem;"></textarea>
                    </div>

                    <!-- Price -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="price" style="font-size: 1rem; font-weight: 600;">Price:</label>
                        <input type="text" class="form-control" id="price" name="price" required
                               style="border-radius: 8px; padding: 12px; font-size: 1rem;">
                    </div>

                    <!-- Quantity -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="quantity" style="font-size: 1rem; font-weight: 600;">Quantity:</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" required
                               style="border-radius: 8px; padding: 12px; font-size: 1rem;">
                    </div>

                    <!-- Image Path -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="image_path" style="font-size: 1rem; font-weight: 600;">Image Path:</label>
                        <input type="text" class="form-control" id="image_path" name="image_path" value="images/products/" disabled
                               style="border-radius: 8px; padding: 12px; font-size: 1rem; background-color: #f1f1f1;">
                    </div>

                    <!-- Image Upload -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="image_upload" style="font-size: 1rem; font-weight: 600;">Upload Product Image:</label>
                        <input type="file" class="form-control" id="image_upload" name="image_upload" required
                               style="border-radius: 8px; padding: 12px; font-size: 1rem;">
                        <div style="margin-top: 20px; display: flex; align-items: center;">
                            <span style="font-size: 1rem; font-weight: 600;">Preview:</span>
                            <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image"
                                 style="width: 80px; height: 90px; margin-left: 10px; border-radius: 8px; display: none;">
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="category" style="font-size: 1rem; font-weight: 600;">Category:</label>
                        <input type="text" class="form-control" id="category" name="category" required
                               style="border-radius: 8px; padding: 12px; font-size: 1rem;">
                    </div>

                    <!-- Classification -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="classification" style="font-size: 1rem; font-weight: 600;">Classification:</label>
                        <select class="form-control" id="classification" name="classification" required
                                style="border-radius: 8px; padding: 12px; font-size: 1rem;">
                            <option value="default">Default</option>
                            <option value="exclusive">Exclusive</option>
                            <option value="featured">Featured</option>
                            <option value="upcoming">Upcoming</option>
                        </select>
                    </div>

                    <!-- Status -->
                    <div class="form-group" style="margin-bottom: 30px;">
                        <label for="status" style="font-size: 1rem; font-weight: 600;">Status:</label>
                        <select class="form-control" id="status" name="status" required
                                style="border-radius: 8px; padding: 12px; font-size: 1rem;">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <!-- Buttons -->
                    <div class="form-group" style="text-align: center;">
                        <button type="submit" class="btn"
                                style="border-radius: 8px; padding: 10px 20px; font-size: 1.1rem;
                                       background-color: #64b5f6; border: none; color: #0d47a1; font-weight: 600; margin-right: 20px;">
                            💾 Save Product
                        </button>

                        <a class="btn" href="{{ route('admin.products.index') }}"
                           style="border-radius: 8px; padding: 10px 20px; font-size: 1.1rem;
                                  background-color: #90a4ae; border: none; color: #263238; font-weight: 600;">
                            ❌ Cancel
                        </a>
                    </div>

                </form>
            </div>
        </div>
        <!-- End Card Section -->

    </div>

    <!-- Script to preview image before upload -->
    <script>
        document.getElementById('image_upload').addEventListener('change', function(e) {
            var reader = new FileReader();
            reader.onload = function() {
                const preview = document.getElementById('preview-image-before-upload');
                preview.style.display = 'block';
                preview.src = reader.result;
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    </script>

</x-mylayouts.layout-admin-default>
