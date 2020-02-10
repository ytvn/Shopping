/**
 * Theme: Adminto  Admin Dashboard
 * Author: Coderthemes
 * X editable
 */


$(function(){

    //modify buttons style
    $.fn.editableform.buttons =
        '<button type="submit" class="btn btn-primary editable-submit btn-sm waves-effect waves-light"><i class="mdi mdi-check"></i></button>' +
        '<button type="button" class="btn btn-secondary editable-cancel btn-sm waves-effect"><i class="mdi mdi-close"></i></button>';

    //Inline editables
    $('#inline-username').editable({
        type: 'text',
        pk: 1,
        name: 'username',
        title: 'Enter username',
        mode: 'inline'
    });
    $('#inline-fullname').editable({
        type: 'text',
        pk: 2,
        name: 'fullname',
        title: 'Enter username',
        mode: 'inline'
    });
    $('#inline-address').editable({
        type: 'text',
        pk: 3,
        name: 'username',
        title: 'Enter username',
        mode: 'inline'
    });
    $('#inline-email').editable({
        type: 'text',
        pk: 4,
        name: 'username',
        title: 'Enter username',
        mode: 'inline'
    });
    // $('#inline-role').editable({
    //     type: 'text',
    //     pk: 4,
    //     name: 'username',
    //     title: 'Enter username',
    //     mode: 'inline'
    // });

    $('#inline-firstname').editable({
        validate: function(value) {
            if($.trim(value) == '') return 'This field is required';
        },
        mode: 'inline'
    });

    $('#inline-role').editable({
        prepend: "not selected",
        mode: 'inline',
        source: [
            {value: 'staff', text: 'staff'},
            {value: 'admin', text: 'admin'},
            {value: 'customer', text: 'customer'}
        ],
        display: function(value, sourceData) {
            var colors = {"": "gray", 1: "green", 2: "blue"},
                elem = $.grep(sourceData, function(o){return o.value == value;});

            if(elem.length) {
                $(this).text(elem[0].text).css("color", colors[value]);
            } else {
                $(this).empty();
            }
        }
    });
    $('#inline-category').editable({
        prepend: "not selected",
        mode: 'inline',
        source: [
            {value: 'quan_ao_nam', text: 'Quần áo nam'},
            {value: 'giay_dep_nam', text: 'Giày dép nam'},
            {value: 'dong_ho_nam', text: 'Đồng hồ nam'},
            {value: 'tui_xach_bop_vi_nam', text: 'Túi xách, bóp, ví nam'},
            {value: 'that_lung_day_nit_nam', text: 'Thắt lưng dây nịt nam'},
            {value: 'phu_kien_nam', text: 'Phụ kiện nam'},
            {value: 'vay_dam_nu', text: 'Váy đầm nữ'},
            {value: 'quan_ao_nu', text: 'Quân áo nữ'},
            {value: 'dong_ho_nu', text: 'Đồng hồ nữ'},
            {value: 'giay_dep_nu', text: 'Giày dép nữ'},
            {value: 'tui_xach_bop_vi_nu', text: 'Túi xách, bóp, ví nữ'},
            {value: 'phu_kien_nu', text: 'Phụ kiện nữ'},
        ],
        display: function(value, sourceData) {
            var colors = {"": "gray", 1: "green", 2: "blue"},
                elem = $.grep(sourceData, function(o){return o.value == value;});

            if(elem.length) {
                $(this).text(elem[0].text).css("color", colors[value]);
            } else {
                $(this).empty();
            }
        }
    });

    $('#inline-group').editable({
        showbuttons: false,
        mode: 'inline'
    });

    $('#inline-status').editable({
        mode: 'inline'
    });

    $('#inline-dob').editable({
        mode: 'inline'
    });

    $('#inline-event').editable({
        placement: 'right',
        mode: 'inline',
        combodate: {
            firstItem: 'name'
        }
    });

    $('#inline-comments').editable({
        showbuttons: 'bottom',
        mode: 'inline'
    });

    $('#inline-fruits').editable({
        pk: 1,
        limit: 3,
        mode: 'inline',
        source: [
            {value: 1, text: 'Banana'},
            {value: 2, text: 'Peach'},
            {value: 3, text: 'Apple'},
            {value: 4, text: 'Watermelon'},
            {value: 5, text: 'Orange'}
        ]
    });

    $('#inline-tags').editable({
        inputclass: 'input-large',
        mode: 'inline',
        select2: {
            tags: ['html', 'javascript', 'css', 'ajax'],
            tokenSeparators: [",", " "]
        }
    });

});