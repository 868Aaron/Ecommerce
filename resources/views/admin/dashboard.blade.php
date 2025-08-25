<x-mylayouts.layout-admin-default>
    <div
        style="background: linear-gradient(to right, #6dd5ed, #2193b0); padding: 60px 20px; text-align: center; color: #fff;">
        <h1 style="font-size: 2.75rem; font-weight: 700; margin: 0;">📊 Data Analytics Dashboard</h1>
        <p style="font-size: 1.1rem; margin-top: 10px;">Insightful. Clean. Efficient.</p>
    </div>

    <div
        style="padding: 40px 20px; max-width: 1200px; margin: auto; font-family: 'Segoe UI', sans-serif; color: #34495e; background: #f4f7f9;">

        <div style="display: flex; flex-wrap: wrap; gap: 24px; margin-bottom: 40px; justify-content: center;">
            <div
                style="flex: 1; min-width: 220px; background: #fff; padding: 24px; border-radius: 16px; box-shadow: 0 6px 20px rgba(0,0,0,0.08);">
                <h4 style="margin-bottom: 12px; font-weight: 500; color: #8e44ad;">Total Quantity Sold</h4>
                <h2 style="font-size: 2rem; font-weight: 700; color: #34495e;">{{ $totalQuantity }}</h2>
            </div>
            <div
                style="flex: 1; min-width: 220px; background: #fff; padding: 24px; border-radius: 16px; box-shadow: 0 6px 20px rgba(0,0,0,0.08);">
                <h4 style="margin-bottom: 12px; font-weight: 500; color: #2980b9;">Total Revenue</h4>
                <h2 style="font-size: 2rem; font-weight: 700; color: #34495e;">
                    ${{ number_format($totalRevenueValue, 2) }}</h2>
            </div>
            <div
                style="flex: 1; min-width: 220px; background: #fff; padding: 24px; border-radius: 16px; box-shadow: 0 6px 20px rgba(0,0,0,0.08);">
                <h4 style="margin-bottom: 12px; font-weight: 500; color: #16a085;">Avg Quantity / Product</h4>
                <h2 style="font-size: 2rem; font-weight: 700; color: #34495e;">{{ $averageQuantity }}</h2>
            </div>
            <div
                style="flex: 1; min-width: 220px; background: #fff; color: #34495e; padding: 24px; border-radius: 16px; box-shadow: 0 6px 20px rgba(0,0,0,0.08);">
                <h4 style="margin-bottom: 12px; font-weight: 500; color: #f39c12;">Avg Revenue / Product</h4>
                <h2 style="font-size: 2rem; font-weight: 700;">${{ number_format($averageRevenue, 2) }}</h2>
            </div>
        </div>

        <div
            style="background: #fff; padding: 30px; border-radius: 16px; color: #34495e; margin-bottom: 50px; box-shadow: 0 6px 20px rgba(0,0,0,0.08);">
            <h3 style="font-size: 1.5rem; margin-bottom: 20px;">🏆 Highlights</h3>
            <ul style="list-style: none; padding: 0; font-size: 16px; line-height: 1.8;">
                <li>🌟 <strong>Top Product by Quantity:</strong> {{ $topByQuantity->title }}
                    ({{ $topByQuantity->total_quantity }})
                </li>
                <li>💼 <strong>Top Product by Revenue:</strong> {{ $topByRevenue->title }}
                    (${{ number_format($topByRevenue->total_revenue, 2) }})
                </li>
                <li>👤 <strong>Top Customer:</strong>
                    @if ($topCustomers->isNotEmpty())
                        {{ $topCustomers->first()->name }}
                        (${{ number_format($topCustomers->first()->total_spent, 2) }})
                    @else
                        No customers yet
                    @endif
                </li>
            </ul>
        </div>

        <a href="{{ route('admin.dashboard.printable') }}" target="_blank"
            style="
                display: inline-block;
                padding: 10px 18px;
                background-color: #2193b0;
                color: #fff;
                border-radius: 8px;
                text-decoration: none;
                white-space: nowrap;
                font-weight: 600;
                box-shadow: 0 3px 8px rgba(33, 147, 176, 0.5);
                transition: background-color 0.3s ease, box-shadow 0.3s ease;
            "
            onmouseover="this.style.backgroundColor='#16a085'; this.style.boxShadow='0 5px 15px rgba(22, 160, 133, 0.7)';"
            onmouseout="this.style.backgroundColor='#2193b0'; this.style.boxShadow='0 3px 8px rgba(33, 147, 176, 0.5)';">
            🖨️ Print or Save as PDF
        </a>

        <div style="margin-bottom: 60px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h3 style="color: #2c3e50; font-size: 1.4rem;">Top-Selling Products</h3>
                <div>
                    <button id="showQuantity"
                        style="padding: 10px 18px; background: #c3d2e2; color: #34495e; border: none; border-radius: 8px; cursor: pointer; margin-right: 10px;">Show
                        Quantity</button>
                    <button id="showRevenue"
                        style="padding: 10px 18px; background: #8e44ad; color: #fff; border: none; border-radius: 8px; cursor: pointer;">Show
                        Revenue</button>
                </div>
            </div>
            <div style="background: #fff; padding: 20px; border-radius: 16px; box-shadow: 0 6px 20px rgba(0,0,0,0.08);">
                <div id="topSellingChart" style="height: 320px;"></div>
            </div>
        </div>

        <div style="margin-bottom: 40px;">
            <h3 style="color: #2c3e50; font-size: 1.4rem; margin-bottom: 15px;">Top Customers by Spending</h3>
            <div style="background: #fff; padding: 20px; border-radius: 16px; box-shadow: 0 6px 20px rgba(0,0,0,0.08);">
                <div id="topCustomersChart" style="height: 320px;"></div>
            </div>
        </div>

        <div style="margin-bottom: 40px;">
            <h3 style="color: #2c3e50; font-size: 1.4rem; font-weight: 700; margin-bottom: 20px;">Repeated Buyers </h3>
            <div style="background: #fff; padding: 24px; border-radius: 16px; box-shadow: 0 6px 20px rgba(0,0,0,0.08);">
                <div id="funnelChart" style="height: 320px;"></div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // Data from server
        const labels = {!! json_encode($topProducts->pluck('title')) !!};
        const quantityData = {!! json_encode($topProducts->pluck('total_quantity')) !!};
        const revenueData = {!! json_encode($topProducts->pluck('total_revenue')) !!};

        const colors = ['#2193b0', '#1abc9c', '#f39c12', '#e74c3c', '#9b59b6'];

        let topSellingOptions = {
            chart: {
                type: 'bar',
                height: 320,
                toolbar: {
                    show: false
                },
                animations: {
                    enabled: true
                },
                foreColor: '#34495e',
                background: '#fff',
            },
            colors: colors,
            plotOptions: {
                bar: {
                    horizontal: true,
                    borderRadius: 8,
                    columnWidth: '50%',
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    colors: ['#34495e'],
                    fontWeight: '700'
                }
            },
            series: [{
                name: 'Quantity Sold',
                data: quantityData
            }],
            xaxis: {
                categories: labels,
                labels: {
                    rotate: -30,
                    style: {
                        colors: '#7f8c8d',
                        fontSize: '12px'
                    }
                },
                axisBorder: {
                    show: true,
                    color: '#bdc3c7'
                },
                axisTicks: {
                    show: true,
                    color: '#bdc3c7'
                }
            },
            yaxis: {
                title: {
                    text: 'Quantity / Revenue',
                    style: {
                        color: '#7f8c8d',
                        fontWeight: 'bold'
                    }
                },
                labels: {
                    style: {
                        colors: '#7f8c8d'
                    }
                },
                min: 0
            },
            title: {
                text: 'Top-Selling Products (by Quantity)',
                align: 'left',
                style: {
                    fontSize: '18px',
                    fontWeight: 'bold',
                    color: '#2c3e50'
                }
            },
            tooltip: {
                theme: 'light',
                style: {
                    fontSize: '12px',
                    fontFamily: 'Segoe UI'
                }
            }
        };

        let topSellingChart = new ApexCharts(document.querySelector("#topSellingChart"), topSellingOptions);
        topSellingChart.render();

        document.getElementById('showQuantity').addEventListener('click', () => {
            topSellingChart.updateOptions({
                series: [{
                    data: quantityData,
                    name: 'Quantity Sold'
                }],
                title: {
                    text: 'Top-Selling Products (by Quantity)'
                },
                yaxis: {
                    title: {
                        text: 'Quantity'
                    }
                }
            });
        });

        document.getElementById('showRevenue').addEventListener('click', () => {
            topSellingChart.updateOptions({
                series: [{
                    data: revenueData,
                    name: 'Revenue Generated'
                }],
                title: {
                    text: 'Top-Selling Products (by Revenue)'
                },
                yaxis: {
                    title: {
                        text: 'Revenue ($)'
                    }
                }
            });
        });

        // Top Customers Chart
        const customerLabels = {!! json_encode($topCustomers->pluck('name')) !!};
        const customerSpending = {!! json_encode($topCustomers->pluck('total_spent')) !!};

        new ApexCharts(document.querySelector("#topCustomersChart"), {
            chart: {
                type: 'bar',
                height: 320,
                toolbar: {
                    show: false
                },
                foreColor: '#34495e',
                background: '#fff'
            },
            colors: ['#2980b9'],
            plotOptions: {
                bar: {
                    horizontal: true,
                    borderRadius: 8,
                    columnWidth: '50%'
                }
            },
            dataLabels: {
                enabled: true,
                style: {
                    colors: ['#34495e'],
                    fontWeight: '700'
                }
            },
            series: [{
                name: 'Total Spending ($)',
                data: customerSpending
            }],
            xaxis: {
                categories: customerLabels,
                labels: {
                    rotate: -30,
                    style: {
                        colors: '#7f8c8d',
                        fontSize: '12px'
                    }
                },
                axisBorder: {
                    show: true,
                    color: '#bdc3c7'
                },
                axisTicks: {
                    show: true,
                    color: '#bdc3c7'
                }
            },
            yaxis: {
                title: {
                    text: 'Amount ($)',
                    style: {
                        color: '#7f8c8d',
                        fontWeight: 'bold'
                    }
                },
                labels: {
                    style: {
                        colors: '#7f8c8d'
                    }
                },
                min: 0
            },
            title: {
                text: 'Top Customers by Spending',
                align: 'left',
                style: {
                    fontSize: '18px',
                    fontWeight: 'bold',
                    color: '#2c3e50'
                }
            },
            tooltip: {
                theme: 'light',
                style: {
                    fontSize: '12px'
                },
                y: {
                    formatter: val => `$${val.toFixed(2)}`
                }
            }
        }).render();

        // Funnel Chart
        const buyerLabels = {!! json_encode($repeatedBuyers->pluck('name')) !!};
        const buyerOrders = {!! json_encode($repeatedBuyers->pluck('orders_count')) !!};

        let sortedData = buyerLabels.map((name, i) => ({
                name,
                count: buyerOrders[i]
            }))
            .sort((a, b) => b.count - a.count);

        new ApexCharts(document.querySelector("#funnelChart"), {
            chart: {
                type: 'bar',
                height: 320,
                toolbar: {
                    show: false
                },
                foreColor: '#34495e',
                background: '#fff'
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                    barHeight: '60%',
                    distributed: true,
                    borderRadius: 8
                }
            },
            colors: ['#f39c12', '#e67e22', '#d35400', '#f1c40f', '#f39c12'],
            dataLabels: {
                enabled: true,
                formatter: val => val,
                style: {
                    colors: ['#000'],
                    fontWeight: '700',
                    fontSize: '14px'
                }
            },
            series: [{
                data: sortedData.map(item => item.count)
            }],
            xaxis: {
                categories: sortedData.map(item => item.name),
                labels: {
                    show: false
                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: '#7f8c8d',
                        fontWeight: '600',
                        fontSize: '14px'
                    }
                },
                title: {
                    text: 'Number of Orders',
                    style: {
                        color: '#7f8c8d',
                        fontWeight: 'bold'
                    }
                }
            },
            title: {
                text: 'Repeated Buyers',
                align: 'center',
                style: {
                    fontSize: '20px',
                    fontWeight: 'bold',
                    color: '#2c3e50'
                }
            },
            tooltip: {
                enabled: true,
                theme: 'light',
                style: {
                    fontSize: '14px'
                },
                y: {
                    formatter: val => val + " orders"
                }
            }
        }).render();
    </script>
</x-mylayouts.layout-admin-default>
