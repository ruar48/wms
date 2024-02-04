    document.addEventListener('DOMContentLoaded', () => {
              let btn = document.querySelector('#btn_sender');
              btn.addEventListener('click', (e) => {
                e.preventDefault();


                  const photo = document.querySelector('input[id=photo]').value;
                  console.log(photo);

                  const sender_name = document.querySelector('input[id=sender]').value;
                  console.log(sender_name);

                  const sender_id = document.querySelector('input[id=sender_id]').value;
                  console.log(sender_id);

                  const message = document.querySelector('input[id=message]').value;
                  console.log(message);

                  const receiver_id = document.querySelector('input[id=receiver]').value;
                  console.log(receiver_id);

                  var data = new FormData(this.form);

                  data.append('photo', photo);
                  data.append('sender_name', sender_name);
                  data.append('sender_id', sender_id);
                  data.append('message', message);
                  data.append('receiver_id', receiver_id);
        
              if (message === ''){
                      $('#mgs-chat').html('<div class="alert alert-danger"> Required Message!</div>');
                    }else{
                       $.ajax({
                        url: '../config/init/sender.php',
                          type: "POST",
                          data: data,
                          processData: false,
                          contentType: false,
                          async: false,
                          cache: false,
                        success: function(response) {
                          $("#mgs-chat").html(response);
                          $('#mgs-chat').animate({ scrollTop: 0 }, 'slow');
                          },
                          error: function(response) {
                            console.log("Failed");
                          }
                      });
                   }

              });
          });