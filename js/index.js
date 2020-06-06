$(document).ready(function(){
    $('#action_menu_btn').click(function(){
        $('.action_menu').toggle();
    });

    $(document).on('click','.send_btn', function(){
        $.ajax({
            type: "POST",
            url: window.location.href,
            data: {
                'message': $('.type_msg').val(),
                'action': 'send_message'
            },
            success: function (data) {
                html = `
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send"> 
                            ` + $('.type_msg').val() + `
                            <!-- <span class="msg_time_send">8:55 AM, Today</span> -->
                        </div>
                        <div class="img_cont_msg">
                            <img src="./img/ava_cuathi.jpg" class="rounded-circle user_img_msg">
                        </div>
                    </div>
                `;
                $('.msg_card_body').append(html);
                $('.type_msg').val('');
            }
        })
    });
});