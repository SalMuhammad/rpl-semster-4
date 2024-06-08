const geser = document.querySelector('#geser');
const btn = document.querySelector('.btn');
const data_login = document.querySelector('#data-login');
let klikCount = 0; // Variabel untuk melacak jumlah klik

btn.addEventListener('click', function(event) {
  event.preventDefault();
  klikCount++; // Menambah jumlah klik setiap kali tombol diklik
  const marginLeft = -350 * klikCount; // Menghitung margin kiri baru
  geser.style.marginLeft = `${marginLeft}px`; // Mengatur margin kiri elemen
  
  // if(klikCount == 1) {
  //   data_login.classList.add('hidden')
  //   data_login.classList.remove('w-[900px]')
  //   data_login.classList.add('w-[300px]')
  // }else
  if(klikCount == 2) {
    btn.textContent = 'kirim'
  } else if(klikCount == 3) {
    window.location.href = 'index.html'
  }
});
    console.log(data_login);