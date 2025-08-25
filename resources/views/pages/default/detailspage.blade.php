<x-mylayouts.layout-default>

    <section class="ftco-section" style="padding: 4em 0;">
        <div class="container">
            <div class="row" style="align-items: flex-start;">
                <div class="col-lg-6 mb-5 ftco-animate"
                    style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background-color: #f8f8f8; /* Light background for image container */
                    border-radius: 8px; /* Rounded corners for the container */
                    overflow: hidden; /* Ensure content respects border-radius */
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); /* Subtle shadow for depth */
                    height: 550px; /* Fixed height for the entire image display area */
                ">
                    <a href="{{ $data->getImage() }}" class="image-popup prod-img-bg"
                        style="
                        display: block;
                        width: 100%;
                        height: 100%; /* Make the anchor fill its parent div */
                        overflow: hidden;
                        position: relative;
                        display: flex; /* Use flex to center image within this container */
                        justify-content: center;
                        align-items: center;
                    ">
                        <img src="{{ $data->getImage() }}" class="img-fluid" alt="{{ $data->title }} Image"
                            style="
                            width: 100%;
                            height: 100%;
                            object-fit: contain; /* Ensures images fit within the area without cropping */
                            object-position: center; /* Centers the image within its container */
                            border-radius: 8px; /* Apply border-radius to the image itself */
                        ">
                    </a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate"
                    style="
                    color: #333; /* Default text color */
                    padding-left: 3rem !important; /* Increase padding for better visual balance */
                ">
                    <h3
                        style="
                        font-family: 'Playfair Display', serif; /* Consistent elegant font */
                        font-size: 2.2rem;
                        font-weight: 700;
                        color: #2c3e50; /* Dark blue-grey for headings */
                        margin-bottom: 0.8rem;
                    ">
                        {{ $data->title }}</h3>
                    <div class="rating d-flex"
                        style="
                        align-items: center;
                        margin-bottom: 1.5rem;
                        font-size: 0.95rem; /* Slightly smaller for ratings */
                    ">
                        @include('pages.additional.reviews.reviews-stars-custom')


                    </div>
                    <p class="price"
                        style="
                        font-size: 2.5rem;
                        font-weight: 800;
                        color: #8e44ad; /* Deep purple for the price */
                        margin-bottom: 1.5rem;
                    ">
                        <span>${{ $data->getPrice() }}</span>
                    </p>
                    <div
                        style="
                        line-height: 1.8;
                        color: #555;
                        margin-bottom: 2.5rem;
                    ">
                        {{ $data->short_description }}
                    </div>

                    <form style="margin-bottom: 20px;">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="product_id" value="{{ $data->id }}">

                        <!-- Single Quantity Input -->
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                            <input type="number" id="quantity" name="quantity" value="1" min="1"
                                max="100"
                                style="text-align: center; border: 1px solid #ccc; border-radius: 8px; height: 42px;
                   font-size: 1rem; color: #333; width: 90px; padding: 5px;">
                            <span style="color: #7f8c8d; font-size: 0.9rem;">80 pieces available</span>
                        </div>

                        <!-- Buttons Side by Side -->
                        <div style="display: flex; gap: 10px;">
                            <!-- Add to Cart -->
                            <button formaction="{{ route('cart.store') }}" formmethod="POST" type="submit"
                                style="background-color: #8e44ad; color: white; border: none; border-radius: 8px;
                   font-size: 1.05rem; font-weight: 600; padding: 12px 30px; cursor: pointer;
                   transition: background-color 0.3s ease, transform 0.2s ease;">
                                Add to Cart
                            </button>

                            <!-- Wishlist -->
                            <button formaction="{{ route('wishlist.store') }}" formmethod="POST" type="submit"
                                style="background-color: #9b59b6; color: white; border: none; border-radius: 8px;
                   font-size: 1.05rem; font-weight: 600; padding: 12px 30px; cursor: pointer;
                   transition: background-color 0.3s ease, transform 0.2s ease;">
                                Save for Later
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Reviews -->
            @include('pages.additional.reviews.reviews-preview')
        </div>

    </section>


</x-mylayouts.layout-default>
