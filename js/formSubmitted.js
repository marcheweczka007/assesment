window.onload = function () {
   var url = document.location.href,
      params = url.split('?')[1].split('&'),
      data = {},
      tmp;
   for (var i = 0, l = params.length; i < l; i++) {
      tmp = params[i].split('=');
      data[tmp[0]] = tmp[1];
   }

   document.getElementById('name').innerHTML = data.name;
   document.getElementById('email').innerHTML = decodeURIComponent(data.email);
   document.getElementById('mobile').innerHTML = data.mobile;
}

