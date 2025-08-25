<x-mylayouts.layout-admin-default>

<!-- Header -->
<div style="background: linear-gradient(to right, #1e3c72, #2a5298); padding: 60px 20px; text-align: center; color: #fff;">
    <h1 style="font-size: 2.5rem; font-weight: 600; color: #ffffff;">📦 View Products</h1>
    <p style="font-size: 1.2rem; color: #bbdefb; margin-top: 10px;">Curated & Stylish Product Inventory</p>
</div>

<!-- Page Container -->
<div style="padding: 50px 20px; max-width: 1200px; margin: auto;">

    <!-- Card -->
    <div style="background: #FFFFFF; border-radius: 16px; box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06); padding: 30px;">

        <!-- Title -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2 style="color: #1e3c72; font-weight: 600;">📦 All Products</h2>
            <a href="{{ route('admin.products.create') }}"
               style="padding: 10px 20px; background-color: #1e88e5; color: white; border: none; border-radius: 8px; font-size: 16px; text-decoration: none; box-shadow: 0 3px 6px rgba(0,0,0,0.1);">
                <i class="fa-solid fa-plus"></i> Add New Product
            </a>
        </div>

        <!-- Divider -->
        <hr style="border-top: 1px solid #e0e0e0; margin-bottom: 30px;">

        <!-- Product Table -->
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; font-size: 16px;">
                <thead>
                    <tr style="background-color: #e3f2fd; color: #0d47a1;">
                        <th style="padding: 12px; text-align: left;">No.</th>
                        <th style="padding: 12px; text-align: left;">Image</th>
                        <th style="padding: 12px; text-align: left;">Title</th>
                        <th style="padding: 12px; text-align: left;">Price</th>
                        <th style="padding: 12px; text-align: left;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($count = 1)
                    @foreach ($product_data as $data)
                    <tr style="border-bottom: 1px solid #e0e0e0;">
                        <td style="padding: 12px;">{{ $count }}</td>
                        <td style="padding: 12px;">
                            <img src="{{ $data->getImage() }}" alt="image" style="width: 70px; height: 80px; border-radius: 8px; object-fit: cover;">
                        </td>
                        <td style="padding: 12px;">{{ $data->title }}</td>
                        <td style="padding: 12px;">${{ $data->price }}</td>
                        <td style="padding: 12px;">
                            <a href="{{ route('shop.details', ['id' => $data->id]) }}" target="_blank"
                               style="background-color: #29B6F6; color: white; padding: 6px 10px; border-radius: 6px; margin-right: 5px; display: inline-block;">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.products.edit', ['product' => $data->id]) }}"
                               style="background-color: #5C6BC0; color: white; padding: 6px 10px; border-radius: 6px; margin-right: 5px; display: inline-block;">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <a href="#"
                               style="background-color: #EF5350; color: white; padding: 6px 10px; border-radius: 6px; display: inline-block;">
                                <i class="fa-regular fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                    @php($count++)
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>

</x-mylayouts.layout-admin-default>
