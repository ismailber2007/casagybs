document.getElementById("colisForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const data = {
    customer_name: this.customer_name.value,
    phone: this.phone.value,
    wilaya: this.wilaya.value,
    commune: this.commune.value,
    address: this.address.value,
    price: this.price.value,
    note: this.note.value,
  };

  fetch("https://API_BASE_URL/colis/create", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      "Authorization": "Bearer YOUR_API_TOKEN"
    },
    body: JSON.stringify(data)
  })
  .then(res => res.json())
  .then(response => {
    document.getElementById("result").innerHTML =
      "✅ تم إنشاء الشحنة بنجاح<br>رقم التتبع: " + response.tracking;
  })
  .catch(() => {
    document.getElementById("result").innerHTML =
      "❌ حدث خطأ أثناء إنشاء الشحنة";
  });
});