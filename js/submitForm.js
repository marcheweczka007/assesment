


function submitForm() {

   const name = document.getElementById('name').value;
   const email = document.getElementById('email').value;
   const mobile = document.getElementById('mobile').value;

   if(!name || !email || !mobile) {
      const message = document.getElementById('form-error');
      message.classList.add("visible");
      return
   } 

   url = `formSubmitted.html?name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&mobile=${encodeURIComponent(mobile)}`
   document.location.href = url;
}