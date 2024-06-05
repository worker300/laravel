import './bootstrap';

window.addEventListener('alert' , (event) => {
    // console.log(event);
    // console.log(data);
    console.log('hiii')
    let data = event.detail;

    Swal.fire({
        position: data.position,
        icon: data.type,
        title: data.title,
        showConfirmButton: false,
        timer: 1500
      });
})
