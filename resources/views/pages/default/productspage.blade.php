<x-mylayouts.layout-default>



    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-10 order-md-last">
                    <div class="row">


                        @foreach ($product_data as $data)
                            <div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
                                <div class="product d-flex flex-column"
                                    style="
            width: 100%;
            border: 1px solid #e0e0e0; /* Softer border for product cards */
            border-radius: 8px; /* Slightly rounded corners for a modern look */
            overflow: hidden; /* Ensures content stays within rounded corners */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08); /* Subtle, elegant shadow */
            transition: all 0.3s ease; /* Smooth transition for hover effects */
            background-color: #ffffff; /* White background for product cards */
            margin-bottom: 25px; /* Add some space between cards if they stack */
        "
                                    onmouseover="this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.15)'; this.style.transform='translateY(-5px)'; this.style.borderColor='#8e44ad';"
                                    onmouseout="this.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.08)'; this.style.transform='translateY(0)'; this.style.borderColor='#e0e0e0';">
                                    <a href="#" class="img-prod"
                                        style="
                display: block;
                width: 100%;
                height: 350px; /* Fixed height for all images */
                overflow: hidden; /* Hide overflowing parts of the image */
                position: relative; /* For the overlay and status */
            ">
                                        <img class="img-fluid" src="{{ $data->getImage() }}" alt="Product Image"
                                            style="
                    width: 100%;
                    height: 100%;
                    object-fit: cover; /* Ensures images cover the area without distortion */
                    object-position: center; /* Centers the image within its container */
                    transition: transform 0.4s ease; /* Smooth zoom on hover */
                "
                                            onmouseover="this.style.transform='scale(1.08)';"
                                            onmouseout="this.style.transform='scale(1)';">
                                        <span class="status"
                                            style="
                    position: absolute;
                    top: 15px;
                    left: 15px;
                    background-color: #8e44ad; /* Deep purple for status badge */
                    color: #fff;
                    padding: 5px 12px;
                    border-radius: 5px;
                    font-size: 0.85rem;
                    font-weight: 600;
                    z-index: 10;
                    text-transform: uppercase;
                ">50%
                                            Off</span>
                                        <div class="overlay"
                                            style="
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background: rgba(44, 62, 80, 0.4); /* Dark blue-grey overlay */
                    opacity: 0;
                    transition: opacity 0.3s ease;
                "
                                            onmouseover="this.style.opacity='1';"></div>
                                    </a>
                                    <div class="text py-3 pb-4 px-3"
                                        style="flex-grow: 1; display: flex; flex-direction: column;">
                                        <div class="d-flex" style="margin-bottom: 10px;">
                                            <div class="cat" style="flex-grow: 1;">
                                                <span
                                                    style="font-size: 0.9rem; color: #7f8c8d; text-transform: uppercase;">{{ $data->category }}</span>
                                            </div>
                                            @include('pages.additional.reviews.reviews-stars-custom')

                                        </div>
                                        <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 10px;">
                                            <a href="{{ $data->getLink() }}"
                                                style="color: #2c3e50; text-decoration: none; transition: color 0.3s ease;"
                                                onmouseover="this.style.color='#8e44ad';"
                                                onmouseout="this.style.color='#2c3e50';">
                                                {{ $data->title }}
                                            </a>
                                        </h3>
                                        <div class="pricing">
                                            <p class="price"
                                                style="font-size: 1.4rem; font-weight: 700; color: #2c3e50;">
                                                <span class="price-sale">${{ $data->getPrice() }}</span>
                                            </p>
                                        </div>
                                        <p class="bottom-area d-flex px-3"
                                            style="
                    margin-top: auto; /* Pushes buttons to the bottom of the card */
                    padding-top: 15px; /* Add padding above buttons */
                    border-top: 1px solid #eee; /* Separator line for buttons */
                    justify-content: space-between; /* Space out buttons */
                    align-items: center;
                ">
                                            <a href="{{ route('cart.addfromstorepage', ['id' => $data->id]) }}"
                                                class="add-to-cart text-center py-2 mr-1"
                                                style="
                        flex: 1; /* Allow buttons to take equal space */
                        background-color: #8e44ad; /* Deep purple for add to cart */
                        color: #fff;
                        border-radius: 5px;
                        text-decoration: none;
                        font-weight: 600;
                        font-size: 0.9rem;
                        padding: 10px 15px;
                        transition: background-color 0.3s ease, transform 0.2s ease;
                    "
                                                onmouseover="this.style.backgroundColor='#6c3483'; this.style.transform='translateY(-2px)';"
                                                onmouseout="this.style.backgroundColor='#8e44ad'; this.style.transform='translateY(0)';">
                                                <span>Add to cart <i class="ion-ios-add ml-1"></i></span>
                                            </a>
                                            <a href="{{ $data->getLink() }}" class="buy-now text-center py-2"
                                                style="
                        flex: 1; /* Allow buttons to take equal space */
                        margin-left: 10px; /* Space between buttons */
                        background-color: #34495e; /* Darker blue-grey for details button */
                        color: #fff;
                        border-radius: 5px;
                        text-decoration: none;
                        font-weight: 600;
                        font-size: 0.9rem;
                        padding: 10px 15px;
                        transition: background-color 0.3s ease, transform 0.2s ease;
                    "
                                                onmouseover="this.style.backgroundColor='#2c3e50'; this.style.transform='translateY(-2px)';"
                                                onmouseout="this.style.backgroundColor='#34495e'; this.style.transform='translateY(0)';">
                                                Details<span><i class="ion-ios-cart ml-1"></i></span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach






                    </div>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2">
                    <div class="sidebar">
                        <div class="sidebar-box-2">
                            <h2 class="heading">Categories</h2>
                            <div class="fancy-collapse-panel">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">Men's Shoes
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <ul>
                                                    <li><a href="#">Sport</a></li>
                                                    <li><a href="#">Casual</a></li>
                                                    <li><a href="#">Running</a></li>
                                                    <li><a href="#">Jordan</a></li>
                                                    <li><a href="#">Soccer</a></li>
                                                    <li><a href="#">Football</a></li>
                                                    <li><a href="#">Lifestyle</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">Women's Shoes
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <ul>
                                                    <li><a href="#">Sport</a></li>
                                                    <li><a href="#">Casual</a></li>
                                                    <li><a href="#">Running</a></li>
                                                    <li><a href="#">Jordan</a></li>
                                                    <li><a href="#">Soccer</a></li>
                                                    <li><a href="#">Football</a></li>
                                                    <li><a href="#">Lifestyle</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">Accessories
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <ul>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">T-Shirt</a></li>
                                                    <li><a href="#">Jacket</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseFour" aria-expanded="false"
                                                    aria-controls="collapseThree">Clothing
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                <ul>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">T-Shirt</a></li>
                                                    <li><a href="#">Jacket</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-box-2">
                            <h2 class="heading">Price Range</h2>
                            <form method="post" class="colorlib-form-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="guests">Price from:</label>
                                            <div class="form-field">
                                                <i class="icon icon-arrow-down3"></i>
                                                <select name="people" id="people" class="form-control">
                                                    <option value="#">1</option>
                                                    <option value="#">200</option>
                                                    <option value="#">300</option>
                                                    <option value="#">400</option>
                                                    <option value="#">1000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="guests">Price to:</label>
                                            <div class="form-field">
                                                <i class="icon icon-arrow-down3"></i>
                                                <select name="people" id="people" class="form-control">
                                                    <option value="#">2000</option>
                                                    <option value="#">4000</option>
                                                    <option value="#">6000</option>
                                                    <option value="#">8000</option>
                                                    <option value="#">10000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-mylayouts.layout-default>
