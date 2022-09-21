const request = new XMLHttpRequest();
const url = "ajax.php";

document.querySelector("select").addEventListener('change', function (e) {
  let dep = e.target.value;

  request.open("POST", url, true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.addEventListener("readystatechange", () => {
      if(request.readyState === 4 && request.status === 200) {
        var res = request.responseText;
         document.getElementById('table').innerHTML = res;
      }
  });

  params = "getDataDep=" + dep;
  request.send(params);
})
