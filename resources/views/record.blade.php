<form action="https://sheetdb.io/api/v1/htyfo96wxnuia" method="POST" id="sheetdb-form">
  Name: <input name="data[name]">
  Age: <input name="data[age]">
  Score: <input name="data[score]">
  <button type="submit">Submit</button>
</form>

<script>
  var form = document.getElementById('sheetdb-form');
  form.addEventListener("submit", e => {
    e.preventDefault();
    fetch(form.action, {
        method : "POST",
        body: new FormData(document.getElementById("sheetdb-form")),
    }).then(
        response => response.json()
    ).then((html) => {
      // you can put any JS code here
      alert('New record was added successfully!')
    });
  });
</script>