const geser = document.querySelector('#geser');
const btnSebelum = document.querySelector('#btn-sebelumnya');
const btn = document.querySelector('#btn-register');
const data_login = document.querySelector('#data-login');
let klikCount = 0; // Variabel untuk melacak jumlah klik

btn.addEventListener('click', function(event) {
  event.preventDefault();
  klikCount++; // Menambah jumlah klik setiap kali tombol diklik
  const marginLeft = -350 * klikCount; // Menghitung margin kiri baru
  geser.style.marginLeft = `${marginLeft}px`; // Mengatur margin kiri elemen
  
  if(klikCount == 1) {
    btnSebelum.classList.remove('hidden')
  }else
  if(klikCount == 2) {
    btn.textContent = 'kirim'
  } else if(klikCount == 3) {
    alert('registrasi berhasil')
    window.location.href = 'beranda.php'
  }
});
btnSebelum.addEventListener('click', function(event) {
  event.preventDefault();
  klikCount--; // Menambah jumlah klik setiap kali tombol diklik
  const marginLeft = -350 * klikCount; // Menghitung margin kiri baru
  geser.style.marginLeft = `${marginLeft}px`; // Mengatur margin kiri elemen
  
  if(klikCount == 0) {
    btnSebelum.classList.add('hidden')
  }else
  if(klikCount == 2) {
    btn.textContent = 'kirim'
  } 
});

