

function custom_alert(type,message,url){
    swal({
        title: message,
        icon: type,
        buttons: {
            cancel: false,
            confirm: true,
        }
      })
      .then((willDelete) => {
            if (willDelete) {
                window.location.href = url;
            }
    });
}