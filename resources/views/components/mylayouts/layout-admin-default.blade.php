<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title> Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
</head>
<body style="margin: 0; font-family: 'Poppins', sans-serif; background: #f4f6fc; color: #2c3e50;">

  <!-- Top Navigation Bar -->
  <div style="background: linear-gradient(90deg, #5e60ce, #4361ee); padding: 20px 40px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
    <div style="display: flex; align-items: center;">
      <img src="https://img.icons8.com/?size=100&id=3VyU0T1nd3XV&format=png&color=000000" alt="Logo" style="width: 32px; height: 32px; margin-right: 12px;" />
      <span style="font-size: 22px; color: #fff; font-weight: 600;">Type Here</span>
    </div>
    <nav>
      <a href="{{ route('admin.products.index') }}" style="margin: 0 15px; color: #fff; text-decoration: none; font-weight: 500;"><i class="fas fa-box"></i> Products</a>
      <a href="{{ route('admin.products.create') }}" style="margin: 0 15px; color: #fff; text-decoration: none; font-weight: 500;"><i class="fas fa-plus"></i> Add</a>
      <a href="{{ route('admin.dashboard.index') }}" style="margin: 0 15px; color: #fff; text-decoration: none; font-weight: 500;"><i class="fas fa-chart-line"></i> Analytics</a>
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="margin-left: 20px; color: #ffd6d6; text-decoration: none; font-weight: 500;"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </nav>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
  </div>

  <!-- Page Header -->
  <div style="padding: 40px; text-align: center;">
    <h1 style="margin: 0; font-size: 32px; color: #3a0ca3;">Admin Dashboard</h1>
    <p style="color: #666; font-size: 16px;">Welcome to your control center</p>
  </div>

  <!-- Main Content Slot -->
  <div style="margin: 0 auto; max-width: 1100px; background: #ffffff; border-radius: 16px; padding: 40px; box-shadow: 0 4px 16px rgba(67, 97, 238, 0.12); min-height: 300px;">
    {{$slot}}
  </div>

  <!-- Footer -->
  <div style="margin: 60px auto 20px; max-width: 1100px; background: #fff; border-radius: 16px; padding: 40px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); display: flex; flex-wrap: wrap; gap: 40px;">
    <div style="flex: 1; min-width: 220px;">
      <h3 style="color: #5e60ce;">About Us</h3>
      <p style="color: #666;">We bring modern analytics and seamless UX to plant commerce.</p>
    </div>
    <div style="flex: 1; min-width: 220px;">
      <h3 style="color: #5e60ce;">Contact</h3>
      <p style="color: #666;">34/8 Blue Ridge, Cloud City<br>admin@plantkingdom.com<br>+1 868 555 0123</p>
    </div>
    <div style="flex: 1; min-width: 220px;">
      <h3 style="color: #5e60ce;">Quick Links</h3>
      <ul style="list-style: none; padding-left: 0;">
        <li><a href="#" style="color: #3a0ca3; text-decoration: none;">Dashboard</a></li>
        <li><a href="#" style="color: #3a0ca3; text-decoration: none;">Shop</a></li>
        <li><a href="#" style="color: #3a0ca3; text-decoration: none;">Blog</a></li>
        <li><a href="#" style="color: #3a0ca3; text-decoration: none;">Contact</a></li>
      </ul>
    </div>
    <div style="flex: 1; min-width: 220px;">
      <h3 style="color: #5e60ce;">Subscribe</h3>
      <form>
        <input type="email" placeholder="Your email" style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; margin-bottom: 10px; background: #f3f6fa;" />
        <button type="submit" style="padding: 10px 20px; background-color: #3a0ca3; color: #fff; font-weight: 600; border: none; border-radius: 6px;">Subscribe</button>
      </form>
    </div>
  </div>

  <div style="text-align: center; color: #999; font-size: 13px; padding: 20px;">
    &copy; 2025 Plant Kingdom. Crafted with care and code.
  </div>
</body>
</html>
