<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <title>CasaGyps | إنشاء شحنة</title>
  <link rel="stylesheet" href="casa.css" />
</head>
<body>

  <header class="header">
    <img src="image.png" alt="CasaGyps Logo" class="logo">
  </header>

  <main class="container">
    <h2>📦 إنشاء شحنة جديدة</h2>

   <form action="create.php" method="POST">
      <input type="text" name="customer_name" placeholder="اسم الزبون" required>
      <input type="tel" name="phone" placeholder="رقم الهاتف" required>

      <input type="text" name="wilaya" placeholder="الولاية" required>
      <input type="text" name="commune" placeholder="البلدية" required>
      <input type="text" name="address" placeholder="العنوان الكامل" required>

      <input type="hidden" name="price" value="3500">
      <div class="price-box">
        <span> سعر المنتج:</span>
        <strong id="productPrice">3500 DA</strong>
      </div>

      <textarea name="note" placeholder="ملاحظات (اختياري)"></textarea>
      
      <button type="submit">🚚 إنشاء الشحنة</button>
    </form>

    <div id="result"></div>
  </main>

  <footer>
    © 2026 CasaGyps – جميع الحقوق محفوظة
  </footer>

  <script src="script.js"></script>
</body>

</html>







