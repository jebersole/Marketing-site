// Tell the user how good their password is.
// Modified from iwriter.com
function passwordStrength(password) {
    var desc = new Array();
    desc[0] = "Very Weak";
    desc[1] = "Weak";
    desc[2] = "Better";
    desc[3] = "Medium";
    desc[4] = "Strong";
    desc[5] = "Strongest";

    var score = 0;

    //if password bigger than 3 give 1 point
    if (password.length > 3) score++;

    //if password has both lower and uppercase characters give 1 point
    if ((password.match(/[a-z]/)) && (password.match(/[A-Z]/))) score++;

    //if password has at least one number give 1 point
    if (password.match(/\d+/)) score++;

    //if password has at least one special character give 1 point
    if (password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) score++;

    //if password bigger than 5 give another 1 point
    if (password.length > 5) score++;

    document.getElementById("passwordDescription").innerHTML = desc[score];
    document.getElementById("passwordStrength").className = "strength" + score;
    document.getElementById("passwordpower").value = desc[score];
}

$(document).ready(function() {
    // JS to add user agreement text to modal

    $('a.read-agreements').click(function() {
        var type = $(this).data('type');
        var agreementTitle = $('.' + type + ' .ttitle').html();
        var agreementText = $('.' + type + ' .babelsans').html();
        $('.modal-dialog').addClass('wider');

        $('#windowModal .modal-title').html(agreementTitle);
        $('#windowModal .modal-body').html(agreementText);
        $('#windowModal .close-btn').html('Agree and Close').addClass('btn-success').removeClass('btn-default');
        $('#windowModal .confirm-btn').remove();

        $('#windowModal').modal('show');
    })

    $('#windowModal .close-btn').click(function() {
        $('[name = "accepted"]').prop('checked', true);
    })

    // Update the background pics for each input field if clicked
    var bgs = {
        "firstname": "assets/fn.jpg",
        "lastname": "assets/fn.jpg",
        "email": "assets/em.jpg",
        "username": "assets/user.jpg",
        "password": "assets/pass.jpg",
        "repassword": "assets/confp.jpg"
    };
    $('.form-control').each(function() {
        $(this).css("background", "url('" + bgs[this.id] + "') -10px 0px no-repeat");
    })
    $('.form-control').on('click', function() {
        $(this).css("background", "url('" + bgs[this.id] + "') -10px -50px no-repeat"); //-6 -52
    })
    $('.form-control').on('focusout', function() {
        $(this).css("background", "url('" + bgs[this.id] + "') -10px 0px no-repeat");
    })

    // Banner text animation
    var width = $('#topcont').width();
    if (width > 395) {
        $('#topcap').animate({
            marginLeft: width / (2.8)
        }, 1000);
    } else {
        $('#topcap').animate({
            marginLeft: width / 4
        }, 1000);
    }
});
