let selectedIdStaff = ''
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function setIdStaff(id) {
    selectedIdStaff = id;
}

function confirmDeleteStaff() {
    $.ajax({
        url: `/api/admin/user/${selectedIdStaff}`,
        type: 'DELETE',
        success: function(result) {
            location.reload();
        }
    });
}

const viewDetail = (userid) => {
    selectedIdStaff = userid
    $.get(`/api/user/${userid}`, (data, status) => {
        let { name, fullname, address, email, role, dob, image } = data[0]
        
        $('#inline-username').text(name)
        $('#inline-fullname').text(fullname)
        $('#inline-address').text(address)
        $('#inline-email').text(email)
        $('#inline-role').text(role)
        $('#inline-dob').text(dob)
        if (image) {
           
            $('#user-avatar').attr('src', `/${image}`);
            // $('#user-avatar').attr('src', "{{asset(" + "assets\images\staff\staff1.png" +")}}");
        }else{
            console.log("here")
            image = "assets\\images\\staff\\admin.png";
            // $('#user-avatar').attr('src', 'http://localhost:8000/assets/images//users/avatar-1.jpg');
            // $('#user-avatar').attr('src', '{{asset("assets\\images\\staff\\admin.png")}}');
            $('#user-avatar').attr('src', `/${image}`);
        }
    });
}



$('#btnSubmitUpdate').click(function (e) {
    let username = $('#inline-username').text()
    let fullname = $('#inline-fullname').text()
    let address = $('#inline-address').text()
    let email = $('#inline-email').text()
    let role = $('#inline-role').text()
    let dob = $('#inline-dob').text()

    // format date before submit to server
    let arrDOB = dob.split('/')
    let arrDOBFormat1 = dob.split('-')
    if (arrDOB.length > 1) {
        dob = `${arrDOB[1]}/${arrDOB[0]}/${arrDOB[2]}`
    }
    if (arrDOBFormat1.length > 1) {
        dob = `${arrDOBFormat1[1]}/${arrDOBFormat1[2]}/${arrDOBFormat1[0]}`
    }

    //stop submit the form, we will post it manually.
    e.preventDefault();
    // Get form
    var form = $('#fileUploadForm')[0];

    // Create an FormData object 
    var data = new FormData(form);
    let fileData=$('#file').prop('files')[0]
   console.log(fileData);
    console.log($('#file').val());
    // append others fields
    data.append('username', username)
    data.append('fullname', fullname)
    data.append('address', address)
    data.append('email', email)
    data.append('role', role)
    data.append('dob', dob)
    data.append('file',fileData)
    // disabled the submit button
    $("#btnSubmitUpdate").prop("disabled", true);
    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: `/api/user/${selectedIdStaff}`,
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function (data) {
            $("#btnSubmitUpdate").prop("disabled", false);
            location.reload();
        },
        error: function (e) {
            $("#btnSubmitUpdate").prop("disabled", false);
        }
    });
})
