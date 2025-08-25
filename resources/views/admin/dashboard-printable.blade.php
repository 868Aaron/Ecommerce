<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Report</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            margin: 40px auto;
            max-width: 1000px;
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        h1,
        h2 {
            color: #1e4620;
            margin-top: 40px;
            margin-bottom: 16px;
            border-bottom: 2px solid #d0e8d0;
            padding-bottom: 6px;
            font-weight: 600;
        }

        button.print-btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #2e7d32;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-bottom: 32px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            transition: background-color 0.3s ease;
        }

        button.print-btn:hover {
            background-color: #256429;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 48px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        th,
        td {
            padding: 16px 20px;
            font-size: 14px;
            text-align: left;
        }

        th {
            background-color: #e3f2e8;
            color: #1b5e20;
            font-weight: 600;
            border-bottom: 1px solid #d0e0d0;
        }

        tr:nth-child(even) td {
            background-color: #f9f9f9;
        }

        tr:hover td {
            background-color: #f1f8f4;
        }

        p {
            font-size: 16px;
        }

        @media print {
            body {
                background-color: white;
            }

            button.print-btn {
                display: none;
            }
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            margin: 40px auto;
            max-width: 1000px;
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        h1,
        h2 {
            color: #3f51b5;
            margin-top: 40px;
            margin-bottom: 16px;
            border-bottom: 2px solid #c5cae9;
            padding-bottom: 6px;
            font-weight: 600;
        }

        button.print-btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #3f51b5;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-bottom: 32px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            transition: background-color 0.3s ease;
        }

        button.print-btn:hover {
            background-color: #303f9f;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 48px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        th,
        td {
            padding: 16px 20px;
            font-size: 14px;
            text-align: left;
        }

        th {
            background-color: #e8eaf6;
            color: #3f51b5;
            font-weight: 600;
            border-bottom: 1px solid #d1d9ff;
        }

        tr:nth-child(even) td {
            background-color: #f9f9f9;
        }

        tr:hover td {
            background-color: #f0f2fc;
        }

        p {
            font-size: 16px;
        }

        @media print {
            body {
                background-color: white;
            }

            button.print-btn {
                display: none;
            }
        }
    </style>

</head>

<body>

    <button class="print-btn" onclick="window.print()">🖨️ Print / Save as PDF</button>

    <h1>📊 PlantKingdom Analytics Report</h1>
    <p><strong>Date:</strong> {{ now()->format('F j, Y') }}</p>

    <h2>Summary Metrics</h2>
    <table>
        <tr>
            <th>Total Quantity Sold</th>
            <td>{{ $totalQuantity }}</td>
        </tr>
        <tr>
            <th>Total Revenue</th>
            <td>${{ number_format($totalRevenueValue, 2) }}</td>
        </tr>
        <tr>
            <th>Average Quantity / Product</th>
            <td>{{ $averageQuantity }}</td>
        </tr>
        <tr>
            <th>Average Revenue / Product</th>
            <td>${{ number_format($averageRevenue, 2) }}</td>
        </tr>
    </table>

    <h2>🏆 Highlights</h2>
    <table>
        <tr>
            <th>Top Product by Quantity</th>
            <td>{{ $topByQuantity->title }} ({{ $topByQuantity->total_quantity }})</td>
        </tr>
        <tr>
            <th>Top Product by Revenue</th>
            <td>{{ $topByRevenue->title }} (${{ number_format($topByRevenue->total_revenue, 2) }})</td>
        </tr>
        <tr>
            <th>Top Customer</th>
            <td>{{ $topCustomers->first()->name }} (${{ number_format($topCustomers->first()->total_spent, 2) }})</td>
        </tr>
    </table>

    <h2>📈 Top-Selling Products</h2>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity Sold</th>
                <th>Total Revenue</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($topProducts as $product)
                <tr>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->total_quantity }}</td>
                    <td>${{ number_format($product->total_revenue, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>👥 Top Customers by Spending</h2>
    <table>
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Total Spent ($)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($topCustomers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>${{ number_format($customer->total_spent, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>🔁 Repeated Buyers</h2>
    <table>
        <thead>
            <tr>
                <th>Buyer Name</th>
                <th>Number of Orders</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($repeatedBuyers as $buyer)
                <tr>
                    <td>{{ $buyer->name }}</td>
                    <td>{{ $buyer->orders_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>



</body>

</html>
